<?php
/**
 * Plugin Name: JC Google Analytics
 * Description: Adds the GA tracking code to the site.
 * Version: 1.0.0
 * Author: Real Big Marketing
 * Author URI: http://realbigmarketing.com
 */

add_action( 'wp_footer', 'jc_google_analytics_integrate' );

/**
 * Adds the tracking code.
 *
 * @since 1.0.0
 * @access private
 */
function jc_google_analytics_integrate() {

	if ( is_user_logged_in() ) {
		return;
	}

	// @formatter:off
	?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-9877942-1', 'auto');
		ga('send', 'pageview');
	</script>
	<?php
	// @formatter:on
}