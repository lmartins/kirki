<?php

namespace Kirki\Controls;

class EditorControl extends \WP_Customize_Control {

	public $type = 'editor';

	public function render_content() { ?>

		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea( $this->value() ); ?>">
			<?php
				$settings = array(
					'textarea_name'    => $this->id,
					'teeny'            => true
				);
				wp_editor( $this->value(), $this->id, $settings );

				do_action('admin_footer');
				do_action('admin_print_footer_scripts');
			?>
		</label>
		<?php
	}

}
