<?php
	$img_num = count($node->field_multi_images['und'])-1;
	$num = rand(0, $img_num);
	// Image url
	$path = file_create_url( $node->field_multi_images['und'][$num]['uri'] );
?>
<!-- TOP IMAGE -->
<div id="home_image_wrapper" style="background-image:url(<?php print $path ?>);">
	<div id="home_testi_wrapper" data-flag=0>
		<div id="home_testimonial">
			<h2 id="testimonial_title_1"><?php print $node->field_text_line['und'][0]['value'] ?></h2>
			<h2 id="testimonial_title_2"><?php print $node->field_text_line_2['und'][0]['value'] ?></h2>
			<!-- DESKTOP AND LANDSCAPE TABLET TESTIMONIALS -->
			<div class="testimonial_body testi_hide_mobile">"<span>
				<?php
					$text_num = count($node->field_textarea_multi_plain['und'])-1;
					$num = rand(0, $text_num);
					
					print substr( $node->field_textarea_multi_plain['und'][$num]['value'], 0, 168 )
				?>...</span>"</div>
			<!-- MOBILE AND PORTRAIT TABLET TESTIMONIALS -->
			<div class="testimonial_body testi_hide_desktop">"<span>
				<?php
					print substr( $node->field_textarea_multi_plain['und'][$num]['value'], 0, 127 )
				?>...</span>"</div>
			<div id="testimonial_link"><?php print l( $node->field_link['und'][0]['title'], $node->field_link['und'][0]['url'],array('attributes' => array('target'=>'_blank'))) ?>&nbsp;&#62;</div>
		</div>
	</div>
	<div id="home_image_shadow"></div>
</div>
<?php
	print render($tabs);
	print render($messages);
?>
<div id="home_content" class="row">
	<!-- LEFT SIDE WIDGETS -->
	<div class="col_hw_d col_hw_t home_widget_d_6 home_widget_t_4 widget_hide_mobile">
		<ul class="rslides">
		<?php
			$widgets = field_get_items('node', $node, 'field_home_left_widgets');

				foreach($widgets as $widget_id){
					// Widget
					$item = field_collection_field_get_entity($widget_id);
					// Type of widget
					$type = $item->field_type['und'][0]['value'];
					// Show the widget only if it has a title and a text
					if($item->field_text_line['und'][0]['value'] && $item->field_textarea_editor['und'][0]['value']){
						switch($type){
							case 0:
								// Wrapper
								print '<li><div class="home_left_widget staff_widget">';
								// Background big quotes
								print theme('image', array('path' => path_to_theme().'/images/big_quotes.png', 'attributes' => array('class' => 'quotes widget_hide_tablet') ) );
								// Background small quotes
								print theme('image', array('path' => path_to_theme().'/images/small_quotes.png', 'attributes' => array('class' => 'quotes widget_hide_desktop widget_hide_land') ) );
								// Title
								print '<h2 class="left_widget_title">'.$item->field_text_line['und'][0]['value'].'</h2>';
								// If a image exits
								if(@$item->field_single_image['und'][0]['uri']){
									// Image URL
									$image_path = file_create_url($item->field_single_image['und'][0]['uri']);
									// Image title
									$image_title = $item->field_single_image['und'][0]['title'];
									// Image alt
									$image_alt = $item->field_single_image['und'][0]['alt'];
									// Wdget image
									print '<div class="left_widget_image">'.theme('image', array('path' => $image_path, 'title' => $image_title, 'alt' => $image_alt )).'</div>';
									// Widget text and link
									print '<div class="left_widget_text">'.$item->field_textarea_editor['und'][0]['value'].'<div class="left_widget_link">'.l($node->field_more_staff ['und'][0]['title'], $node->field_more_staff ['und'][0]['url'], array( 'attributes' => array( 'target' => $node->field_more_staff ['und'][0]['attributes']['target'] ) ) ).'&nbsp;&#62;</div></div>';
								}else{
									// Widget full text
									print '<div class="left_widget_full">'.$item->field_textarea_editor['und'][0]['value'].'<div class="left_widget_link">'.l($node->field_more_staff ['und'][0]['title'], $node->field_more_staff ['und'][0]['url'], array( 'attributes' => array( 'target' => $node->field_more_staff ['und'][0]['attributes']['target'] ) ) ).'&nbsp;&#62;</div></div>';
								}
								print '</div></li>';
							break;
							case 1:
								// Wrapper
								print '<li><div class="home_left_widget text_widget">';
								// Title
								print '<h2 class="left_widget_title">'.$item->field_text_line['und'][0]['value'].'</h2>';
								// Full text
								print '<div class="left_widget_full">'.$item->field_textarea_editor['und'][0]['value'].'</div>';
								print '</div></li>';
							break;
						}
					}
				}
		?>
		</ul>
	</div>
	<div class="col_hw_d home_widget_d_1 widget_hide_land widget_hide_tablet widget_hide_mobile">&nbsp;</div>
	<!-- RIGHT SIDE WIDGETS -->
	<div class="col_hw_d col_hw_t home_widget_d_5 home_widget_t_4 mobile_4">
		<div id="home_link_widgets">
			<?php
				foreach($node->field_link_widget['und'] as $value){
					print '<div class="home_link_widget">'.l( $value['title'], $value['url'], array( 'attributes' => array( 'target' => $value['attributes']['target'] ) ) ).'</div>';
				}
			?>
		</div>
		<div id="home_video">
			<?php print render($page['content']) ?>
		</div>
	</div>
</div>