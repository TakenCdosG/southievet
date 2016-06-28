<?php $photo = $node->field_doctor_photo['und'][0] ?>
<div id="not_wrapper">
	<div class="row">
		<div class="not_body col desktop_8 tablet_5 mobile_4"><?php print $node->body['und'][0]['value'] ?></div>
		<div class="not_image col desktop_4 tablet_3 mobile_4"><?php print theme_image(array('path'=>file_create_url($photo['uri']), 'alt' => $photo['alt'], 'title' => $photo['title'] )) ?></div>
	</div>
</div>