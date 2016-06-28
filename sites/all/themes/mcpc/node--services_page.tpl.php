<div id="services_wrapper">
	<?php
		// Services				
		$service_items = field_get_items('node', $node, 'field_services');
		$service_num = count($service_items)-1;
	
			foreach($service_items as $key => $service_id){

				$service = field_collection_field_get_entity($service_id);
	?>
				<?php if($key!=$service_num): ?>
					<div class="service">
						<div class="wrapper">
							<h3><?php print $service->field_text_line['und'][0]['value'] ?></h3>
							<div class="service_content"><?php print $service->field_textarea_editor['und'][0]['value'] ?></div>
						</div>
						<div class="service_shadow"><div class="service_button">+</div></div>
					</div>
				<?php else: ?>
					<div class="service last">
						<div class="wrapper">
							<h3><?php print $service->field_text_line['und'][0]['value'] ?></h3>
							<div class="service_content"><?php print $service->field_textarea_editor['und'][0]['value'] ?></div>
						</div>
						<div class="service_shadow"><div class="service_button">+</div></div>
					</div>				
				<?php endif; ?>
	<?php } ?>
</div>