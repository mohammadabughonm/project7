<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Own_Shope_Pro_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( get_stylesheet_directory() . '/own-shope-pro/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Own_Shope_Pro_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Own_Shope_Pro_Customize_Section_Pro(
				$manager,
				'own_shope_buy',
				array(
					'priority'      => 10,
					'title'    => esc_html__( 'Own Shope Pro', 'own-shope' ),
					'pro_text' => esc_html__( 'Upgrade to Pro', 'own-shope' ),
					'pro_url'  => 'https://www.spiraclethemes.com/own-shop-pro-addons/'
				)
			)
		);
	}
}

// Doing this customizer thang!
Own_Shope_Pro_Customize::get_instance();
