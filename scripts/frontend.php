<?php
global $katex_options;
global $katex_using;
$katex_options = get_option( 'katex_settings' );

function katex_init() {
	global $katex_options;

	if ( is_array( $katex_options ) && isset( $katex_options['katex_jsdelivr_setting'] ) && $katex_options['katex_jsdelivr_setting'] == 1 ) {
		wp_register_style( 'katex', '//cdn.jsdelivr.net/npm/katex@0.8.3/dist/katex.min.css', false, null );
		wp_register_script( 'katex', '//cdn.jsdelivr.net/npm/katex@0.8.3/dist/katex.min.js', array(), null, true );
	} else {
		wp_register_style( 'katex', plugins_url( 'assets/katex.min.css', dirname( __FILE__ ) ), false, '0.8.3' );
		wp_register_script( 'katex', plugins_url( 'assets/katex.min.js', dirname( __FILE__ ) ), array(), '0.8.3', true );
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

	if ( $latex_atts['display'] == 'true' || strpos( $content, '\\displaystyle' ) === 0 ) {
		return '<span class="wp-katex-eq katex-display" data-display="true">' . htmlspecialchars( html_entity_decode( $content ) ) . '</span>';
	} else {
		return '<span class="wp-katex-eq" data-display="false">' . htmlspecialchars( html_entity_decode( $content ) ) . '</span>';
	}
}

add_shortcode( 'latex', 'katex_handler' );

function katex_rubber() {
	global $katex_using;
	if ( $katex_using ) {
		?>
        <script>!function () {
                "use strict";
                var e = document.querySelectorAll(".wp-katex-eq");
                Array.prototype.forEach.call(e, function (e) {
                    var t = {displayMode: "true" === e.getAttribute("data-display"), throwOnError: !1},
                        r = document.createElement("span");
                    try {
                        katex.render(e.textContent, r, t)
                    } catch (a) {
                        r.style.color = "red", r.textContent = a.message
                    }
                    e.parentNode.replaceChild(r, e)
                })
            }();</script>
		<?php
	}
}

add_action( 'wp_footer', 'katex_rubber', 100 );

function katex_exempt_wptexturize( $shortcodes ) {
	$shortcodes[] = 'latex';

	return $shortcodes;
}

add_filter( 'no_texturize_shortcodes', 'katex_exempt_wptexturize' );
