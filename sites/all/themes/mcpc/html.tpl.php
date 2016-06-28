<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<?php global $base_url?>
	<?php print $head; ?>
	<title><?php print $head_title; ?> | Southie Vet</title>
	<?php print $styles; ?>
	<?php print $scripts; ?>
	<link rel="shortcut icon" href="<?php print $base_url."/".path_to_theme()."/images/favicon.ico" ?>" type="image/x-icon" />
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?> style='margin:0px;overflow-x:hidden;'>
	<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
	</div>
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
	<!-- CUSTOM SCRIPTS -->
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-41984534-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<script type="text/javascript" src="//use.typekit.net/byk0ikq.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</body>
</html>