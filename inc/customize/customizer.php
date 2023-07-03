<?php
/**
 * vw-computer-repair-pro Theme Customizer
 *
 * @package vw-computer-repair-pro
 */
/**
 * Loads custom control for layout settings
 */
function vw_computer_repair_pro_custom_controls() {
     require_once get_template_directory() . '/inc/customize/controls/admin/customize-texteditor-control.php';
     require_once get_template_directory() . '/inc/customize/controls/custom-controls.php';
     require_once  get_template_directory() . '/inc/customize/controls/button-controls.php';
}
add_action( 'customize_register', 'vw_computer_repair_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_computer_repair_pro_customize_register( $wp_customize ) {
    // $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    // $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    if ( isset( $wp_customize->selective_refresh ) ) {
    $wp_customize->selective_refresh->add_partial( 'blogname', array(
        'selector' => '.logo a',
        'render_callback' => 'twentyfifteen_customize_partial_blogname',
    ) );
    $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
    ) );
}
    $wp_customize->add_setting('vw_computer_repair_pro_display_title',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_display_title',array(
        'type' => 'checkbox',
        'label' => __('Show Title','vw-computer-repair-pro'),
        'section' => 'title_tagline',
    ));
    $wp_customize->add_setting('vw_computer_repair_pro_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('vw_computer_repair_pro_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','vw-computer-repair-pro'),
        'section' => 'title_tagline',
    ));
    
    //add home page setting pannel
    $wp_customize->add_panel( 'vw_computer_repair_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'vw-computer-repair-pro' ),
        'description' => __( 'Description of what this panel does.', 'vw-computer-repair-pro' ),
    ) );
    $font_array = array(
        '' => __( 'No Fonts', 'vw-computer-repair-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'vw-computer-repair-pro' ),
        'Acme' => __( 'Acme', 'vw-computer-repair-pro' ),
        'Anton' => __( 'Anton', 'vw-computer-repair-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'vw-computer-repair-pro' ),
        'Arimo' => __( 'Arimo', 'vw-computer-repair-pro' ),
        'Arsenal' => __( 'Arsenal', 'vw-computer-repair-pro' ),
        'Arvo' => __( 'Arvo', 'vw-computer-repair-pro' ),
        'Alegreya' => __( 'Alegreya', 'vw-computer-repair-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'vw-computer-repair-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'vw-computer-repair-pro' ),
        'Bangers' => __( 'Bangers', 'vw-computer-repair-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'vw-computer-repair-pro' ),
        'Bad Script' => __( 'Bad Script', 'vw-computer-repair-pro' ),
        'Bitter' => __( 'Bitter', 'vw-computer-repair-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'vw-computer-repair-pro' ),
        'BenchNine' => __( 'BenchNine', 'vw-computer-repair-pro' ),
        'Cabin' => __( 'Cabin', 'vw-computer-repair-pro' ),
        'Cardo' => __( 'Cardo', 'vw-computer-repair-pro' ),
        'Courgette' => __( 'Courgette', 'vw-computer-repair-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'vw-computer-repair-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'vw-computer-repair-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'vw-computer-repair-pro' ),
        'Cuprum' => __( 'Cuprum', 'vw-computer-repair-pro' ),
        'Cookie' => __( 'Cookie', 'vw-computer-repair-pro' ),
        'Chewy' => __( 'Chewy', 'vw-computer-repair-pro' ),
        'Days One' => __( 'Days One', 'vw-computer-repair-pro' ),
        'Dosis' => __( 'Dosis', 'vw-computer-repair-pro' ),
        'Economica' => __( 'Economica', 'vw-computer-repair-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'vw-computer-repair-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'vw-computer-repair-pro' ),
        'Francois One' => __( 'Francois One', 'vw-computer-repair-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'vw-computer-repair-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'vw-computer-repair-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'vw-computer-repair-pro' ),
        'Handlee' => __( 'Handlee', 'vw-computer-repair-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'vw-computer-repair-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'vw-computer-repair-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'vw-computer-repair-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'vw-computer-repair-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'vw-computer-repair-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'vw-computer-repair-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'vw-computer-repair-pro' ),
        'Kanit' => __( 'Kanit', 'vw-computer-repair-pro' ),
        'Lobster' => __( 'Lobster', 'vw-computer-repair-pro' ),
        'Lato' => __( 'Lato', 'vw-computer-repair-pro' ),
        'Lora' => __( 'Lora', 'vw-computer-repair-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'vw-computer-repair-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'vw-computer-repair-pro' ),
        'Merriweather' => __( 'Merriweather', 'vw-computer-repair-pro' ),
        'Monda' => __( 'Monda', 'vw-computer-repair-pro' ),
        'Montserrat' => __( 'Montserrat', 'vw-computer-repair-pro' ),
        'Muli' => __( 'Muli', 'vw-computer-repair-pro' ),
        'Marck Script' => __( 'Marck Script', 'vw-computer-repair-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'vw-computer-repair-pro' ),
        'Open Sans' => __( 'Open Sans', 'vw-computer-repair-pro' ),
        'Overpass' => __( 'Overpass', 'vw-computer-repair-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'vw-computer-repair-pro' ),
        'Oxygen' => __( 'Oxygen', 'vw-computer-repair-pro' ),
        'Orbitron' => __( 'Orbitron', 'vw-computer-repair-pro' ),
        'Patua One' => __( 'Patua One', 'vw-computer-repair-pro' ),
        'Pacifico' => __( 'Pacifico', 'vw-computer-repair-pro' ),
        'Padauk' => __( 'Padauk', 'vw-computer-repair-pro' ),
        'Playball' => __( 'Playball', 'vw-computer-repair-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'vw-computer-repair-pro' ),
        'PT Sans' => __( 'PT Sans', 'vw-computer-repair-pro' ),
        'Philosopher' => __( 'Philosopher', 'vw-computer-repair-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'vw-computer-repair-pro' ),
        'Poiret One' => __( 'Poiret One', 'vw-computer-repair-pro' ),
        'Quicksand' => __( 'Quicksand', 'vw-computer-repair-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'vw-computer-repair-pro' ),
        'Raleway' => __( 'Raleway', 'vw-computer-repair-pro' ),
        'Rubik' => __( 'Rubik', 'vw-computer-repair-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'vw-computer-repair-pro' ),
        'Russo One' => __( 'Russo One', 'vw-computer-repair-pro' ),
        'Righteous' => __( 'Righteous', 'vw-computer-repair-pro' ),
        'Slabo' => __( 'Slabo', 'vw-computer-repair-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'vw-computer-repair-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'vw-computer-repair-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'vw-computer-repair-pro' ),
        'Sacramento' => __( 'Sacramento', 'vw-computer-repair-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'vw-computer-repair-pro' ),
        'Tangerine' => __( 'Tangerine', 'vw-computer-repair-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'vw-computer-repair-pro' ),
        'VT323' => __( 'VT323', 'vw-computer-repair-pro' ),
        'Varela Round' => __( 'Varela Round', 'vw-computer-repair-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'vw-computer-repair-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'vw-computer-repair-pro' ),
        'Volkhov' => __( 'Volkhov', 'vw-computer-repair-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'vw-computer-repair-pro' )
    );
    
    require get_template_directory() . '/inc/customize/controls/customizer-text-radio-button/class/customizer-text-radio-button.php';
    require get_template_directory() . '/inc/customize/controls/customizer-notice/class/customizer-notice.php';
    require get_template_directory() . '/inc/customize/controls/customizer-seperator/class/customizer-seperator.php';
    require get_template_directory() . '/inc/customize/controls/customize-repeater/customize-repeater.php';
    require get_template_directory() . '/inc/customize/controls/social-icons/social-icon-picker.php';
    require get_template_directory() . '/inc/customize/controls/slider-line-control/slider-line-control.php';

    if ( (ThemeWhizzie::get_the_validation_status() === 'true') && (ThemeWhizzie::get_the_suspension_status() == 'false') ) {
        require get_template_directory() . '/inc/customize/sections/customizer-custom-variables.php';
        require get_template_directory() . '/inc/customize/sections/customizer-part-header.php';
        require get_template_directory() . '/inc/customize/sections/customizer-part-slide.php';
        require get_template_directory() . '/inc/customize/sections/customizer-part-home.php';
        require get_template_directory() . '/inc/customize/sections/customizer-part-social-icons.php';
        require get_template_directory() . '/inc/customize/sections/customizer-part-footer.php';
    }
    
}
add_action( 'customize_register', 'vw_computer_repair_pro_customize_register' );
//Integer
function vw_computer_repair_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class vw_computer_repair_pro_customize {
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
        add_action( 'customize_register', array( $this, 'mobileApp' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
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
          load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'vw_computer_repair_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_computer_repair_pro_customize_reviews_and_testimonials(
                $manager,
                'vw_computer_repair_pro_example_11',
                array(
                    'title'    => esc_html__( 'Review & Testimonial', 'vw-computer-repair-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Rate Us', 'vw-computer-repair-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/topic/reviews-and-testimonials/',
                    'priority'   => 1,
                )
            )
        );
    }

    public function mobileApp( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' ); 
        // Register custom section types.
        $manager->register_section_type( 'vw_computer_repair_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new vw_computer_repair_pro_customize_reviews_and_testimonials(
                $manager,
                'vw_computer_repair_pro_example_12',
                array(
                    'title'    => esc_html__( 'WooCommerce App', 'vw-computer-repair-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Buy Now', 'vw-computer-repair-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.vwthemes.com/premium-plugin/vw-woocommerce-mobile-app/',
                    'priority'   => 2,
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
       
         wp_enqueue_script( 'vw-computer-repair-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

        wp_enqueue_style( 'vw-computer-repair-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
    }
}
// Doing this customizer thang!
vw_computer_repair_pro_customize::get_instance();