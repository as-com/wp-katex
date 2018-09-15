<?php
// Admin pages
// Generated with wpsettingsapi.jeroensormani.com and slightly modified
add_action( 'admin_menu', 'katex_add_admin_menu' );
add_action( 'admin_init', 'katex_settings_init' );


function katex_add_admin_menu() {

	add_options_page( 'WP-KaTeX', 'WP-KaTeX', 'manage_options', 'katex', 'katex_options_page' );

}


function katex_settings_exist() {

	if ( false == get_option( 'katex_settings' ) ) {

		add_option( 'katex_settings' );

	}

}


function katex_settings_init() {

	register_setting( 'pluginPage', 'katex_settings' );

	add_settings_section(
		'katex_pluginPage_section',
		__( '', 'wordpress' ),
		'katex_settings_section_callback',
		'pluginPage'
	);

	add_settings_field(
		'katex_jsdelivr_setting',
		__( 'Use jsDelivr to load files', 'wordpress' ),
		'katex_jsdelivr_setting_render',
		'pluginPage',
		'katex_pluginPage_section'
	);


}


function katex_jsdelivr_setting_render() {

	$options = get_option( 'katex_settings' );
	?>
    <input type='checkbox'
           name='katex_settings[katex_jsdelivr_setting]' <?php checked( $options['katex_jsdelivr_setting'], 1 ); ?>
           value='1'>
    &nbsp; <a href="http://www.jsdelivr.com"
              target="_blank">jsDelivr</a> is a free, open source CDN. Using it will speed up the loading of KaTeX.
	<?php

}


function katex_settings_section_callback() {

	echo __( '', 'wordpress' );

}


function katex_options_page() {

	?>
    <div class="wrap">
        <h1>WP-KaTeX</h1>
        <form action='options.php' method='post'>

			<?php
			settings_fields( 'pluginPage' );
			do_settings_sections( 'pluginPage' );
			submit_button();
			?>

        </form>
    </div>
	<?php

}

