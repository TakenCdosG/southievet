<div id="ne_wrapper">
	<div id="ne_body"><?php print $node->body['und'][0]['value'] ?></div>
	<div id="ne_view_wrapper">
		<div id="news_view_full" class="ne_hide_mobile"><?php print views_embed_view('news_full', 'page'); ?></div>
		<div id="news_view_mobile" class="ne_hide_all"><?php print views_embed_view('news_full', 'page_1'); ?></div>
	</div>
</div>