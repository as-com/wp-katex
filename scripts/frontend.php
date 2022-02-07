<?php
global $katex_options;
global $katex_using;
$katex_options = get_option( 'katex_settings' );

define( 'WP_KATEX_JS_VERSION', '0.11.0' );
define( 'WP_KATEX_JS_LOCAL_VERSION', '0.11.0' );

function katex_init() {
	global $katex_options;

	if ( is_array( $katex_options ) && isset( $katex_options['katex_jsdelivr_setting'] ) && $katex_options['katex_jsdelivr_setting'] == 1 ) {
		wp_register_style( 'katex', '//cdn.jsdelivr.net/npm/katex@' . WP_KATEX_JS_VERSION . '/dist/katex.min.css', false, null );
		wp_register_script( 'katex', '//cdn.jsdelivr.net/npm/katex@' . WP_KATEX_JS_VERSION . '/dist/katex.min.js', array(), null, true );
	} else {
		wp_register_style( 'katex', plugins_url( 'assets/katex.min.css', dirname( __FILE__ ) ), false, WP_KATEX_JS_LOCAL_VERSION );
		wp_register_script( 'katex', plugins_url( 'assets/katex.min.js', dirname( __FILE__ ) ), array(), WP_KATEX_JS_LOCAL_VERSION, true );
	}
}

add_action( 'init', 'katex_init' );

function katex_handler( $atts, $content = null ) {
	global $katex_using;
	wp_enqueue_script( 'katex' );
	wp_enqueue_style( 'katex' );
	$katex_using = true;
	$latex_atts  = shortcode_atts( array(
		'display' => 'false',
	), $atts );

	$enc         = htmlspecialchars( html_entity_decode( $content ) );
	$displayAttr = $latex_atts['display']; // TODO: This is disgusting
	if ( $displayAttr === "true" || $displayAttr === "1" || strpos( $content, '\\displaystyle' ) === 0 ) {
		return '<span class="wp-katex-eq katex-display" data-display="true">' . $enc . '</span>';
	} else {
		return '<span class="wp-katex-eq" data-display="false">' . $enc . '</span>';
	}
}

add_shortcode( 'latex', 'katex_handler' );

function katex_rubber() {
	global $katex_using;
	if ( $katex_using ) {
		// @formatter:off
		?><script>!window.addEventListener('load', (event) => {for(var e=document.querySelectorAll(".wp-katex-eq"),t=0;t<e.length;t++){var r=e[t],a=document.createElement("span");try{katex.render(r.textContent,a,{displayMode:"true"===r.getAttribute("data-display"),throwOnError:!1})}catch(n){a.style.color="red",a.textContent=n.message}r.parentNode.replaceChild(a,r)}});</script><?php
		// @formatter:on
	}
}

add_action( 'wp_footer', 'katex_rubber', 100 );

function katex_exempt_wptexturize( $shortcodes ) {
	$shortcodes[] = 'latex';

	return $shortcodes;
}

add_filter( 'no_texturize_shortcodes', 'katex_exempt_wptexturize' );
