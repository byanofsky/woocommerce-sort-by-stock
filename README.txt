=== WooCommerce Sort By Stock ===
Contributors: byanofsky
Tags: ecommerce, e-commerce, commerce, wordpress ecommerce, inventory, stock, sales, sort by stock
Requires at least: 3.5
Tested up to: 4.6.1
Stable tag: 2.2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sort your WooCommerce products by the stock amount on the WooCommerce product dashboard page.

== Description ==

WooCommerce Sort By Stock is a relatively simple plugin. It does one thing and one thing only: allows you to sort by stock amount in WooCommerce.

Upon activation of this plugin, you will be able to sort products by the amount of stock remaining on your WooCommerce product dashboard page. Simply click on the `Stock` admin column to arrange by ascending or descending.

If sorting in ascending order, out of stock items will be shown first, followed by in stock but inventory not managed (no stock amount number), and finally showing in stock items which have a stock amount number, starting with 1 and increasing.

If sorting in descending order, will provide the opposite, starting with items with the largest amount of stock, moving down to out of stock.

== Installation ==

1. Upload the `wc-sort-by-stock` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress
3. There are no options. Just go to the Products dashboard page, click the `Stock` column header, and you will be able to sort by the amount of stock

== Frequently Asked Questions ==

= Do I need to change any settings when installing this plugin? =

No. Once you activate the plugin, you'll be able to sort by stock amount. No options or setting changes are required.

= Does this change the ordering of products on the front end (what the website visitor sees)? =

No. This plugin only allows you to sort by stock amount on the dashboard (backend) of your site. This will not affect your front end in any way.

== Screenshots ==

1. Showing products sorted in descending order by stock amount (from greatest to least).

== Changelog ==

= 2.2.0 =
* Fixed code quality to bring up to PHP style guide standards
* used the $wpdb->prepare() method, just in case

= 2.1.0 =
* Added fix to allow plugin to work on sites with changed database prefixes from the default
* Added GROUPBY parameter to query to prevent duplicate product listings

= 2.0.0 =
* Fixed an issue where products were ordered incorrectly by stock amount.

= 1.0.0 =
* The very first version

== Upgrade Notice ==

= 2.2.0 =
No major changes on this except for fixing code quality. Will be adding a new feature soon.

= 2.1.0 =
This version fixes a major error that prevented the plugin from working on sites with database prefixes that weren't wp_.

= 2.0.0 =
This version fixes a major error in how products were ordered incorrectly.

= 1.0.0 =
This is the very first version.