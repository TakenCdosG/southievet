<div id="tes_wrapper">
	<div id="testimonial_wrapper" class="row">
		<div class="testimonial_prev col col_tes desktop_1 tablet_1 mob_tes_1"><?php print theme_image(array('path' => path_to_theme().'/images/test_prev.png', 'alt' => 'Previous Testimonial', 'title' => 'Previous Testimonial', 'attributes' => array('class' => 'test_control', 'data-type' => 'prev') )) ?></div>
		<div class="testimonial_content col col_tes desktop_10 tablet_6 mob_tes_2">
			<?php
				// Testimonials
				$testimonial_items = field_get_items('node', $node, 'field_testimonials');
				$num = count($testimonial_items)-1;

				foreach($testimonial_items as $key => $testimonial_id){

					$testimonial = field_collection_field_get_entity($testimonial_id);
			?>
					<?php if($key==$num): ?>
						<div class="testimonial last">
							<h2><?php print $testimonial->field_text_line['und'][0]['value'].' '.$testimonial->field_text_line_2['und'][0]['value'].'. <span>'.$testimonial->field_bottom_text['und'][0]['value'].', '.$testimonial->field_staff_title['und'][0]['value'].'</span>' ?></h2>
							<div class="testimonial_text"><?php print $testimonial->field_textarea_editor['und'][0]['value'] ?></div>
						</div>
					<?php else: ?>
						<div class="testimonial">
							<h2><?php print $testimonial->field_text_line['und'][0]['value'].' '.$testimonial->field_text_line_2['und'][0]['value'].'. <span>'.$testimonial->field_bottom_text['und'][0]['value'].', '.$testimonial->field_staff_title['und'][0]['value'].'</span>' ?></h2>
							<div class="testimonial_text"><?php print $testimonial->field_textarea_editor['und'][0]['value'] ?></div>
						</div>
					<?php endif; ?>
			<?php } ?>
		</div>
		<div class="testimonial_next col col_tes desktop_1 tablet_1 mob_tes_1"><?php print theme_image(array('path' => path_to_theme().'/images/test_next.png', 'alt' => 'Next Testimonial', 'title' => 'Next Testimonial', 'attributes' => array('class' => 'test_control', 'data-type' => 'next') )) ?></div>
	</div>
</div>