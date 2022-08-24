=== Ticker Links ===
Author URI: https://polygon.io
Plugin URI: https://wordpress.org/plugins/ticker-links
Donate link: 
Contributors: 
Tags: 
Requires at least: 
Tested up to: 
Requires PHP: 
Stable tag: 1.0.0
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Enrich stock market content by providing links to current price, charts, and news from <https://polygon.io>


== Description ==

This plugin provides the ability to easily link to current stock market information for any ticker symbol on <a href="https://polygon.io">Stock Market API provider Polygon.io</a>.

To link to a stock within your content:

From the options menu, select "Edit as HTML"
Wrap any of your content in a span tag and add the attribute data-ticker-links="TICKER"
Save and preview your content.

Example:

<p>Cruise stocks have been up this week, showing an overall trend in the travel sector.  
Companies such as <span data-ticker-links="NCLH">Norwegian Cruise Lines</span> and 
<span data-ticker-links="RCL">Royal Caribbean Group</span> have lead the rally.</p>

You can find the available ticker symbols using Polygon's <a href="https://polygon.io/docs/stocks/get_v3_reference_tickers">Stock Ticker API</a>

== Frequently Asked Questions ==

= Which tickers are available? =

You can use the <a href="https://polygon.io/docs/stocks/get_v3_reference_tickers">Stock Ticker API</a> to search for available symbols, or
<a href="https://polygon.io/quote/tickers">scan through available stock tickers</a> on the website.

= What is Polygon.io =

Polygon is a market data API platform that provide APIs for stocks (including OTC), options, forex, and crypto.  
You can <a href="https://polygon.io/dashboard/signup">create a free account</a> to get access to end-of-day price data and two years of historical data.

== Installation ==

1. Go to `Plugins` in the Admin menu
2. Click on the button `Add new`
3. Search for `Ticker Links` and click 'Install Now' or click on the `upload` link to upload `ticker-links.zip`
4. Click on `Activate plugin`

== Changelog ==

= 1.0.0: August 23, 2022 =
* Birthday of Ticker Links