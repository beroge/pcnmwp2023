<?php
/**
 * Wizard
 *
 * @package Whizzie
 * @author Catapult Themes
 * @since 1.0.0
 */


class ThemeWhizzie {

	public static $is_valid_key = 'false';
	public static $theme_key 		= '';

	protected $version = '1.1.0';

	/** @var string Current theme name, used as namespace in actions. */
	protected $theme_name = '';
	protected $theme_title = '';

	/** @var string Wizard page slug and title. */
	protected $page_slug = '';
	protected $page_title = '';

	/** @var array Wizard steps set by user. */
	protected $config_steps = array();

	/**
	 * Relative plugin url for this plugin folder
	 * @since 1.0.0
	 * @var string
	 */
	protected $plugin_url = '';

	/**
	 * TGMPA instance storage
	 *
	 * @var object
	 */
	protected $tgmpa_instance;

	/**
	 * TGMPA Menu slug
	 *
	 * @var string
	 */
	protected $tgmpa_menu_slug = 'tgmpa-install-plugins';

	/**
	 * TGMPA Menu url
	 *
	 * @var string
	 */
	protected $tgmpa_url = 'themes.php?page=tgmpa-install-plugins';

	// Where to find the widget.wie file
	protected $widget_file_url = '';

	/**
	 * Constructor
	 *
	 * @param $vw_computer_repair_pro_config	Our config parameters
	 */
	public function __construct( $vw_computer_repair_pro_config ) {
		$this->set_vars( $vw_computer_repair_pro_config );
		$this->init();

		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}

	public static function get_the_validation_status() {
		return get_option('vw_computer_repair_pro_theme_validation_status');
	}

	public static function set_the_validation_status($is_valid) {
		update_option('vw_computer_repair_pro_theme_validation_status', $is_valid);
	}
	public static function get_the_suspension_status() {
		return get_option( 'vw_computer_repair_pro_theme_suspension_status' );
	}

	public static function set_the_suspension_status( $is_suspended ) {
		update_option( 'vw_computer_repair_pro_theme_suspension_status' , $is_suspended );
	}
	public static function set_the_theme_key($the_key) {
		update_option('vw_pro_theme_key', $the_key);
	}

	public static function remove_the_theme_key() {
		delete_option('vw_pro_theme_key');
	}

	public static function get_the_theme_key() {
		return get_option('vw_pro_theme_key');
	}

	/**
	 * Set some settings
	 * @since 1.0.0
	 * @param $vw_computer_repair_pro_config	Our config parameters
	 */
	public function set_vars( $vw_computer_repair_pro_config ) {

		require_once trailingslashit( WHIZZIE_DIR ) . 'tgm/tgm.php';
		require_once trailingslashit( WHIZZIE_DIR ) . 'widgets/class-vw-widget-importer.php';

		if( isset( $vw_computer_repair_pro_config['page_slug'] ) ) {
			$this->page_slug = esc_attr( $vw_computer_repair_pro_config['page_slug'] );
		}
		if( isset( $vw_computer_repair_pro_config['page_title'] ) ) {
			$this->page_title = esc_attr( $vw_computer_repair_pro_config['page_title'] );
		}
		if( isset( $vw_computer_repair_pro_config['steps'] ) ) {
			$this->config_steps = $vw_computer_repair_pro_config['steps'];
		}

		$this->plugin_path = trailingslashit( dirname( __FILE__ ) );
		$relative_url = str_replace( get_template_directory(), '', $this->plugin_path );
		$this->plugin_url = trailingslashit( get_template_directory_uri() . $relative_url );
		$current_theme = wp_get_theme();
		$this->theme_title = $current_theme->get( 'Name' );
		$this->theme_name = strtolower( preg_replace( '#[^a-zA-Z]#', '', $current_theme->get( 'Name' ) ) );
		$this->page_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_page_slug', $this->theme_name . '-wizard' );
		$this->parent_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_parent_slug', '' );

		$this->widget_file_url = trailingslashit( WHIZZIE_DIR ) . 'widgets/vw-computer-repair-pro-widgets.wie';

	}

