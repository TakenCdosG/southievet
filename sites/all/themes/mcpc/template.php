<?php
/**
 * Override or insert variables into the page template.
 */
function mcpc_preprocess_page(&$vars){

	drupal_add_js(path_to_theme().'/js/helper.js');
	drupal_add_css(path_to_theme().'/grid/gridpak.css');
	drupal_add_css(path_to_theme().'/editor.css');

	$node = mcpc_current_node();
	$url = explode('/', $_GET['q']);

	switch(@$node->type){
		case 'home_page':
			$vars['template'] = 'front.inc.php';
			drupal_add_js(path_to_theme().'/js/responsiveslides.min.js');
			drupal_add_css(path_to_theme().'/css/responsiveslides.css');
		break;
		case 'news_page':
		case 'event_page':
		case 'internal_page':
		case 'doctor':
		case 'contact':
		case 'staff_page':
		case 'contact_page':
		case 'page_not_found':
		case 'services_page':
		case 'testimonial_page':
			$vars['template'] = 'internal.inc.php';
		break;
		case'gallery_page':
			$vars['template'] = 'gallery.inc.php';
			if($url[2]!='edit' || $url[2]!='devel'){
				drupal_add_js(path_to_theme().'/js/jquery-1.10.2.min.js');
				drupal_add_js(path_to_theme().'/js/fotorama.js');
				drupal_add_css(path_to_theme().'/css/fotorama.css');
			}
		break;
		default:
			$vars['template'] = 'default.inc.php';
		break;
	}

	// Global settings
	$global = node_load(2);
	
		// Header phone number
		$vars['header_phone'] = $global->field_text_line['und'][0]['value'];
		// Header text
		$vars['header_text'] = $global->field_text_line_2['und'][0]['value'];
		// Header schedule
		$vars['header_schedule'] = $global->field_textarea_editor['und'][0]['value'];
		// Footer text
		$vars['footer_text'] = $global->body['und'][0]['value'];
		// Footer images
		$vars['footer_imgs'] = mcpc_footer_images();
	
	// Reload the javascript and css files
	$vars['scripts'] = drupal_get_js();	
	$vars['styles'] = drupal_get_css();
}

/*
 * Get the footer images
*/
function mcpc_footer_images(){

	$node = node_load(2);
	$last = count($node->field_multi_images_link['und'])-1;
	$next_to_last = count($node->field_multi_images_link['und'])-2;
	
	$items = field_get_items('node', $node, 'field_multi_images_link');
	
	foreach($items as $key => $item_id){
		// Image
		$image = field_collection_field_get_entity($item_id);
		// Image path
		$image_path = file_create_url($image->field_single_image['und'][0]['uri']);
		// Image title
		$image_title = $image->field_single_image['und'][0]['title'];
		// Image alt
		$image_alt = $image->field_single_image['und'][0]['alt'];
		// URL
		$url = $image->field_text_line['und'][0]['value'];
		
			if($key==$last) $output .= '<div class="footer_img_cont last"><a href="'.$url.'" target="_blank">'.theme('image', array('path' => $image_path, 'title' => $image_title, 'alt' => $image_alt) ).'</a></div>';
				else if($key==$next_to_last) $output .= '<div class="footer_img_cont next_last"><a href="'.$url.'" target="_blank">'.theme('image', array('path' => $image_path, 'title' => $image_title, 'alt' => $image_alt) ).'</a></div>';
					else $output .= '<div class="footer_img_cont"><a href="'.$url.'" target="_blank">'.theme('image', array('path' => $image_path, 'title' => $image_title, 'alt' => $image_alt) ).'</a></div>';
	}
	return $output;
}

/**
 * Override the menu items for the mobile menu block
*/
function mcpc_menu_link__menu_block__1(array $variables){

  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);

		$output = l($element['#title'], $element['#href'], $element['#localized_options']);
		return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "<span class='arrow'></span></li>\n";
  }else{
		$output = l($element['#title'], $element['#href'], $element['#localized_options']);
		return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
	}
}