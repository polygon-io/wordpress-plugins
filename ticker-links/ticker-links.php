<?php
/**
 * Ticker Links
 *
 * @package       TICKERLINKS
 * @author        Polygon
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   Ticker Links
 * Plugin URI:    https://wordpress.org/plugins/ticker-links
 * Description:   Enrich stock market content by providing links to current price, charts, and news from <https://polygon.io>.
 * Version:       1.0.0
 * Author:        Polygon
 * Author URI:    https://polygon.io
 * Text Domain:   ticker-links
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with Ticker Links. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Add links to tickers within the main content
 */
function ticker_links_content( $content ) {
	if ( in_the_loop() && is_main_query() ) {
		return ticker_links_convert_link( $content );
	}

	return $content;
}

add_filter('the_content', 'ticker_links_content');


/**
 * Replace spans with the given data attribute to anchor tags linking to the appropriate ticker.
 */
function ticker_links_convert_link( $content ) {
	return preg_replace(
		"/<span data-ticker-links=\"(.*?)\">(.*?)<\/span>/",
		"<a href=\"https://polygon.io/quote/$1\" target=\"_blank\">$2</a>",
		$content
	);
}