	/**
	 * Hooks and filters
	 * @since 1.0.0
	 */
	public function init() {

		if ( class_exists( 'TGM_Plugin_Activation' ) && isset( $GLOBALS['tgmpa'] ) ) {
			add_action( 'init', array( $this, 'get_tgmpa_instance' ), 30 );
			add_action( 'init', array( $this, 'set_tgmpa_url' ), 40 );
		}

		add_action( 'after_switch_theme', array( $this, 'redirect_to_wizard' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
		add_action( 'admin_menu', array( $this, 'menu_page' ) );
		add_action( 'admin_init', array( $this, 'get_plugins' ), 30 );
		add_filter( 'tgmpa_load', array( $this, 'tgmpa_load' ), 10, 1 );
		add_action( 'wp_ajax_setup_plugins', array( $this, 'setup_plugins' ) );
		add_action( 'wp_ajax_setup_widgets', array( $this, 'setup_widgets' ) );

		add_action( 'wp_ajax_setup_builder', array( $this, 'setup_builder' ) );
		add_action( 'wp_ajax_wz_install_activate_ibtana', array( $this, 'wz_install_activate_ibtana' ) );

		add_action( 'wp_ajax_wz_activate_vw_computer_repair_pro', array( $this, 'wz_activate_vw_computer_repair_pro' ) );

		add_action('admin_enqueue_scripts',  array( $this, 'vw_computer_repair_pro_admin_theme_style' ) );

	}

	public function redirect_to_wizard() {
		global $pagenow;
		if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
			wp_redirect( admin_url( 'themes.php?page=' . esc_attr( $this->page_slug ) ) );
		}
	}

	public function enqueue_scripts() {
		wp_enqueue_style( 'theme-wizard-style', get_template_directory_uri() . '/theme-wizard/assets/css/theme-wizard-style.css');
		wp_register_script( 'theme-wizard-script', get_template_directory_uri() . '/theme-wizard/assets/js/theme-wizard-script.js', array( 'jquery' ), time() );
		wp_localize_script(
			'theme-wizard-script',
			'vw_computer_repair_pro_whizzie_params',
			array(
				'ajaxurl' 		=> admin_url( 'admin-ajax.php' ),
				'wpnonce' 		=> wp_create_nonce( 'whizzie_nonce' ),
				'verify_text'	=> esc_html( 'verifying', 'vw-computer-repair-pro' )
			)
		);
		wp_enqueue_script( 'theme-wizard-script' );
		wp_enqueue_script('tabs', get_template_directory_uri() . '/theme-wizard/getstarted/js/tab.js');
		wp_enqueue_script( 'vw-notify-popup', get_template_directory_uri() . '/assets/js/notify.min.js');
	}

	public static function get_instance() {
		if ( ! self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function tgmpa_load( $status ) {
		return is_admin() || current_user_can( 'install_themes' );
	}

	/**
	 * Get configured TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function get_tgmpa_instance() {
		$this->tgmpa_instance = call_user_func( array( get_class( $GLOBALS['tgmpa'] ), 'get_instance' ) );
	}

	/**
	 * Update $tgmpa_menu_slug and $tgmpa_parent_slug from TGMPA instance
	 *
	 * @access public
	 * @since 1.1.2
	 */
	public function set_tgmpa_url() {
		$this->tgmpa_menu_slug = ( property_exists( $this->tgmpa_instance, 'menu' ) ) ? $this->tgmpa_instance->menu : $this->tgmpa_menu_slug;
		$this->tgmpa_menu_slug = apply_filters( $this->theme_name . '_theme_setup_wizard_tgmpa_menu_slug', $this->tgmpa_menu_slug );
		$tgmpa_parent_slug = ( property_exists( $this->tgmpa_instance, 'parent_slug' ) && $this->tgmpa_instance->parent_slug !== 'themes.php' ) ? 'admin.php' : 'themes.php';
		$this->tgmpa_url = apply_filters( $this->theme_name . '_theme_setup_wizard_tgmpa_url', $tgmpa_parent_slug . '?page=' . $this->tgmpa_menu_slug );
	}

	/**
	 * Make a modal screen for the wizard
	 */
	public function menu_page() {
		add_menu_page( esc_html( $this->page_title ), esc_html( $this->page_title ), 'manage_options', $this->page_slug, array( $this, 'vw_computer_repair_pro_mostrar_guide' ) ,get_template_directory_uri().'/theme-wizard/assets/images/admin-menu.svg',40);
	}

	public function activation_page() {
		$theme_key 						= ThemeWhizzie::get_the_theme_key();
		$validation_status 		= ThemeWhizzie::get_the_validation_status();
		?>
		<div class="wrap">
			<label><?php esc_html_e('Enter Your Theme License Key:','vw-computer-repair-pro'); ?></label>
			<form id="vw_computer_repair_pro_license_form">
				<input type="text" name="vw_computer_repair_pro_license_key" value="<?php echo $theme_key ?>" <?php if($validation_status === 'true') { echo "disabled"; } ?> required placeholder="License Key" />
				<div class="licence-key-button-wrap">
					<button class="button" type="submit" name="button" <?php if($validation_status === 'true') { echo "disabled"; } ?>>
						<?php if ($validation_status === 'true') {
						?>
							Activated
						<?php
						} else { ?>
							Activate
						<?php
						}
						?>
					</button>

					<?php if ($validation_status === 'true') { ?>
						<button id="change--key" class="button" type="button" name="button">
							Change Key
						</button>

						<div class="next-button">
						<button id="start-now-next" class="button" type="button" name="button" onclick="openCity(event, 'demo_offer')">
							Next
						</button>
					</div>
					<?php } ?>
				</div>
			</form>
		</div>
		<?php
	}

	/**
	 * Make an interface for the wizard
	 */
	public function wizard_page() {

		tgmpa_load_bulk_installer();

		// install plugins with TGM.
		if ( ! class_exists( 'TGM_Plugin_Activation' ) || ! isset( $GLOBALS['tgmpa'] ) ) {
			die( 'Failed to find TGM' );
		}
		$url = wp_nonce_url( add_query_arg( array( 'plugins' => 'go' ) ), 'whizzie-setup' );

		// copied from TGM
		$method = ''; // Leave blank so WP_Filesystem can populate it as necessary.
		$fields = array_keys( $_POST ); // Extra fields to pass to WP_Filesystem.
		if ( false === ( $creds = request_filesystem_credentials( esc_url_raw( $url ), $method, false, false, $fields ) ) ) {
			return true; // Stop the normal page form from displaying, credential request form will be shown.
		}
		// Now we have some credentials, setup WP_Filesystem.
		if ( ! WP_Filesystem( $creds ) ) {
			// Our credentials were no good, ask the user for them again.
			request_filesystem_credentials( esc_url_raw( $url ), $method, true, false, $fields );
			return true;
		}


		/* If we arrive here, we have the filesystem */ ?>
		<div class="wrap">
			<div class="wizard-logo-wrap">
				<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/adminIcon.png'); ?>">
				<span class="wizard-main-title">
					<?php esc_html_e('Welcome to ','vw-computer-repair-pro'); echo $this->theme_title; ?>
				</span>
			</div>
			<?php echo '<div class="card whizzie-wrap">';
				// The wizard is a list with only one item visible at a time
				$steps = $this->get_steps();
				echo '<ul class="whizzie-menu vw-wizard-menu-page">';
				foreach( $steps as $step ) {
					$class = 'step step-' . esc_attr( $step['id'] );
					echo '<li data-step="' . esc_attr( $step['id'] ) . '" class="' . esc_attr( $class ) . '" >';
						printf( '<span class="wizard-main-title">%s</span>',
							esc_html( $step['title'] )
							);
						// $content is split into summary and detail
						$content = call_user_func( array( $this, $step['view'] ) );
						if( isset( $content['summary'] ) ) {
							printf(
								'<div class="summary">%s</div>',
								wp_kses_post( $content['summary'] )
							);
						}
						if( isset( $content['detail'] ) ) {
							// Add a link to see more detail
							printf( '<div class="wz-require-plugins">');
							printf(
								'<div class="detail">%s</div>',
								$content['detail'] // Need to escape this
							);
							printf('</div>');
						}

						printf('<div class="wizard-button-wrapper">');
						if (ThemeWhizzie::get_the_validation_status() === 'true') {
							// The next button
							if( isset( $step['button_text'] ) && $step['button_text'] ) {
								printf(
									'<div class="button-wrap"><a href="#" class="button button-primary do-it" data-callback="%s" data-step="%s">%s</a></div>',
									esc_attr( $step['callback'] ),
									esc_attr( $step['id'] ),
									esc_html( $step['button_text'] )
								);
							}

							if( isset( $step['button_text_one'] )) {
								printf(
									'<div class="button-wrap button-wrap-one">
										<a href="#" class="button button-primary do-it" data-callback="install_widgets" data-step="widgets"><img src="'.get_template_directory_uri().'/theme-wizard/assets/images/Customize-Icon.png"></a>
										<p class="demo-type-text">%s</p>
									</div>',
									esc_html( $step['button_text_one'] )
								);
							}
							if( isset( $step['button_text_two'] )) {
								printf(
									'<div class="button-wrap button-wrap-two">
										<a href="#" class="button button-primary do-it" data-callback="page_builder" data-step="widgets"><img src="'.get_template_directory_uri().'/theme-wizard/assets/images/Gutenberg-Icon.png"></a>
										<p class="demo-type-text">%s</p>
									</div>',
									esc_html( $step['button_text_two'] )
								);
							}
						} else {
							printf(
								'<div class="button-wrap"><a href="#" class="button button-primary key-activation-tab-click">%s</a></div>',
								esc_html( __( 'Activate Your License', 'vw-computer-repair-pro' ) )
							);
						}
						printf('</div>');

					echo '</li>';
				}
				echo '</ul>';
				echo '<ul class="whizzie-nav wizard-icon-nav">';
					$stepI=1;
					foreach( $steps as $step ) {
						$stepAct=($stepI ==1)? 1 : 0;
						if( isset( $step['icon_url'] ) && $step['icon_url'] ) {
							echo '<li class="nav-step-' . esc_attr( $step['id'] ) . '" wizard-steps="step-'.esc_attr( $step['id'] ).'" data-enable="'.$stepAct.'">
							<img src="'.esc_attr( $step['icon_url'] ).'">
							</li>';
						}
					$stepI++;}
				echo '</ul>';
				?>
				<div class="step-loading"><span class="spinner">
					<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/Spinner-Animaion.gif'); ?>">
				</span></div>
			<?php echo '</div>';?>

		</div>
	<?php }
	/**
	 * Set options for the steps
	 * Incorporate any options set by the theme dev
	 * Return the array for the steps
	 * @return Array
	 */
	public function get_steps() {
		$dev_steps = $this->config_steps;
		$steps = array(
			'intro' => array(
				'id'			=> 'intro',
				'title'			=> __( '', 'vw-computer-repair-pro' ),
				'icon'			=> 'dashboard',
				'view'			=> 'get_step_intro', // Callback for content
				'callback'		=> 'do_next_step', // Callback for JS
				'button_text'	=> __( 'Start Now', 'vw-computer-repair-pro' ),
				'can_skip'		=> false, // Show a skip button?
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-01.svg'
			),
			'plugins' => array(
				'id'			=> 'plugins',
				'title'			=> __( 'Plugins', 'vw-computer-repair-pro' ),
				'icon'			=> 'admin-plugins',
				'view'			=> 'get_step_plugins',
				'callback'		=> 'install_plugins',
				'button_text'	=> __( 'Install Plugins', 'vw-computer-repair-pro' ),
				'can_skip'		=> true,
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-02.svg'
			),
			'widgets' => array(
				'id'			=> 'widgets',
				'title'			=> __( 'Customizer', 'vw-computer-repair-pro' ),
				'icon'			=> 'welcome-widgets-menus',
				'view'			=> 'get_step_widgets',
				'callback'		=> 'install_widgets',
				'button_text_one'	=> __( 'Click On The Image To Import Customizer Demo', 'vw-computer-repair-pro' ),
				'button_text_two'	=> __( 'Click On The Image To Import Gutenberg Block Demo', 'vw-computer-repair-pro' ),
				'can_skip'		=> true,
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-03.svg'
			),
			'done' => array(
				'id'			=> 'done',
				'title'			=> __( 'All Done', 'vw-computer-repair-pro' ),
				'icon'			=> 'yes',
				'view'			=> 'get_step_done',
				'callback'		=> '',
				'icon_url'      => get_template_directory_uri().'/theme-wizard/assets/images/Icons-04.svg'
			)
		);

		// Iterate through each step and replace with dev config values
		if( $dev_steps ) {
			// Configurable elements - these are the only ones the dev can update from config.php
			$can_config = array( 'title', 'icon', 'button_text', 'can_skip','button_text_two' );
			foreach( $dev_steps as $dev_step ) {
				// We can only proceed if an ID exists and matches one of our IDs
				if( isset( $dev_step['id'] ) ) {
					$id = $dev_step['id'];
					if( isset( $steps[$id] ) ) {
						foreach( $can_config as $element ) {
							if( isset( $dev_step[$element] ) ) {
								$steps[$id][$element] = $dev_step[$element];
							}
						}
					}
				}
			}
		}
		return $steps;
	}

	/**
	 * Print the content for the intro step
	 */
	public function get_step_intro() { ?>
		<div class="summary">
			<p>
				<?php esc_html_e('Thank you for choosing this '.$this->theme_title.' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.','vw-computer-repair-pro'); ?>
			</p>
			<p>
				<?php esc_html_e('You may even skip the steps and get back to the dashboard if you have no time at the present moment. You can come back any time if you change your mind.','vw-computer-repair-pro'); ?>
			</p>
		</div>
	<?php }

	public function get_step_importer() { ?>
		<div class="summary">
			<p>
				<?php esc_html_e('Thank you for choosing this '.$this->theme_title.' Theme. Using this quick setup wizard, you will be able to configure your new website and get it running in just a few minutes. Just follow these simple steps mentioned in the wizard and get started with your website.','vw-computer-repair-pro'); ?>
			</p>
		</div>
	<?php }
	/**
	 * Get the content for the plugins step
	 * @return $content Array
	 */
	public function get_step_plugins() {
		$plugins = $this->get_plugins();
		$content = array(); ?>
			<div class="summary">
				<p>
					<?php esc_html_e('Additional plugins always make your website exceptional. Install these plugins by clicking the install button. You may also deactivate them from the dashboard.','vw-computer-repair-pro') ?>
				</p>
			</div>
		<?php // The detail element is initially hidden from the user
		$content['detail'] = '<span class="wizard-plugin-count">'.count($plugins['all']).'</span><ul class="whizzie-do-plugins">';
		// Add each plugin into a list
		foreach( $plugins['all'] as $slug=>$plugin ) {
			$content['detail'] .= '<li data-slug="' . esc_attr( $slug ) . '">' . esc_html( $plugin['name'] ) . '<div class="wizard-plugin-title">';

			$content['detail'] .= '<span class="wizard-plugin-status">Installation Required</span><i class="spinner"></i></div></li>';
		}
		$content['detail'] .= '</ul>';

		return $content;
	}

	/**
	 * Print the content for the widgets step
	 * @since 1.1.0
	 */
	public function get_step_widgets() { ?>
		<div class="summary">
			<p>
				<?php esc_html_e('This theme supports importing the demo content and adding widgets. Get them installed with the below button. Using the Customizer, it is possible to update or even deactivate them','vw-computer-repair-pro'); ?>
			</p>
		</div>
	<?php }

	/**
	 * Print the content for the final step
	 */
	public function get_step_done() {

	 ?>

		<div class="vw-setup-finish">
			<p>
				<?php echo esc_html('Your demo content has been imported successfully . Click on the finish button for more information.'); ?>
			</p>
			<div class="finish-buttons">
				<a href="<?php echo esc_url(admin_url('/customize.php')); ?>" class="wz-btn-customizer" target="_blank"><?php esc_html_e('Customize Your Demo','vw-computer-repair-pro') ?></a>
				<a href="" class="wz-btn-builder" target="_blank"><?php esc_html_e('Customize Your Demo','vw-computer-repair-pro'); ?></a>
				<a href="<?php echo esc_url(site_url()); ?>" class="wz-btn-visit-site" target="_blank"><?php esc_html_e('Visit Your Site','vw-computer-repair-pro'); ?></a>
			</div>
			<div class="vw-finish-btn">
				<a href="javascript:void(0);" class="button button-primary" onclick="openCity(event, 'theme_info')" data-tab="theme_info">Finish</a>
			</div>
		</div>

	<?php }

	/**
	 * Get the plugins registered with TGMPA
	 */
	public function get_plugins() {

		$instance = call_user_func( array( get_class( $GLOBALS['tgmpa'] ), 'get_instance' ) );
		$plugins = array(
			'all' 		=> array(),
			'install'	=> array(),
			'update'	=> array(),
			'activate'	=> array()
		);
		foreach( $instance->plugins as $slug=>$plugin ) {
			if( $instance->is_plugin_active( $slug ) && false === $instance->does_plugin_have_update( $slug ) ) {
				// Plugin is installed and up to date
				continue;
			} else {
				$plugins['all'][$slug] = $plugin;
				if( ! $instance->is_plugin_installed( $slug ) ) {
					$plugins['install'][$slug] = $plugin;
				} else {
					if( false !== $instance->does_plugin_have_update( $slug ) ) {
						$plugins['update'][$slug] = $plugin;
					}
					if( $instance->can_plugin_activate( $slug ) ) {
						$plugins['activate'][$slug] = $plugin;
					}
				}
			}
		}
		return $plugins;
	}

	public function setup_plugins() {

		if ( ! check_ajax_referer( 'whizzie_nonce', 'wpnonce' ) || empty( $_POST['slug'] ) ) {
			wp_send_json_error( array( 'error' => 1, 'message' => esc_html__( 'No Slug Found','vw-computer-repair-pro' ) ) );
		}
		$json = array();
		// send back some json we use to hit up TGM
		$plugins = $this->get_plugins();

		// what are we doing with this plugin?
		foreach ( $plugins['activate'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-activate',
					'action2'       => - 1,
					'message'       => esc_html__( 'Activating Plugin','vw-computer-repair-pro' ),
				);
				break;
			}
		}
		foreach ( $plugins['update'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-update',
					'action2'       => - 1,
					'message'       => esc_html__( 'Updating Plugin','vw-computer-repair-pro' ),
				);
				break;
			}
		}
		foreach ( $plugins['install'] as $slug => $plugin ) {
			if ( $_POST['slug'] == $slug ) {
				$json = array(
					'url'           => admin_url( $this->tgmpa_url ),
					'plugin'        => array( $slug ),
					'tgmpa-page'    => $this->tgmpa_menu_slug,
					'plugin_status' => 'all',
					'_wpnonce'      => wp_create_nonce( 'bulk-plugins' ),
					'action'        => 'tgmpa-bulk-install',
					'action2'       => - 1,
					'message'       => esc_html__( 'Installing Plugin','vw-computer-repair-pro' ),
				);
				break;
			}
		}
		if ( $json ) {
			$json['hash'] = md5( serialize( $json ) ); // used for checking if duplicates happen, move to next plugin
			wp_send_json( $json );
		} else {
			wp_send_json( array( 'done' => 1, 'message' => esc_html__( 'Success','vw-computer-repair-pro' ) ) );
		}
		exit;
	}

	/**
	 * Imports the Demo Content
	 * @since 1.1.0
	 */
	public function setup_widgets() {

		$data_array=[];
	    $matchTheme=array(
	      'vw-computer-repair-pro' => 'the-computer-repair'
	    );
	    $newTheme = wp_get_theme();
	      $themename = $newTheme->get_stylesheet();
	      global $wpdb;
	      if(isset($matchTheme[$themename])){
	    $old_theme = $matchTheme[$themename];
	      $checkWord = 'theme_mods_'.$themename;
	      $mqr = "SELECT * FROM wp_options where option_name='$checkWord'";
	      $result = $wpdb->get_row($mqr);
	      if($result){
	        $optionValue = $result->option_value;
	        $data_array=unserialize($optionValue);
	      }
	    }

	    $theme_mods_match_id = [
	      'vw_computer_repair_pro_topbar_button_title' => ['default'=> 'BOOK AN APPOINTMENT'],
	    ];
		//POST and update the customizer and other related data of VW Cafe Pro
      $home_id=''; $vwblog_id=''; $page_id=''; $contact_id='';

        // Create a front page and assigned the template
        
        $home_content = '';

        $home_title = 'Home';
   	   	$home = array(
      		   'post_type' => 'page',
      		   'post_title' => $home_title,
             'post_content'  => $home_content,
      		   'post_status' => 'publish',
      		   'post_author' => 1,
      		   'post_slug' => 'home'
   		   );
        $home_id = wp_insert_post($home);
         
         //Set the home page template
         add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

         //Set the static front page
         $home = get_page_by_title( 'Home' );
         update_option( 'page_on_front', $home->ID );
         update_option( 'show_on_front', 'page' );

        
          // Create a blog page and assigned the template
          $vwblog_title = 'Blog';
          $blog = array(
             'post_type' => 'page',
             'post_title' => $vwblog_title,
             'post_status' => 'publish',
             'post_author' => 1,
             'post_slug' => 'blog'
          );
          $vwblog_id = wp_insert_post($blog);

         //Set the blog page template
         add_post_meta( $vwblog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );

         // Create a Page 
          $page_title = 'Page ';
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel, et argentum simul reddere parentibus meis, debitum eo - aliam putant quinque aut sex annos - ut certus quid faciam. Quod suus Faciam, cum magna mutatio. Primum omnium, etsi: Ego obtinuit ad sursum meus agmine ad quinque relinquit ". Et respexit super ad terror horologium, in pectore et ';

          $vwpage = array(
          'post_type' => 'page',
          'post_title' => $page_title,
          'post_content'  => $content,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'page'
          );
          $page_id = wp_insert_post($vwpage);
         
          // Create a contact page and assigned the template
          $contact_title = 'Contact';
          $contact = array(
          'post_type' => 'page',
          'post_title' => $contact_title,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'contact'
          );
 		     $contact_id = wp_insert_post($contact);
        
         //Set the blog with right sidebar template
         add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );

         // -------------- Section Ordering ---------------

         set_theme_mod( 'vw_computer_repair_pro_section_ordering_settings_repeater', 'our-services,about-and-feature,our-projects,our-records,pricing-plan,testimonial-video,our-products,why-choose-us,our-team,appointment,our-process,newsletter,latest-news,content-area' );
         //----------------------Posttype----------------------------------
	       foreach ($theme_mods_match_id as $kname => $idn) {
	        if(!isset($data_array[$kname])){
	          set_theme_mod($kname,$idn['default']);
	        }
	      }
        // ------------ Top Bar -----------
        set_theme_mod( 'custom_logo',get_template_directory_uri() . '/assets/images/logo.webp' );
        set_theme_mod( 'vw_computer_repair_pro_topbar_cart_icon','fas fa-shopping-basket' );
        set_theme_mod( 'vw_computer_repair_pro_topbar_button_title', 'BOOK AN APPOINTMENT' );
        set_theme_mod( 'vw_computer_repair_pro_topbar_button_url', '#' );

        /*  customizer-part-slide.php  */
        set_theme_mod( 'vw_computer_repair_pro_slide_number', '3' );

        //Slider Images section
        for($i=1; $i<=3; $i++) {
          set_theme_mod( 'vw_computer_repair_pro_slide_image'.$i,get_template_directory_uri() . '/assets/images/slides/slide'.$i.'.webp' );
          set_theme_mod( 'vw_computer_repair_pro_slide_image_alt_text'.$i, 'Alt Tag for Image Slider'.$i );
          //Slide top title
          if(!isset($data_array['vw_computer_repair_pro_slide_small_heading'.$i])){
            set_theme_mod('vw_computer_repair_pro_slide_small_heading'.$i,'WE GIVE YOU THE BEST !');
          }
          if(!isset($data_array['vw_computer_repair_pro_slide_heading'.$i])){
            set_theme_mod( 'vw_computer_repair_pro_slide_heading'.$i, 'FAST REPAIR YOUR SMART COMPUTER');
          }
          if(!isset($data_array['vw_computer_repair_pro_slide_text'.$i])){
            //Slide Text section
          	set_theme_mod( 'vw_computer_repair_pro_slide_text'.$i, 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia' );
          }
          //Slider Button Text section
          set_theme_mod( 'vw_computer_repair_pro_slide_btn_one_text'.$i, 'READ MORE');
          set_theme_mod( 'vw_computer_repair_pro_slide_btn_two_text'.$i, 'BOOK AN APPOINTMENT');
          if(!isset($data_array['vw_computer_repair_pro_slide_btn_one_url'.$i])){
            //Slide Text section
          	set_theme_mod( 'vw_computer_repair_pro_slide_btn_one_url'.$i, '#' );
          }
          if(!isset($data_array['vw_computer_repair_pro_slide_btn_two_url'.$i])){
            //Slide Text section
          	set_theme_mod( 'vw_computer_repair_pro_slide_btn_two_url'.$i, '#' );
          }
        }
        //Slide Delay
        set_theme_mod( 'vw_computer_repair_pro_slide_delay', 10000 );

        /*customizer-part-social-icons.php*/
        //twitter link
        set_theme_mod( 'vw_computer_repair_pro_headertwitter', 'https://twitter.com/' ); 
        //facebook link 
        set_theme_mod( 'vw_computer_repair_pro_headerfacebook', 'https://www.facebook.com/' ); 
        //GooglePlus link
        set_theme_mod( 'vw_computer_repair_pro_headeryoutube', 'https://www.youtube.com/' );
        //Instagram link
        set_theme_mod( 'vw_computer_repair_pro_headerinstagram', 'https://www.instagram.com/' );
        //Linkldein link
        set_theme_mod( 'vw_computer_repair_pro_headerlinkedin', 'https://www.linkedin.com/' );
        //Linkldein link
        set_theme_mod( 'vw_computer_repair_pro_headerflickr', 'https://www.flickr.com/' );
        /*customizer-part-social-icons.php*/
        //twitter link
        set_theme_mod( 'vw_computer_repair_pro_headertwitter', 'https://twitter.com/' ); 
        //facebook link 
        set_theme_mod( 'vw_computer_repair_pro_headerfacebook', 'https://www.facebook.com/' ); 
        //GooglePlus link
        set_theme_mod( 'vw_computer_repair_pro_headeryoutube', 'https://www.youtube.com/' );
        //Instagram link
        set_theme_mod( 'vw_computer_repair_pro_headerinstagram', 'https://www.instagram.com/' );
        //Linkldein link
        set_theme_mod( 'vw_computer_repair_pro_headerlinkedin', 'https://www.linkedin.com/' );
        //Linkldein link
        set_theme_mod( 'vw_computer_repair_pro_headerflickr', 'https://www.flickr.com/' );

        // ------------ Contact Details ------------

        set_theme_mod( 'vw_computer_repair_pro_contact_details_address_icon', 'fas fa-map-marker-alt' ); 
        set_theme_mod( 'vw_computer_repair_pro_contact_details_address_text', '351 Montreal Ave, Staten Island, NY 12032' );

        set_theme_mod( 'vw_computer_repair_pro_contact_details_phone_icon', 'fas fa-phone-volume' ); 
        set_theme_mod( 'vw_computer_repair_pro_contact_details_phone_text', '0123456789' );

        set_theme_mod( 'vw_computer_repair_pro_contact_details_email_icon', 'far fa-envelope' ); 
        set_theme_mod( 'vw_computer_repair_pro_contact_details_email_text', 'computerrepair@gmail.com' );

        // ----------- Our Services ------------

        set_theme_mod( 'vw_computer_repair_pro_our_services_small_heading', 'OUR REPAIR' );
        set_theme_mod( 'vw_computer_repair_pro_our_services_main_heading', 'OUR SERVICES' );
        set_theme_mod( 'vw_computer_repair_pro_our_services_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane' );
        set_theme_mod( 'vw_computer_repair_pro_our_services_number', 4);
        set_theme_mod( 'vw_computer_repair_pro_our_services_link_title', 'READ MORE' );

        $services_title=array('RAM INSTALLATION','MOTHERBOARD FIX','CPU REPAIR','MOTHERBOARD FIX');
        for($i=1;$i<=4;$i++){
          $vw_title = $services_title[$i-1];
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. ';

          // Create post object
          $my_post = array(
             'post_title'    => wp_strip_all_tags( $vw_title ),
             'post_content'  => $content,
             'post_status'   => 'publish',
             'post_type'     => 'services',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );

          $image_url = get_template_directory_uri() . '/assets/images/services/services'.$i.'.webp';

          $image_name= 'services'.$i.'.webp';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'services',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );

          set_theme_mod( 'vw_computer_repair_pro_services_featured_image_alt_text'.$i, 'Alt Tag for Image Services'.$i );
        }

        // ----------- About Us ------------

        set_theme_mod( 'vw_computer_repair_pro_about_us_bgimage', get_template_directory_uri() . '/assets/images/about/about-bg.webp');
        set_theme_mod( 'vw_computer_repair_pro_about_us_small_heading', 'ABOUT US' ); 
        set_theme_mod( 'vw_computer_repair_pro_about_us_main_heading', '8 YEARS OF EXPERIENCE' );
        set_theme_mod( 'vw_computer_repair_pro_about_us_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane' );
        set_theme_mod( 'vw_computer_repair_pro_about_us_title', 'We have 8 Years Of Experience In This Passion' ); 
        set_theme_mod( 'vw_computer_repair_pro_about_us_number', 6 );

        $about_services=array('Water Damaged Phone','Speaker/Microphone Fault','Broken Screens & Glass','Network Related Issue','Upgrading Operating System','Physically Damaged Handset'); 
        for($i=1;$i<=6;$i++)
        {
          set_theme_mod( 'vw_computer_repair_pro_about_service'.$i, $about_services[$i-1] );
        }

        set_theme_mod( 'vw_computer_repair_pro_about_us_call', 'CALL (123) 789-0173 FOR A ENQUIRY' );
        set_theme_mod( 'vw_computer_repair_pro_about_us_button_title', 'BOOK AN APPOINTMENT' ); 
        set_theme_mod( 'vw_computer_repair_pro_about_us_button_url', '#' );
        set_theme_mod( 'vw_computer_repair_pro_about_us_image', get_template_directory_uri() . '/assets/images/about/Experience1.webp');
        set_theme_mod( 'vw_computer_repair_pro_about_us_image_alt_text', 'Alt Tag for Image About Us' ); 

        // ---------- Our Features ----------

        set_theme_mod( 'vw_computer_repair_pro_our_features_number', 3 );
        $feature_title=array('08 YEARS OF EXPERIENCE','HIGH TECHNOLOGY FACTORY','PUNCTUAL DELIVERY TIME');
        for($i=1;$i<=3;$i++)
        {
          set_theme_mod( 'vw_computer_repair_pro_our_features_title'.$i, $feature_title[$i-1] ); 
          set_theme_mod( 'vw_computer_repair_pro_our_features_icon'.$i, get_template_directory_uri() . '/assets/images/features/Feature'.$i.'.webp');
          set_theme_mod( 'vw_computer_repair_pro_our_features_hover_icon'.$i, get_template_directory_uri() . '/assets/images/features/Feature-hover'.$i.'.png');
          set_theme_mod( 'vw_computer_repair_pro_features_icon_image_alt_text'.$i, 'Alt Tag for Image Feature Icon'.$i );
          set_theme_mod( 'vw_computer_repair_pro_our_features_text'.$i, 'Te obtinuit ut adepto satis somno. Aliisque institoribus ' );
          set_theme_mod( 'vw_computer_repair_pro_our_features_url'.$i, '#' ); 
        }

        // ----------- Our Projects ----------

        set_theme_mod( 'vw_computer_repair_pro_our_projects_small_heading', 'WORK GALLERY' ); 
        set_theme_mod( 'vw_computer_repair_pro_our_projects_main_heading', 'REPAIR PROJECT' ); 
        set_theme_mod( 'vw_computer_repair_pro_our_projects_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane' );
        set_theme_mod( 'vw_computer_repair_pro_our_projects_number', 4 );

        for($i=1;$i<=4;$i++){
          $vw_title = 'Laptop Repair';
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. ';

          // Create post object
          $my_post = array(
             'post_title'    => wp_strip_all_tags( $vw_title ),
             'post_content'  => $content,
             'post_status'   => 'publish',
             'post_type'     => 'projects',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );

          update_post_meta( $vwpost_id, 'meta-project-issue', 'CHARGING ISSUES' );

          $image_url = get_template_directory_uri() . '/assets/images/projects/projects'.$i.'.webp';

          $image_name= 'projects'.$i.'.webp';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'projects',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );

          set_theme_mod( 'vw_computer_repair_pro_project_featured_image_alt_text'.$i, 'Alt Tag for Image Project'.$i );
        }

