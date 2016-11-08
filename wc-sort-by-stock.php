<?php

/**
 * @wordpress-plugin
 * Plugin Name:       WooCommerce Sort By Stock
 * Plugin URI:        https://github.com/byanofsky/wc-sort-by-stock
 * Description:       Sort your WooCommerce products by the stock amount on the WooCommerce product dashboard page.
 * Version:           2.2.0
 * Author:            Brandon Yanofsky
 * Author URI:        http://www.mywpexpert.com/
 * License:           GPL-2.0
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-sort-by-stock
 */

/** Die if accessed directly
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/* Thanks to Rachel Carden for original code on making WordPress admin columns sortable
* http://wpdreamer.com/2014/04/how-to-make-your-wordpress-admin-columns-sortable/
*/

/**
* Make stock column sortable
*/
add_filter( 'manage_edit-product_sortable_columns', 'wcss_make_stock_sortable' );
function wcss_make_stock_sortable( $sortable_columns ) {

   $sortable_columns[ 'is_in_stock' ] = '_stock';
   return $sortable_columns;

}

/**
* Adjust the order of the posts as they are output on the backend
*/
add_filter( 'posts_clauses', 'wcss_manage_wp_posts_be_qe_posts_clauses', 1, 2 );
function wcss_manage_wp_posts_be_qe_posts_clauses( $pieces, $query ) {
	global $wpdb;

	/** 
	* Set variable for what is specified to orderby
	*/ 
	$orderby = $query->get( 'orderby' );

	/**
	* Check for main query and if orderby is specified
	*/
	if ( $query->is_main_query() && ( $query->get( 'orderby' ) == '_stock' ) ) {

	    // Get the order query variable - ASC or DESC
	    $order = strtoupper( $query->get( 'order' ) );

	    // Make sure the order setting qualifies. If not, set default as ASC
	    if ( ! in_array( $order, array( 'ASC', 'DESC' ) ) )
	      $order = 'ASC';
	        
	  		
	    /**
	    * Join postmeta to include stock_status and stock info
	    */
		$pieces[ 'join' ] .= $wpdb->prepare(
			"
			LEFT JOIN $wpdb->postmeta wc_stock_status
			ON $wpdb->posts.ID = wc_stock_status.post_id
			AND wc_stock_status.meta_key = %s
			LEFT JOIN $wpdb->postmeta wc_stock
			ON $wpdb->posts.ID = wc_stock.post_id
			AND wc_stock.meta_key = %s
			",
			'_stock_status',
			'_stock'
		);

	    //Set reverse order in a variable
	    if($order == 'ASC') {
	      $in_stock_order = 'DESC';
	    } else {
	      $in_stock_order = 'ASC';
	    }

	    //Specify orderby. Orderby stock status first in reverse order, then stock amount.
	    $pieces[ 'orderby' ] = "wc_stock_status.meta_value $in_stock_order, " . 
	    	"wc_stock.meta_value * 1 $order, " . $pieces[ 'orderby' ];
	
    }

    $pieces[ 'groupby' ] = "{$wpdb->posts}.ID";

    return $pieces;

}