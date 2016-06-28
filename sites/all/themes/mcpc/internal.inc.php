<?php
	$path = file_create_url( $node->field_single_image['und'][0]['uri'] );
?>
<!-- TOP IMAGE -->
<div id="internal_img_wrapper" style="background-image:url(<?php print $path ?>);">
	<div id="internal_img_bg">
		<div id="internal_img_text_wrapper" class="row">
			<div id="internal_img_text" class="col">
				<h2 id="internal_img_title" class="desktop_10 tablet_7 int_mobile_4"><?php print $node->field_text_line['und'][0]['value'] ?></h2>
				<h2 id="internal_img_sub" class="desktop_10 tablet_7 int_mobile_4"><?php print $node->field_text_line_2['und'][0]['value'] ?></h2>
        <div id="internal_img_right"><?php print $node->field_right_text['und'][0]['safe_value'] ?></div>
			</div>
		</div>
	</div>
	<div id="home_image_shadow"></div>
</div>
<?php
	print render($tabs);
	print render($messages);
?>
<?php if($node->field_internal_widgets['und'][0]['nid']): ?>
	<div id="internal_widgets_wrapper">
		<div id="internal_widgets_frame" class="row">
			<div class="int_widget_0 col col_int_w int_widget_1 int_w_mobile_4">
				<?php
					if($node->field_internal_widgets['und'][0]['nid']){
						// Widget
						$widget_0 = node_load($node->field_internal_widgets['und'][0]['nid']);
						// Desktop version
						print '<a class="int_w_hide_mobile" href="'.$widget_0->field_url['und'][0]['value'].'"><p>'.$widget_0->field_text_line['und'][0]['value'].'</p><p>'.$widget_0->field_text_line_2['und'][0]['value'].'</p></a>';
						// Mobile version
						print '<a class="int_w_hide_all" href="'.$widget_0->field_url['und'][0]['value'].'"><p>'.$widget_0->field_text_line['und'][0]['value'].'&nbsp;<span>'.$widget_0->field_text_line_2['und'][0]['value'].'</span></p></a>';
					}else print '&nbsp;';
				?>
			</div>
			<div class="int_widget_1 col col_int_w int_widget_1 int_w_mobile_4">
				<?php
					if($node->field_internal_widgets['und'][0]['nid']){
						// Widget
						$widget_1 = node_load($node->field_internal_widgets['und'][1]['nid']);
						// Desktop version
						print '<a class="int_w_hide_mobile" href="'.$widget_1->field_url['und'][0]['value'].'"><p>'.$widget_1->field_text_line['und'][0]['value'].'</p><p>'.$widget_1->field_text_line_2['und'][0]['value'].'</p></a>';
						// Mobile version
						print '<a class="int_w_hide_all" href="'.$widget_1->field_url['und'][0]['value'].'"><p>'.$widget_1->field_text_line['und'][0]['value'].'&nbsp;<span>'.$widget_1->field_text_line_2['und'][0]['value'].'</span></p></a>';
					}else print '&nbsp;';
				?>
			</div>
			<div class="int_widget_2 col col_int_w int_widget_1 int_w_mobile_4">
				<?php
					if($node->field_internal_widgets['und'][0]['nid']){
						// Widget
						$widget_2 = node_load($node->field_internal_widgets['und'][2]['nid']);
						// Desktop version
						print '<a class="int_w_hide_mobile" href="'.$widget_2->field_url['und'][0]['value'].'"><p>'.$widget_2->field_text_line['und'][0]['value'].'</p><p>'.$widget_2->field_text_line_2['und'][0]['value'].'</p></a>';
						// Mobile version
						print '<a class="int_w_hide_all" href="'.$widget_2->field_url['und'][0]['value'].'"><p>'.$widget_2->field_text_line['und'][0]['value'].'&nbsp;<span>'.$widget_2->field_text_line_2['und'][0]['value'].'</span></p></a>';
					}else print '&nbsp;';
				?>
			</div>
		</div>
	</div>
<?php endif; ?>
<div id="internal_content">
	<?php print render($page['content']) ?>
</div>