        // --------- single page ----------

        set_theme_mod( 'vw_computer_repair_pro_our_projects_issue_title', 'Project Issue :-' );
        set_theme_mod( 'vw_computer_repair_pro_our_projects_duration_title', 'Project Duration :-' );
        set_theme_mod( 'vw_computer_repair_pro_our_projects_location_title', 'Project Location :-' );
        set_theme_mod( 'vw_computer_repair_pro_our_projects_client_title', 'Client Name :-' );

        // ---------- Our Records -------------

        set_theme_mod( 'vw_computer_repair_pro_our_records_bgimage', get_template_directory_uri() . '/assets/images/records/counterbg.webp');
        set_theme_mod( 'vw_computer_repair_pro_our_records_number', 4 );
        $record_title=array('HAPPY CUSTOMERS','TEAM MEMBERS','TOTAL REPAIRS','AWARDS');
        $record_no=array('990','80','1990','28');
        for($i=1;$i<=4;$i++)
        {
          set_theme_mod( 'vw_computer_repair_pro_our_records_title'.$i, $record_title[$i-1] );
          set_theme_mod( 'vw_computer_repair_pro_our_records_icon'.$i, get_template_directory_uri() . '/assets/images/records/counter'.$i.'.webp');
          set_theme_mod( 'vw_computer_repair_pro_record_image_alt_text'.$i, 'Alt Tag for Image Record'.$i );
          set_theme_mod( 'vw_computer_repair_pro_our_records_no'.$i, $record_no[$i-1] );
        } 

