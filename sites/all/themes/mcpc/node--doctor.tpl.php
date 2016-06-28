<div id="doc_wrapper">
	<div class="row">
		<div class="doc_top col desktop_12 tablet_8 mobile_4"><?php print $node->field_top_section_content['und'][0]['value'] ?></div>
	</div>
	<div class="row">
		<div class="doc_left col desktop_4 table_3">
			<?php print theme_image(array('path'=>file_create_url($node->field_doctor_photo['und'][0]['uri']), 'width' => null, 'height' => null)) ?>
		</div>
		<div class="doc_right col desktop_8 tablet_5 mobile_4">
			<?php print $node->body['und'][0]['value'] ?>
		</div>
	</div>    
</div>