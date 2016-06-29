<article id="home_content">
    <?php foreach($field_contact_items as $itemData): ?>
        <?php $item = entity_load('field_collection_item', array($itemData['value'])); ?>
        <?php foreach($item as $eItem): ?>
            <div class="item col desktop_8 appoint">
                <span class="number-label"><?php print $eItem->field_top_text['und'][0]['value'] ?></span>
                <h2 class="number-number"><?php print $eItem->field_bottom_text['und'][0]['value'] ?></h2>
            </div>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <div id="cp_body"><?php print $node->body['und'][0]['value'] ?></div>
</article>