        // ------------ Pricing Plan ---------------

        set_theme_mod( 'vw_computer_repair_pro_pricing_plan_small_heading', 'OUR PLANS' );
        set_theme_mod( 'vw_computer_repair_pro_pricing_plan_main_heading', 'PRICING PLAN' );
        set_theme_mod( 'vw_computer_repair_pro_pricing_plan_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane' );
        set_theme_mod( 'vw_computer_repair_pro_pricing_plan_number', 3 );
        $plan_title=array('Monitor Repair','CPU Repair','Laptop Battery Repair');
        $plan_price=array('$35.00','$20.00','$15.00');
        for($i=1;$i<=3;$i++)
        {
          set_theme_mod( 'vw_computer_repair_pro_pricing_plan_icon'.$i, get_template_directory_uri() . '/assets/images/pricing-plan/Pricing'.$i.'.webp');
          set_theme_mod( 'vw_computer_repair_pro_pricing_icon_image_alt_text'.$i, 'Alt Tag for Image Pricing Plan Icon'.$i );
          set_theme_mod( 'vw_computer_repair_pro_pricing_plan_title'.$i, $plan_title[$i-1]);
          set_theme_mod( 'vw_computer_repair_pro_pricing_plan_price'.$i, $plan_price[$i-1]);
          set_theme_mod( 'vw_computer_repair_pro_pricing_plan_price_title'.$i,'starting at...');
          set_theme_mod( 'vw_computer_repair_pro_pricing_plan_image'.$i, get_template_directory_uri() . '/assets/images/pricing-plan/Pricing Plan '.$i.'.webp');
          set_theme_mod( 'vw_computer_repair_pro_pricing_plan_image_alt_text'.$i, 'Alt Tag for Image Pricing Plan'.$i );
          set_theme_mod( 'vw_computer_repair_pro_pricing_plan_button_title'.$i,'CHOOSE PLAN');
          set_theme_mod( 'vw_computer_repair_pro_pricing_plan_button_url'.$i,'#');
           set_theme_mod( 'vw_computer_repair_pro_pricing_plan_feature_number'.$i,3);
          for($j=1;$j<=3;$j++)
          {
            set_theme_mod( 'vw_computer_repair_pro_pricing_plan_feature_title'.$i.$j,'Te obtinuit ut adepto satis');
          }
        }

        // ------------ Testimonial -----------

        set_theme_mod( 'vw_computer_repair_pro_testimonial_small_heading', 'OUR TESTIMONIAL' );
        set_theme_mod( 'vw_computer_repair_pro_testimonial_number', 3 );
        set_theme_mod( 'vw_computer_repair_pro_testimonial_excerpt_no', 20 ); 
        for($i=1;$i<=3;$i++){

          $vw_title = 'JAMES DAVIS';
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

          // Create post object
          $my_post = array(
             'post_title'    => wp_strip_all_tags( $vw_title ),
             'post_content'  => $content,
             'post_status'   => 'publish',
             'post_type'     => 'testimonials',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );

          update_post_meta( $vwpost_id, 'vw_computer_repair_pro_posttype_testimonial_desigstory', 'Eco-Founder' );
          update_post_meta( $vwpost_id, 'meta-tes-phone', '123456789' );
          update_post_meta( $vwpost_id, 'meta-tes-email', 'comrepair@gmail.com' );
          update_post_meta( $vwpost_id, 'meta-tes-facebookurl', 'https://www.facebook.com' );
          update_post_meta( $vwpost_id, 'meta-tes-linkdenurl', 'https://www.linkedin.com' );
          update_post_meta( $vwpost_id, 'meta-tes-twitterurl', 'https://www.twitter.com' );
          update_post_meta( $vwpost_id, 'meta-tes-googleplusurl', 'https://www.googleplus.com' );
          update_post_meta( $vwpost_id, 'meta-tes-instagram', 'https://www.instagram.com' );
          update_post_meta( $vwpost_id, 'meta-tes-pinterest', 'https://www.pinterest.com' );

          $image_url = get_template_directory_uri() . '/assets/images/testimonial/testimonial'.$i.'.webp';

          $image_name= 'testimonial'.$i.'.webp';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'testimonials',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );

