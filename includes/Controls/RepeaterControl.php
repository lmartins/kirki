<?php

namespace Kirki\Controls;

class RepeaterControl extends \WP_Customize_Control {

	public $type = 'repeater';

	public function render_content() {

		if ( empty( $this->choices ) ) {
			return;
		}

		$name = '_customize-repeater-' . $this->id;
		?>
		<span class="customize-control-title">
			<?php echo esc_html( $this->label ); ?>
			<?php if ( ! empty( $this->description ) ) : ?>
				<span class="description customize-control-description"><?php echo $this->description; ?></span>
			<?php endif; ?>
		</span>

		<div id="repeater_<?php echo $this->id; ?>" class="repeater">
			<div data-repeater-list="group-a">
				<div data-repeater-item style="border:2px dotted lightgray; padding:10px; margin-bottom:10px;">
					<?php foreach ( $this->choices as $choice ) : ?>
						<label for="<?php echo $this->id . $choice['slug']; ?>">
							<?php echo esc_html( $choice['label'] ); ?>
						</label>
						<input type="<?php echo esc_attr( $choice['type'] ); ?>" value="<?php echo $choice['value']; ?>" name="<?php echo esc_attr( $name ); ?>" id="<?php echo $this->id .'_'.$choice['slug']; ?>">
						</input>
						<br/><br/>
					<?php endforeach; ?>
					<br/>
	        <input data-repeater-delete type="button" class="button" value="Delete"/>
	      </div>
			</div>
			<input data-repeater-create type="button"  class="button" value="Add"/>
		</div>
		<script>
			jQuery(document).ready(function($) {
	        $('[id="repeater_<?php echo $this->id; ?>"]').repeater({
	            show: function () {
	                $(this).slideDown();
	            },
	            hide: function (deleteElement) {
	                if(confirm('Are you sure you want to delete this element?')) {
	                    $(this).slideUp(deleteElement);
	                }
	            },
	            // Removes the delete button from the first list item,
	            // defaults to false.
	            isFirstItemUndeletable: true
	        })
	    });
	</script>
	<?php

	}

}
