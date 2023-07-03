<?php
if ( ! class_exists( 'IbtanaMegaMenuVerify' ) ) {
  //define( 'IBAS_PLUGIN_URI', get_template_directory_uri());
  Class IbtanaMegaMenuVerify{

    private static $instance;

    protected $ibmm_plugin_status = '';
    /** Initiator **/
    public static function get_instance() {
      if ( ! isset( self::$instance ) ) {
        self::$instance = new self();
      }
      return self::$instance;
    }

    /*  Constructor */
    public function __construct() {
      add_action( 'admin_init',  array($this,'ibmm_verify_plugins'));
    }

    public function ibmm_verify_plugins(){
      if( class_exists( 'IMMA_Class' ) ) {
        $ibmm_plugin_status = 'plugin_exist';
      }else{
        $ibmm_plugin_status = 'plugin_not_exist';
      }
      $this->ibtana_verify_mega_menu_admin_page_style($ibmm_plugin_status);
    }

    /* --------- Mega Menu Styles -------- */
    public function ibtana_verify_mega_menu_admin_page_style($ibmm_plugin_status){
      wp_enqueue_style( 'ibmm-verify-style',get_template_directory_uri().'/verify-addons/assets/css/ibmm-verify-style.css');
      wp_register_script( 'ibmm-verify-script', get_template_directory_uri().'/verify-addons/assets/js/ibmm-verify-script.js');
      wp_localize_script( 
        'ibmm-verify-script',
        'ibmm_verify_script_obj',
        array(
          'ibmmstatus'    => $ibmm_plugin_status,   
          'ibmmimage'     => get_template_directory_uri().'/verify-addons/assets/images/Ibtana-Mega-Menu.png'
        )
       );
      wp_enqueue_script( 'ibmm-verify-script' );
    }
  }
}
IbtanaMegaMenuVerify::get_instance();