          set_theme_mod( 'vw_computer_repair_pro_testimonial_featured_image_alt_text'.$i, 'Alt Tag for Image Testimonial'.$i );
        }

        // ----------- Video ----------

        set_theme_mod( 'vw_computer_repair_pro_video_small_heading', 'How Can We Help' );
        set_theme_mod( 'vw_computer_repair_pro_video_main_heading', 'FIND OUT ALL REPAIR SERVICES WE OFFER' );
        set_theme_mod( 'vw_computer_repair_pro_video_play_icon', 'fas fa-play' );
        set_theme_mod( 'vw_computer_repair_pro_video_url', 'https://www.youtube.com/embed/3JIzJOQYUbM' );

        // ---------- Video And Testimonial -----------

        set_theme_mod( 'vw_computer_repair_pro_testimonial_video_bgimage', get_template_directory_uri() . '/assets/images/testimonial/ourtestimonialsbg.webp');

        // ------------ Our Products ------

        set_theme_mod( 'vw_computer_repair_pro_our_products_small_heading', 'OUR PRODUCT' ); 
        set_theme_mod( 'vw_computer_repair_pro_our_products_main_heading', 'COMPUTER PRODUCT' ); 
        set_theme_mod( 'vw_computer_repair_pro_our_products_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane' );
        set_theme_mod( 'vw_computer_repair_pro_our_products_number', 5 );
        if ( class_exists( 'WooCommerce' ) ) {
          for($i=1;$i<=5;$i++){

            $vw_title = 'PRODUCT TITLE '.$i;
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

            // Create post object
            $my_post = array(
             'post_title'    => wp_strip_all_tags( $vw_title ),
             'post_content'  => $content,
             'post_status'   => 'publish',
             'post_type'     => 'product'
             
            );

            // Insert the post into the database
            $vwpost_id = wp_insert_post( $my_post );

            update_post_meta( $vwpost_id, '_regular_price', '150' );
            update_post_meta( $vwpost_id, '_sale_price', '120' );
            
            $image_url = get_template_directory_uri() . '/assets/images/products/our-products'.$i.'.webp';

            $image_name='our-products'.$i.'.webp';
            $upload_dir= wp_upload_dir(); 
            // Set upload folder
            $image_data= file_get_contents($image_url); 
            // Get image data
            $unique_file_name= wp_unique_filename( $upload_dir['path'], $image_name ); 
            // Generate unique name
            $filename=basename( $unique_file_name ); 
            // Create image file name
            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file =$upload_dir['path'] . '/' . $filename;
            } else {
              $file =$upload_dir['basedir'] . '/' . $filename;
            }
            // Create the image  file on the server
            file_put_contents( $file, $image_data );
            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );
            // Set attachment data
            $attachment = array(
             'post_mime_type' => $wp_filetype['type'],
             'post_title'     => sanitize_file_name( $filename ),
             'post_content'   => '',
             'post_type'     => 'product',
             'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $vwpost_id, $attach_id );

          }
        }

        // ----------- Why Choose Us ------------

        set_theme_mod( 'vw_computer_repair_pro_why_choose_us_bgimage', get_template_directory_uri() . '/assets/images/why-choose-us/WhyCHooseBG.webp');
        set_theme_mod( 'vw_computer_repair_pro_why_choose_us_small_heading', 'WHY CHOOSE' ); 
        set_theme_mod( 'vw_computer_repair_pro_why_choose_us_main_heading', 'WHY CHOOSE US' ); 
        set_theme_mod( 'vw_computer_repair_pro_why_choose_us_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum' );
        set_theme_mod( 'vw_computer_repair_pro_why_choose_us_number', 4 );
        $tab_title=array('QUALITY','BRING','CUSTOMER','OFFERS');
        $tab_heading=array('QUALITY GUARANTEE','BRING','CUSTOMER SATISFACTION','OFFERS');
        for($i=1;$i<=4;$i++)
        {
          set_theme_mod( 'vw_computer_repair_pro_why_choose_us_tab_title'.$i, $tab_title[$i-1] );
          set_theme_mod( 'vw_computer_repair_pro_why_choose_us_tab_icon'.$i, get_template_directory_uri() . '/assets/images/why-choose-us/WhyCHoosicon'.$i.'.webp'); 
          set_theme_mod( 'vw_computer_repair_pro_why_choose_us_tab_icon_image_alt_text'.$i, 'Alt Tag for Image Why Choose Icon'.$i );
          set_theme_mod( 'vw_computer_repair_pro_why_choose_us_tab_heading'.$i, $tab_heading[$i-1] );
          set_theme_mod( 'vw_computer_repair_pro_why_choose_us_tab_text'.$i,'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum' );
        }

        // ---------- Our Team ----------

        set_theme_mod( 'vw_computer_repair_pro_our_team_small_heading', 'OUR WORKERS' );
        set_theme_mod( 'vw_computer_repair_pro_our_team_main_heading', 'OUR GREAT TEAM MEMBER' );
        set_theme_mod( 'vw_computer_repair_pro_our_team_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane' );
        set_theme_mod( 'vw_computer_repair_pro_our_team_number',3 );

        $team_title=array('JAMES DAVIS','PETER WOOD','JAMES DAVIS');
        $team_desig=array('Managing Director','Engineer','Developer');
        for($i=1;$i<=3;$i++){

          $vw_title = $team_title[$i-1];
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

          // Create post object
          $my_post = array(
             'post_title'    => wp_strip_all_tags( $vw_title ),
             'post_content'  => $content,
             'post_status'   => 'publish',
             'post_type'     => 'team',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );

          update_post_meta( $vwpost_id, 'meta-designation', $team_desig[$i-1] );
          update_post_meta( $vwpost_id, 'meta-team-phone', '123456789' );
          update_post_meta( $vwpost_id, 'meta-team-email', 'comrepair@gmail.com' );
          update_post_meta( $vwpost_id, 'meta-tfacebookurl', 'https://www.facebook.com' );
          update_post_meta( $vwpost_id, 'meta-tlinkdenurl', 'https://www.linkedin.com' );
          update_post_meta( $vwpost_id, 'meta-ttwitterurl', 'https://www.twitter.com' );
          update_post_meta( $vwpost_id, 'meta-tgoogleplusurl', 'https://www.googleplus.com' );
          update_post_meta( $vwpost_id, 'meta-tinstagram', 'https://www.instagram.com' );
          update_post_meta( $vwpost_id, 'meta-pinterest', 'https://www.pinterest.com' );

          $image_url = get_template_directory_uri() . '/assets/images/team/team'.$i.'.webp';

          $image_name= 'team'.$i.'.webp';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'team',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );

          set_theme_mod( 'vw_computer_repair_pro_team_featured_image_alt_text'.$i, 'Alt Tag for Image Team'.$i );
        }

        // ------------- appointment ------------

        set_theme_mod( 'vw_computer_repair_pro_appointment_bgimage', get_template_directory_uri() . '/assets/images/appbg.webp');
        set_theme_mod( 'vw_computer_repair_pro_appointment_small_heading', 'APPOINTMENT' );
        set_theme_mod( 'vw_computer_repair_pro_appointment_main_heading', 'BOOK APPOINTMENT' );
        set_theme_mod( 'vw_computer_repair_pro_appointment_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane' );

        // ---------- Working Process -----------

        set_theme_mod( 'vw_computer_repair_pro_working_process_small_heading', 'HOW WE WORK' ); 
        set_theme_mod( 'vw_computer_repair_pro_working_process_main_heading', 'WORKING PROCESS' );
        set_theme_mod( 'vw_computer_repair_pro_working_process_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum' ); 
        set_theme_mod( 'vw_computer_repair_pro_working_process_number', 4 );
        $process_title=array('Book Now','Find The Damage Device','Repair Device','Done');
        for($i=1;$i<=4;$i++)
        {
          set_theme_mod( 'vw_computer_repair_pro_working_process_icon'.$i, get_template_directory_uri() . '/assets/images/process/Process'.$i.'.webp');

          set_theme_mod( 'vw_computer_repair_pro_working_process_icon_image_alt_text'.$i, 'Alt Tag for Image Working Process'.$i );

          set_theme_mod( 'vw_computer_repair_pro_working_process_title'.$i,$process_title[$i-1]); 
          set_theme_mod( 'vw_computer_repair_pro_working_process_number'.$i,'0'.$i);
          set_theme_mod( 'vw_computer_repair_pro_working_process_arrow'.$i, 'fas fa-long-arrow-alt-right' );  
        }

        // ------------ Newsletter -----------

        set_theme_mod( 'vw_computer_repair_pro_newsletter_bgimage', get_template_directory_uri() . '/assets/images/NewsletterBG.webp');
        set_theme_mod( 'vw_computer_repair_pro_newsletter_small_heading', 'NEWSLETTER' ); 
        set_theme_mod( 'vw_computer_repair_pro_newsletter_main_heading', 'SUBSCRIBE TO OUR NEWSLETTER' ); 
        set_theme_mod( 'vw_computer_repair_pro_newsletter_text', 'Te obtinuit ut adepto satis somno. Aliisque' );

        // ------------ Latest News -------------

        set_theme_mod( 'vw_computer_repair_pro_latest_news_small_heading', 'OUR BLOG' );
        set_theme_mod( 'vw_computer_repair_pro_latest_news_main_heading', 'LATEST NEWS' );
        set_theme_mod( 'vw_computer_repair_pro_latest_news_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane' );
        set_theme_mod( 'vw_computer_repair_pro_latest_news_number', 3 );
        set_theme_mod( 'vw_computer_repair_pro_latest_news_button_title', 'READ MORE' );

        $post_title=array('FINIBUS BONORUM MALORUM','ENIM IPSAM VOLUPTATEM QUIA','MODI TEMPORA INCIDUNT LABORE');
        for($i=1;$i<=3;$i++){
          $vw_title = $post_title[$i-1];
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

          // Create post object
          $my_post = array(
           'post_title'    => wp_strip_all_tags( $vw_title ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'post',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );
          $image_url = get_template_directory_uri() . '/assets/images/blogs/News'.$i.'.webp';
          $image_name= 'latest-news'.$i.'.webp';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'post',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );

          set_theme_mod( 'vw_computer_repair_pro_post_image_alt_text'.$i, 'Alt Tag for Image Latest Post'.$i );
        }

        // ---------- Our Partners ----------

        set_theme_mod( 'vw_computer_repair_pro_our_partners_number', 6 );
        for($i=1;$i<=6;$i++)
        {
          set_theme_mod( 'vw_computer_repair_pro_our_partners_image'.$i, get_template_directory_uri() . '/assets/images/partners/Sponsors'.$i.'.webp');
          set_theme_mod( 'vw_computer_repair_pro_partner_image_alt_text'.$i, 'Alt Tag for Image Partner'.$i );
        }

        // ----------  Contact Page  ------------

        set_theme_mod( 'vw_computer_repair_pro_contactpage_form_title', 'Say Hello' ); 
        set_theme_mod( 'vw_computer_repair_pro_contactpage_form_text', 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus' );
        //Longitude
        set_theme_mod( 'vw_computer_repair_pro_address_longitude', '-80.053361' ); 
        //Latitude
        set_theme_mod( 'vw_computer_repair_pro_address_latitude', '26.704241' ); 
        //Email Title text
        set_theme_mod( 'vw_computer_repair_pro_contactpage_email_title', 'Email ' ); 
        //Email ID
        set_theme_mod( 'vw_computer_repair_pro_contactpage_email_one', 'abcxuz@gmail.com' ); 
        set_theme_mod( 'vw_computer_repair_pro_contactpage_email_two', 'abcxuz@gmail.com' ); 
        //Address Title text
        set_theme_mod( 'vw_computer_repair_pro_address_title', 'Address' ); 
        //Address
        set_theme_mod( 'vw_computer_repair_pro_address', '123 6th eight avenue FL 32904 , 455 Martinson, Los Angeles' ); 
        //Phone Title text
        set_theme_mod( 'vw_computer_repair_pro_contactpage_phone_title', 'Phone' ); 
        //Phone No.
        set_theme_mod( 'vw_computer_repair_pro_contactpage_phone_one', '123-456-7890' );
        set_theme_mod( 'vw_computer_repair_pro_contactpage_phone_two', '123-456-7890' );

        //footer
        set_theme_mod( 'vw_computer_repair_pro_footer_widget_section_bgimage', get_template_directory_uri() . '/assets/images/footerbg.webp');

        //Copyright Text
        set_theme_mod( 'vw_computer_repair_pro_footer_copy', 'Computer Repair WordPress Theme 2019' ); 
        // 404 text
        set_theme_mod( 'vw_computer_repair_pro_404_page_title', '404 Not Found' ); 
        set_theme_mod( 'vw_computer_repair_pro_404_page_content', 'Looks like you have taken a wrong turn &hellip; Don\'t worry &hellip; it happens to the best of us.' ); 
        set_theme_mod( 'vw_computer_repair_pro_404_page_button_text', 'Back to Home Page' );
        //topbar responsive media
        set_theme_mod( 'vw_computer_repair_pro_res_open_menu_icon', 'fas fa-bars' ); 
        set_theme_mod( 'vw_computer_repair_pro_res_close_menus_icon', 'fas fa-times' ); 
        set_theme_mod( 'vw_computer_repair_pro_blog_category_next_title', 'Next post' );
        set_theme_mod( 'vw_computer_repair_pro_blog_category_prev_title', 'Previous post' );

        set_theme_mod( 'vw_computer_repair_pro_header_search_placeholder_text', 'Search...' );
        set_theme_mod( 'vw_computer_repair_pro_site_menu_width', '250' );

        $VW_Widget_Importer = new VW_Widget_Importer;
		$VW_Widget_Importer->import_widgets( $this->widget_file_url );

        exit;
	}

	public function wz_activate_vw_computer_repair_pro() {
		$vw_computer_repair_pro_license_key = $_POST['vw_computer_repair_pro_license_key'];

		$endpoint = IBTANA_THEME_LICENCE_ENDPOINT.'ibtana_client_activate_premium_theme';

		$body = [
			'theme_license_key'  => $vw_computer_repair_pro_license_key,
			'site_url'					 => site_url(),
			'theme_text_domain'	 => wp_get_theme()->get( 'TextDomain' )
		];
		$body = wp_json_encode( $body );
		$options = [
			'body'        => $body,
			'headers'     => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post( $endpoint, $options );
		if ( is_wp_error( $response ) ) {
			ThemeWhizzie::remove_the_theme_key();
			ThemeWhizzie::set_the_validation_status('false');
			$response = array('status' => false, 'msg' => 'Something Went Wrong!');
			wp_send_json($response);
			exit;
		} else {
			$response_body = wp_remote_retrieve_body( $response );
			$response_body = json_decode($response_body);

			if ( $response_body->is_suspended == 1 ) {
				ThemeWhizzie::set_the_suspension_status( 'true' );
			} else {
				ThemeWhizzie::set_the_suspension_status( 'false' );
			}

			if ($response_body->status === false) {
				ThemeWhizzie::remove_the_theme_key();
				ThemeWhizzie::set_the_validation_status('false');
				$response = array('status' => false, 'msg' => $response_body->msg);
				wp_send_json($response);
				exit;
			} else {
				ThemeWhizzie::set_the_validation_status('true');
				ThemeWhizzie::set_the_theme_key($vw_computer_repair_pro_license_key);
				$response = array('status' => true, 'msg' => 'Theme Activated Successfully!');
				wp_send_json($response);
				exit;
			}
		}
	}

	/**
	 * Imports Builder Demo Content
	 * @since 1.1.0
	 */
	public function setup_builder() {
		$buildercontent = '';
		$resp_slug = ''; $home_id;
		 global $home_b;
		$json_theme = array('base_theme_text_domain' => 'the-computer-repair');
	    $json_args = array(
	        'method' => 'POST',
	        'headers'     => array(
	            'Content-Type'  => 'application/json'
	        ),
	        'body' => json_encode($json_theme),
	    );

	    $request_data = wp_remote_post( IBTANA_THEME_LICENCE_ENDPOINT.'get_client_ibtana_premium_theme_json_with_inner_pages',$json_args);
	    $response_json = json_decode(wp_remote_retrieve_body( $request_data));

	    // echo '<pre>'; print_r($response_json->data); echo '</pre>';

	    
	    foreach($response_json->data as $resp_json) {
		    // if($resp_json->page_type='template'){
		    // 	$resp_slug = $resp_json->slug ; 
		    // }
	    	$resp_slug = $resp_json->slug ; 
			$json_theme1 = array('premium_template_slug' => $resp_slug);
		    $json_args1 = array(
		        'method' => 'POST',
		        'headers'     => array(
		            'Content-Type'  => 'application/json'
		        ),
		        'body' => json_encode($json_theme1),
		    );

		    $request_data1 = wp_remote_post( IBTANA_THEME_LICENCE_ENDPOINT.'get_client_ibtana_premium_theme_json',$json_args1);
		    $response_json1 = json_decode(wp_remote_retrieve_body( $request_data1));
	 
	       	$buildercontent = $response_json1->data;
	       	 // echo '<pre>'; print_r($buildercontent); echo '</pre>';

	       	if($resp_json->page_type=='template'){
				$page_title = 'Home Page';
		    }else{
				$page_title = $resp_json->page_type;
			}

			$page_slug = $resp_json->slug;

	       	$page_check = get_page_by_title($page_title);
	       	$vw_page = array(
	       		'post_type' => 'page',
	       		'post_title' => $page_title,
	       		'post_content'  => $buildercontent,
	       		'post_status' => 'publish',
	       		'post_author' => 1,
	       		'post_slug' => $page_slug
	       	);

	       	if($resp_json->page_type=='template'){
	       		$home_id = wp_insert_post(wp_slash($vw_page));
   		 	add_post_meta( $home_id, '_wp_page_template', 'page-template/ibtana-template.php' );

			$home_b = get_page_by_title( 'Home Page' );

       		update_option( 'page_on_front', $home_b->ID );
       		update_option( 'show_on_front', 'page' );

		    }
		    else{
	       		$other_id = wp_insert_post(wp_slash($vw_page));
	       	}

	    }

	    set_theme_mod( 'vw_computer_repair_pro_topbar_cart_icon','fas fa-shopping-basket' );
        set_theme_mod( 'vw_computer_repair_pro_topbar_button_title', 'BOOK AN APPOINTMENT' );
        set_theme_mod( 'vw_computer_repair_pro_topbar_button_url', '#' );
        /*customizer-part-social-icons.php*/
        //twitter link
        set_theme_mod( 'vw_computer_repair_pro_headertwitter', 'https://twitter.com/' ); 
        //facebook link 
        set_theme_mod( 'vw_computer_repair_pro_headerfacebook', 'https://www.facebook.com/' ); 
        //GooglePlus link
        set_theme_mod( 'vw_computer_repair_pro_headeryoutube', 'https://www.youtube.com/' );
        //Instagram link
        set_theme_mod( 'vw_computer_repair_pro_headerinstagram', 'https://www.instagram.com/' );
        //Linkldein link
        set_theme_mod( 'vw_computer_repair_pro_headerlinkedin', 'https://www.linkedin.com/' );
        //Linkldein link
        set_theme_mod( 'vw_computer_repair_pro_headerflickr', 'https://www.flickr.com/' );
        /*customizer-part-social-icons.php*/
        //twitter link
        set_theme_mod( 'vw_computer_repair_pro_headertwitter', 'https://twitter.com/' ); 
        //facebook link 
        set_theme_mod( 'vw_computer_repair_pro_headerfacebook', 'https://www.facebook.com/' ); 
        //GooglePlus link
        set_theme_mod( 'vw_computer_repair_pro_headeryoutube', 'https://www.youtube.com/' );
        //Instagram link
        set_theme_mod( 'vw_computer_repair_pro_headerinstagram', 'https://www.instagram.com/' );
        //Linkldein link
        set_theme_mod( 'vw_computer_repair_pro_headerlinkedin', 'https://www.linkedin.com/' );
        //Linkldein link
        set_theme_mod( 'vw_computer_repair_pro_headerflickr', 'https://www.flickr.com/' );

        // ------------ Contact Details ------------

        set_theme_mod( 'vw_computer_repair_pro_contact_details_address_icon', 'fas fa-map-marker-alt' ); 
        set_theme_mod( 'vw_computer_repair_pro_contact_details_address_text', '351 Montreal Ave, Staten Island, NY 12032' );

        set_theme_mod( 'vw_computer_repair_pro_contact_details_phone_icon', 'fas fa-phone-volume' ); 
        set_theme_mod( 'vw_computer_repair_pro_contact_details_phone_text', '0123456789' );

        set_theme_mod( 'vw_computer_repair_pro_contact_details_email_icon', 'far fa-envelope' ); 
        set_theme_mod( 'vw_computer_repair_pro_contact_details_email_text', 'computerrepair@gmail.com' );

        for($i=1;$i<=6;$i++)
        {
          set_theme_mod( 'vw_computer_repair_pro_our_partners_image'.$i, get_template_directory_uri() . '/assets/images/partners/Sponsors'.$i.'.webp');
          set_theme_mod( 'vw_computer_repair_pro_partner_image_alt_text'.$i, 'Alt Tag for Image Partner'.$i );
        }
        $post_title=array('FINIBUS BONORUM MALORUM','ENIM IPSAM VOLUPTATEM QUIA','MODI TEMPORA INCIDUNT LABORE');
	     for($i=1;$i<=3;$i++){
          $vw_title = $post_title[$i-1];
          $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

          // Create post object
          $my_post = array(
           'post_title'    => wp_strip_all_tags( $vw_title ),
           'post_content'  => $content,
           'post_status'   => 'publish',
           'post_type'     => 'post',   
          );

          // Insert the post into the database
          $vwpost_id = wp_insert_post( $my_post );
          $image_url = get_template_directory_uri() . '/assets/images/blogs/News'.$i.'.webp';
          $image_name= 'latest-news'.$i.'.webp';
          $upload_dir       = wp_upload_dir(); 
          // Set upload folder
          $image_data       = file_get_contents($image_url); 
          // Get image data
          $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); 
          // Generate unique name
          $filename= basename( $unique_file_name ); 
          // Create image file name
          // Check folder permission and define file location
          if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file = $upload_dir['path'] . '/' . $filename;
          } else {
             $file = $upload_dir['basedir'] . '/' . $filename;
          }
          // Create the image  file on the server
          file_put_contents( $file, $image_data );
          // Check image file type
          $wp_filetype = wp_check_filetype( $filename, null );
          // Set attachment data
          $attachment = array(
           'post_mime_type' => $wp_filetype['type'],
           'post_title'     => sanitize_file_name( $filename ),
           'post_content'   => '',
           'post_type'     => 'post',
           'post_status'    => 'inherit'
          );

          // Create the attachment
          $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
          // Include image.php
          require_once(ABSPATH . 'wp-admin/includes/image.php');
          // Define attachment metadata
          $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          // Assign metadata to attachment
           wp_update_attachment_metadata( $attach_id, $attach_data );
          // And finally assign featured image to post
          set_post_thumbnail( $vwpost_id, $attach_id );

          set_theme_mod( 'vw_computer_repair_pro_post_image_alt_text'.$i, 'Alt Tag for Image Latest Post'.$i );
        }

          for($i=1;$i<=5;$i++){

            $vw_title = 'PRODUCT TITLE '.$i;
            $content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi.';

            // Create post object
            $my_post = array(
             'post_title'    => wp_strip_all_tags( $vw_title ),
             'post_content'  => $content,
             'post_status'   => 'publish',
             'post_type'     => 'product'
             
            );

            // Insert the post into the database
            $vwpost_id = wp_insert_post( $my_post );

            update_post_meta( $vwpost_id, '_regular_price', '150' );
            update_post_meta( $vwpost_id, '_sale_price', '120' );
            
            $image_url = get_template_directory_uri() . '/assets/images/products/our-products'.$i.'.webp';

            $image_name='our-products'.$i.'.webp';
            $upload_dir= wp_upload_dir(); 
            // Set upload folder
            $image_data= file_get_contents($image_url); 
            // Get image data
            $unique_file_name= wp_unique_filename( $upload_dir['path'], $image_name ); 
            // Generate unique name
            $filename=basename( $unique_file_name ); 
            // Create image file name
            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
             $file =$upload_dir['path'] . '/' . $filename;
            } else {
              $file =$upload_dir['basedir'] . '/' . $filename;
            }
            // Create the image  file on the server
            file_put_contents( $file, $image_data );
            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );
            // Set attachment data
            $attachment = array(
             'post_mime_type' => $wp_filetype['type'],
             'post_title'     => sanitize_file_name( $filename ),
             'post_content'   => '',
             'post_type'     => 'product',
             'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $vwpost_id );
            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');
            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );
            // And finally assign featured image to post
            set_post_thumbnail( $vwpost_id, $attach_id );

          }

		$blog_id=''; $contact_id=''; $page_id= '';$page_title='';
		$page_slug=''; 

		
		
        // Create a blog page and assigned the template
        $blog_title = 'Blog';
        $blog = array(
             'post_type' => 'page',
             'post_title' => $blog_title,
             'post_status' => 'publish',
             'post_author' => 1,
             'post_slug' => 'blog'
        );
        $blog_id = wp_insert_post($blog);


        //Set the blog page template
        add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );


        // Create a Page
        if( get_page_by_title( 'Page' ) == NULL ){
         	$page_title = 'Page ';
         	$content = 'Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita. Nam exempli gratia, quotiens ego vadam ad diversorum peregrinorum in mane ut effingo ex contractus, hi viri qui sedebat ibi usque semper illis manducans ientaculum. Solum cum bulla ut debui; EGO youd adepto a macula proiciendi. Sed quis scit si forte quod esset optima res pro me. sicut ea quae sentio. Qui vellem cadunt off ius desk ejus! Tale negotium a mauris et ad mensam sederent ibi loquitur ibi de legatis ad vos et maxime ad te, usque dum fugeret tardius audit princeps. Bene tamen fiduciam Ego got off semel';

         	$page_check = get_page_by_title($page_title);
        	$vw_page = array(
	         	'post_type' => 'page',
	         	'post_title' => $page_title,
	         	'post_content'  => $content,
	         	'post_status' => 'publish',
	         	'post_author' => 1,
	         	'post_slug' => 'page'
        	);
       		$page_id = wp_insert_post($vw_page);
         }

        // Create a contact page and assigned the template
        $contact_title = 'Contact';
        $contact = array(
          'post_type' => 'page',
          'post_title' => $contact_title,
          'post_status' => 'publish',
          'post_author' => 1,
          'post_slug' => 'contact'
        );
 		$contact_id = wp_insert_post($contact);

        //Set the blog with right sidebar template
        add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );
        if(isset($home_b->ID)){
        	echo json_encode(['home_page_id'=>$home_b->ID,'home_page_url'=>get_edit_post_link( $home_b->ID, '' )]);
        }

       	$VW_Widget_Importer = new VW_Widget_Importer;
		$VW_Widget_Importer->import_widgets( $this->widget_file_url );

		exit;

	}

	// ------------ Ibtana Activation Close -----------


	//guidline for about theme
	public function vw_computer_repair_pro_mostrar_guide() {

		$display_string = '';

		// Check the validation Start
		$vw_computer_repair_pro_license_key = ThemeWhizzie::get_the_theme_key();
		$endpoint = IBTANA_THEME_LICENCE_ENDPOINT.'ibtana_client_premium_theme_check_activation_status';
		$body = [
			'theme_license_key'  => $vw_computer_repair_pro_license_key,
			'site_url'					 => site_url(),
			'theme_text_domain'	 => wp_get_theme()->get( 'TextDomain' )
		];
		$body = wp_json_encode( $body );
		$options = [
			'body'        => $body,
			'headers'     => [
				'Content-Type' => 'application/json',
			]
		];
		$response = wp_remote_post( $endpoint, $options );
		if ( is_wp_error( $response ) ) {
			// ThemeWhizzie::set_the_validation_status('false');
		} else {
			$response_body = wp_remote_retrieve_body( $response );
			$response_body = json_decode($response_body);

			if ( $response_body->is_suspended == 1 ) {
				ThemeWhizzie::set_the_suspension_status( 'true' );
			} else {
				ThemeWhizzie::set_the_suspension_status( 'false' );
			}
			
			$display_string = isset($response_body->display_string) ? $response_body->display_string : '';

			if ($display_string != '') {
				if (strpos($display_string, '[THEME_NAME]') !== false) {
					$display_string = str_replace("[THEME_NAME]", "VW Computer Repair Pro", $display_string);
				}
				if (strpos($display_string, '[THEME_PERMALINK]') !== false) {
					$display_string = str_replace("[THEME_PERMALINK]", "https://www.vwthemes.com/themes/bakery-wordpress-theme/", $display_string);
				}
			}

			echo '<div class="notice is-dismissible error thb_admin_notices">' . $display_string . '</div>';

			if ($response_body->status === false) {
				ThemeWhizzie::set_the_validation_status('false');
			} else {
				ThemeWhizzie::set_the_validation_status('true');
			}
		}
		// Check the validation END

		$theme_validation_status = ThemeWhizzie::get_the_validation_status();

		//custom function about theme customizer
		$return = add_query_arg( array()) ;
		$theme = wp_get_theme( 'vw-computer-repair-pro' );

		?>

		<div class="wrapper-info get-stared-page-wrap">

			<div class="wrapper-info-content">
				<h2><?php _e( 'Welcome to VW Computer Repair Pro', 'vw-computer-repair-pro' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
				<p><?php _e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, block based and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-computer-repair-pro'); ?></p>
			</div>
			<div class="tab-sec theme-option-tab">
				<div class="tab">
					<button class="tablinks active" onclick="openCity(event, 'theme_activation')" data-tab="theme_activation"><?php _e( 'Key Activation', 'vw-computer-repair-pro' ); ?></button>
					<button class="tablinks wizard-tab" onclick="openCity(event, 'demo_offer')" data-tab="demo_offer"><?php _e( 'Setup Wizard', 'vw-computer-repair-pro' ); ?></button>
					<button class="tablinks" onclick="openCity(event, 'theme_info')" data-tab="theme_info"><?php _e( 'Support', 'vw-computer-repair-pro' ); ?></button>
					<button class="tablinks" onclick="openCity(event, 'plugins')" data-tab="plugins"><?php _e( 'Plugins', 'vw-computer-repair-pro' ); ?></button>
					<button class="tablinks other-product-tab" onclick="openCity(event, 'others_theme')"><?php esc_html_e( 'All Themes', 'vw-computer-repair-pro' ); ?></button>
				</div>

				<!-- Tab content -->
				<div id="theme_activation" class="tabcontent open">

					<div class="theme_activation-wrapper">
						<span class="theme-license-message"><?php esc_html_e('Check your theme license key in ','vw-computer-repair-pro'); ?>
						<a href="<?php echo esc_url('https://www.vwthemes.com/my-account/'); ?>" target="_blank"><?php esc_html_e(' My Account','vw-computer-repair-pro'); ?></a></span>
						<div class="theme_activation_spinner">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
								<g transform="translate(50,50)">
								  <g transform="scale(0.7)">
								  <circle cx="0" cy="0" r="50" fill="#0f81d0"></circle>
								  <circle cx="0" cy="-28" r="15" fill="#cfd7dd">
								    <animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" keyTimes="0;1" values="0 0 0;360 0 0"></animateTransform>
								  </circle>
								  </g>
								</g>
							</svg>
						</div>
						<div class="theme-wizard-key-status">
							<?php
								if ( $theme_validation_status === 'false' ) {
									esc_html_e('Theme License Key is not activated!','vw-computer-repair-pro');
								} else {
									esc_html_e('Theme License is Activated!','vw-computer-repair-pro');
								}
							?>
						</div>
						<?php $this->activation_page(); ?>
					</div>
				</div>
				<div id="demo_offer" class="tabcontent">
					<?php $this->wizard_page(); ?>
				</div>
				<div id="theme_info" class="tabcontent">
					<div class="col-left-inner">
						<h3><?php _e( 'VW Computer Repair Pro Information', 'vw-computer-repair-pro' ); ?></h3>
						<hr class="h3hr">
						<h4><?php _e( 'Theme Documentation', 'vw-computer-repair-pro' ); ?></h4>
						<p><?php _e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-computer-repair-pro' ); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( VW_COMPUTER_REPAIR_PRO_THEME_DOC ); ?>" target="_blank"> <?php _e( 'Documentation', 'vw-computer-repair-pro' ); ?></a>
						</div>
						<hr>
						<h4><?php _e('Having Trouble, Need Support?', 'vw-computer-repair-pro'); ?></h4>
						<p> <?php _e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-computer-repair-pro'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( VW_COMPUTER_REPAIR_PRO_SUPPORT ); ?>" target="_blank"><?php _e('Support Forum', 'vw-computer-repair-pro'); ?></a>
						</div>
						<hr>
						<h4><?php _e('Reviews & Testimonials', 'vw-computer-repair-pro'); ?></h4>
						<p> <?php _e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-computer-repair-pro'); ?>  </p>
						<div class="info-link">
							<a href="<?php echo esc_url( VW_COMPUTER_REPAIR_PRO_REVIEW ); ?>" target="_blank"><?php _e('Reviews', 'vw-computer-repair-pro'); ?></a>
						</div>
					</div>
					<div class="col-right-inner">
						<div id="vw-demo-setup-guid">
							<h3><?php esc_html_e('Checkout our setup videos','vw-computer-repair-pro'); ?></h3><hr />
							<ul>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/nLB9E6BBBv0"><span class="dashicons dashicons-welcome-widgets-menus"></span>Setup Menu</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/gjccwcAK47o"><span class="dashicons dashicons-email-alt"></span>Setup Contact Page</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/7BvTpLh-RB8"><span class="dashicons dashicons-editor-table"></span>Setup Widgets</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/Mox298rk0Qo"><span class="dashicons dashicons-share"></span>Setup Social Icon</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/WqNTB50xJMA"><span class="dashicons dashicons-wordpress-alt"></span>Install WordPress Theme</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/8UxkXkix-ic"><span class="dashicons dashicons-admin-users"></span>Create WordPress User</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/1xGlbWOzQBg"><span class="dashicons dashicons-image-flip-horizontal"></span>Setup Slider</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/pJFF_wjdvcA"><span class="dashicons dashicons-database"></span>WordPress Backup</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/xXdnUTPG_6A"><span class="dashicons dashicons-instagram"></span>Connect Instagram</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/leLBzmbvdQQ"><span class="dashicons dashicons-table-col-delete"></span>Fix 404 Error</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/OPBONJBtO6g"><span class="dashicons dashicons-admin-page"></span>Setup Template Pages</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/jqG2eRjgPa4"><span class="dashicons dashicons-video-alt3"></span>Setup Youtube Video</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/ovcok3FPRto"><span class="dashicons dashicons-welcome-add-page"></span>Setup Shortcode Pages</a>
								</li>
								<li>
									<a href="javascript:void(0);" doc-video-url="https://www.youtube.com/embed/O6elK2kSHQw"><span class="dashicons dashicons-images-alt2"></span>Setup Gallery Plugin</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				</div>
				<div class="wz-video-model">
					<span class="dashicons dashicons-no"></span>
					<iframe width="100%" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div id="plugins" class="tabcontent">
					<div class="wizard-plugin-wrapper">
						<div class="o-product-row">
							<div class="plugin-col ibtana-plugin-col">
								<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/banner-772x250.png'); ?>">
								<h3><?php echo esc_html('Ibtana - WordPress Website Builder Plugin'); ?></h3>
								<p><?php echo esc_html('Ibtana Gutenberg Editor has ready made eye catching responsive templates build with custom blocks and options to extend Gutenberg’s default capabilities. You can easily import demo content for the block or templates with a single click'); ?></p>
								<?php
								$plugin_ins = Vw_Premium_Theme_Plugin_Activation_Settings::get_instance();
								$vw_theme_actions = $plugin_ins->recommended_actions;

								if ($vw_theme_actions): foreach ($vw_theme_actions as $key => $vw_theme_actionValue):
								?>
								<div class="ibtana-activation-btn">
									<?php echo wp_kses_post($vw_theme_actionValue['link']); ?>
								</div>
								<?php endforeach;
				        		endif; ?>
							</div>
							<div class="plugin-col">
								<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/VWThemes_banner_plugin.png'); ?>">
								<h3><?php echo esc_html('Title Banner Image Plugin'); ?></h3>
								<p><?php echo esc_html('If you are interested in adding the banner images, you check VW Title Banner Plugin. Its main speciality is that it permits user the addition of banner image on post, custom post or any page. '); ?></p>
								<a href="<?php echo esc_url('https://www.vwthemes.com/premium-plugin/vw-title-banner-plugin/'); ?>"><?php echo esc_html('Buy Now'); ?></a>
							</div>
							<div class="plugin-col">
								<img src="<?php echo esc_url(get_template_directory_uri().'/theme-wizard/assets/images/gallery_plugin_banner.png'); ?>">

								<h3><?php echo esc_html('VW Gallery Images Plugin'); ?></h3>
								<p><?php echo esc_html('The VW Gallery Plugin is an amazing WordPress gallery plugin. It helps you in creating the elegant gallery within few minutes. The VW Gallery plugin offers the advantage of displaying multiple galleries on a single page or post.'); ?></p>
								<a href="<?php echo esc_url('https://www.vwthemes.com/premium-plugin/vw-gallery-plugin/'); ?>"><?php echo esc_html('Buy Now'); ?></a>
							</div>

						</div>
					</div>
				</div>
				<div id="others_theme" class="tabcontent">
					<script>

						var data_post={"para":"1"};

					    jQuery.ajax({
					      method: "POST",
					      url: "https://www.vwthemes.com/wp-json/ibtana-licence/v2/get_modal_contents",
					      data: JSON.stringify(data_post),
					      dataType: 'json',
					      contentType: 'application/json',
					    }).done(function( data ) {
					    	/*console.log(data);*/
					    	var premium_data = data.data.products;
					    	for (var i = 0; i < premium_data.length; i++) {
						          var premium_product = premium_data[i];
						          var card_content = `<div class="o-products-col" data-id="`+premium_product.id+`">
						          	<div class="o-products-image">
						          		<img src="`+premium_product.image+`">
						          	</div>
						          	<h3>`+premium_product.title+`</h3>
						          	<a href="`+premium_product.permalink+`" target="_blank">Buy Now</a>
						          	<a href="`+premium_product.demo_url+`" target="_blank">View Demo</a>
						          </div>`;
						        jQuery('.wz-spinner-wrap').css('display','none');
	          					jQuery('#other-products .o-product-row').append(card_content);
	        				}

	        				var premium_category = data.data.sub;
	        				var active_class=""
	        				/*console.log(premium_category.length);*/
					    	for (let i = 0; i < premium_category.length; i++) {
					    		if(i==0){
					    			active_class="active";
					    		}else{
					    			active_class="";
					    		}
				    			let premium_product = premium_category[i];
					          	let card_content = `<li data-ids="`+premium_product.product_ids+`" onclick="other_products(this);" class="`+active_class+`">
					          		`+premium_product.name+`<span class="badge badge-info">`+premium_product.product_ids.length+`</span>
					          	</li>`;
          						jQuery('.o-product-col-1 ul').append(card_content);
					    	}
					    });

					    function other_products(content){

					    	jQuery('.o-product-col-1 ul li').attr('class','');
					        content.classList.add("active");
				            var data_ids = jQuery(content).attr('data-ids');

				            var id_arr = data_ids.split(',');
				            jQuery('.o-product-row .o-products-col[data-id]').hide();
				            for (var i = 0; i < id_arr.length; i++) {
				                var single_id = id_arr[i];
				                jQuery('.o-product-row .o-products-col[data-id="'+single_id+'"]').show();
				            }

					    }

					</script>
					<div id="other-products">
						<div class="wz-spinner-wrap">
							<div class="lds-dual-ring"></div>
						</div>
						<div class="o-product-main-row">
							<div class="o-product-col-1">
								<ul>

								</ul>
							</div>
							<div class="o-product-col-2">
								<div class="social-theme-search">
				                    <input class="themesearchinput" type="text" placeholder="Search Theme Here">
				                </div>
								<div class="o-product-row" style="clear: both;">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php }


	// Add a Custom CSS file to WP Admin Area
	public function vw_computer_repair_pro_admin_theme_style() {
		wp_enqueue_style( 'vw-computer-repair-pro-font', $this->vw_computer_repair_pro_admin_font_url(), array() );
		wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/theme-wizard/getstarted/getstart.css');
		//( 'tab', get_template_directory_uri() . '/theme-wizard/getstarted/js/tab.js' );
	}

	// Theme Font URL
	public function vw_computer_repair_pro_admin_font_url() {
		$font_url = '';
		$font_family = array();
		$font_family[] = 'Muli:300,400,600,700,800,900';

		$query_args = array(
			'family'	=> urlencode(implode('|',$font_family)),
		);
		$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		return $font_url;
	}
}
