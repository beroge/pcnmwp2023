<?php 

class VW_Button_Custom_Content extends WP_Customize_Control {

	// Whitelist content parameter
	public $content = '';

	/**
	* Render the control's content.
	*
	* Allows the content to be overriden without having to rewrite the wrapper.
	*
	* @since   1.0.0
	* @return  void
	*/
	public function render_content() {
		if ( isset( $this->label ) ) {
			echo '<span class="customize-control-title">' . $this->label . '</span>';
		}
		if ( isset( $this->content ) ) {
			echo $this->content;
		}
		if ( isset( $this->description ) ) {
			echo '<span class="description customize-control-description">' . $this->description . '</span>';
		}
	}
}
/**
 * Text sanitization
 *
 * @param  string	Input to be sanitized (either a string containing a single string or multiple, separated by commas)
 * @return string	Sanitized input
 */
if ( ! function_exists( 'vw_computer_repair_pro_text_sanitization' ) ) {
	function vw_computer_repair_pro_text_sanitization( $input ) {
		if ( strpos( $input, ',' ) !== false) {
			$input = explode( ',', $input );
		}
		if( is_array( $input ) ) {
			foreach ( $input as $key => $value ) {
				$input[$key] = sanitize_text_field( $value );
			}
			$input = implode( ',', $input );
		}
		else {
			$input = sanitize_text_field( $input );
		}
		return $input;
	}
}
?>