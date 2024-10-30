<?php
	
	/**
	 * Toggle Switch Custom Control
	 *
	 *  */


	class vw_tourism_pro_Slider_Custom_Control extends WP_Customize_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'slider_control';
		/**
		 * Enqueue our scripts and styles
		 */
		
		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
		?>
			<div class="slider-custom-control">
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><input type="number" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-slider-value" <?php $this->link(); ?> />
				<div class="slider" slider-min-value="<?php echo esc_attr( $this->input_attrs['min'] ); ?>" slider-max-value="<?php echo esc_attr( $this->input_attrs['max'] ); ?>" slider-step-value="<?php echo esc_attr( $this->input_attrs['step'] ); ?>"></div><span class="slider-reset dashicons dashicons-image-rotate" slider-reset-value="<?php echo esc_attr( $this->value() ); ?>"></span>
			</div>
		<?php
		}
	}

	function vw_tourism_pro_slider_line_script() {
     
	    wp_enqueue_style( 'custom-toggle-swtch', get_template_directory_uri(). '/inc/customize/controls/slider-line-control/slider-line-control.css');
	    wp_enqueue_script( 'custom-toggle-swtch-js', get_template_directory_uri(). '/inc/customize/controls/slider-line-control/slider-line-control.js');
	    
	}
	add_action( 'customize_controls_enqueue_scripts', 'vw_tourism_pro_slider_line_script' );

?>


