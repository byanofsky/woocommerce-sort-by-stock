# WooCommerce Sort By Stock

Sort your WooCommerce products by the stock amount on the WooCommerce product dashboard page.

## Descriptions

WooCommerce Sort By Stock is a relatively simple plugin. It does one thing and one thing only: allows you to sort by stock amount in WooCommerce.

Upon activation of this plugin, you will be able to sort products by the amount of stock remaining on your WooCommerce product dashboard page. Simply click on the `Stock` admin column to arrange by ascending or descending.

If sorting in ascending order, out of stock items will be shown first, followed by in stock but inventory not managed (no stock amount number), and finally showing in stock items which have a stock amount number, starting with 1 and increasing.

If sorting in descending order, will provide the opposite, starting with items with the largest amount of stock, moving down to out of stock.

## Contents

WooCommerce Sort By Stock includes the following files:

* `.gitignore`. Used to exclude certain files from the repository.
* `CHANGELOG.md`. The list of changes to the core project.
* `README.md`. The file that you’re currently reading.
* A `wc-sort-by-stock` subdirectory that contains the source code - a fully executable WordPress plugin.

## Installation

WooCommerce Sort By Stock can be installed in one of two ways both of which are documented below.

Instead, the options are:

1. Upload the `wc-sort-by-stock` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the `Plugins` menu in WordPress
3. There are no options. Just go to the WooCommerce Products dashboard page, click the `Stock` column header, and you will be able to sort by the amount of stock

## License

WooCommerce Sort By Stock is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

## Important Notes

### Licensing

The WooCommerce Sort By Stock is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

### Assets

The `assets` directory contains three files.

1. `banner-772x250.png` is used to represent the plugin’s header image.
2. `icon-256x256.png` is a used to represent the plugin’s icon image (which is new as of WordPress 4.0).
3. `screenshot-1.png` is used to represent a single screenshot of the plugin that corresponds to the “Screenshots” heading in your plugin `README.txt`.

# Credits

WooCommerce Sort By Stock by [Brandon Yanofsky](http://twitter.com/byanofsky/).

This code is based on code by [Rachel Carden](http://wpdreamer.com/2014/04/how-to-make-your-wordpress-admin-columns-sortable/) for original code used to make admin columns sortable.
