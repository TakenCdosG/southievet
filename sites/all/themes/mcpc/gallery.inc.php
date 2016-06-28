<?php
	print render($tabs);
	print render($messages);
?>
<div id="gallery_content">
	<div id="gallery_title"><h1><?php print $node->title ?></h1></div>
	<div class="fotorama" data-width="100%" data-height="771" data-allowfullscreen="native" data-ratio="1.4" data-nav="thumbs" data-loop="true" data-keyboard="true">
		<?php
			foreach($node->field_multi_images['und'] as $key => $value){
				print theme_image( array( 'path'=>file_create_url($value['uri']), 'title' => $value['title'], 'alt' => $value['alt'], 'attributes' => array('data-fit' => 'cover') ) );
			}
		?>
	</div>
</div>