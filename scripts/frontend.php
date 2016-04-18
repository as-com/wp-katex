<?php
global $katex_options;
global $katex_using;
$katex_options = get_option('katex_settings');

function katex_init() {
	global $katex_options;

	if (is_array($katex_options)) {
		if (isset($katex_options['katex_jsdelivr_setting']) && $katex_options['katex_jsdelivr_setting'] == 1) {
			wp_register_style('katex', '//cdn.jsdelivr.net/katex/0.6.0/katex.min.css', false, null);
			wp_register_script('katex', '//cdn.jsdelivr.net/katex/0.6.0/katex.min.js', array('jquery'), null, true);
		} else {
			wp_register_style('katex', plugins_url('assets/katex.min.css', dirname(__FILE__)), false, '0.6.0');
			wp_register_script('katex', plugins_url('assets/katex.min.js', dirname(__FILE__)), array('jquery'), '0.6.0', true);
		}
	} else {
		wp_register_style('katex', plugins_url('assets/katex.min.css', dirname(__FILE__)), false, '0.6.0');
		wp_register_script('katex', plugins_url('assets/katex.min.js', dirname(__FILE__)), array('jquery'), '0.6.0', true);
	}
}
add_action('init', 'katex_init');

function katex_handler($atts, $content = null){
	global $katex_using;
	wp_enqueue_script('katex');
	wp_enqueue_style('katex');
	$katex_using = true;
	// $break = null; //?
	$latex_atts = shortcode_atts( array(
		'display' => 'false',
	), $atts );

	if ($latex_atts['display'] == 'true' || strpos($content, '\\displaystyle') === 0) {
		return '<script type="text/katex" display="true">' . html_entity_decode($content) . '</script>';
	} else {
		return '<script type="text/katex" display="false">' . html_entity_decode($content) . '</script>';
	}
}
add_shortcode('latex', 'katex_handler');

function katex_rubber() {
	global $katex_using;
	if ($katex_using) {
	?>
	<script>
		(function($) {
			$("script[type='text/katex']").each(function (i) {
				try {
					console.log(this);
					if (this.attributes.display.textContent == "true") {
						katex.render(this.text, $("<span></span>").insertAfter(this).get(0), { displayMode: true });
					} else {
						katex.render(this.text, $("<span></span>").insertAfter(this).get(0));
					}
				} catch (e) {
					$("<span style='color:red'>" + e + "</span>").insertAfter(this);
					console.log(e);
				}
			});
		})(jQuery);
	</script>
	<?php
	}
}
add_action('wp_footer', 'katex_rubber', 100);

function katex_exempt_wptexturize($shortcodes) {
	$shortcodes[] = 'latex';
	return $shortcodes;
}
add_filter('no_texturize_shortcodes', 'katex_exempt_wptexturize');
