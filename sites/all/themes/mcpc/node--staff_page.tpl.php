<?php $count = 1 ?>
<div id="staff_wrapper">
	<div class="row">
		<div class="staff_body col desktop_12 tablet_8 mobile_4"><?php print $node->body['und'][0]['value'] ?></div>
	</div>
	<div class="staff_list row">
		<?php foreach($node->field_staff_members['und'] as $key => $value): ?>
			<?php
				$member = node_load($value['nid']);
				
					if($key==$count){
						$class = 'col_staff_even';
						$count = $count+3;
					}
					elseif($key==0 || $key%3==0) $class = 'col_staff_three';
						else $class = 'col_staff_odd';
			?>
			<!-- STAFF MEMBER -->
			<div class="staff_member staff_c mobile_4 col <?php print $class ?>">
				<a class="link_wrapper" href="<?php print $GLOBALS['base_url'].'/'.drupal_get_path_alias('node/'.$member->nid) ?>">
					<div class="staff_member_photo"><?php print theme_image(array('path'=>file_create_url($member->field_doctor_photo['und'][0]['uri']), 'alt' => '', 'title' => '', 'width' => null, 'height' => null)) ?></div>
					<div class="staff_member_name"><h2><?php print $member->title ?></h2></div>
					<div class="staff_member_title"><?php print $member->field_staff_title['und'][0]['value'] ?></div>
				</a>
			</div>
			<!-- END STAFF MEMBER -->
		<?php endforeach; ?>
	</div>
</div>