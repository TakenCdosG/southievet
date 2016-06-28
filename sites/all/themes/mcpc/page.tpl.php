<div id="page_top">
	<!-- HEADER -->
	<header id="header">
		<div class="row">
			<div id="logo" class="col desktop_6 tablet_4 mobile_2">
				<a href="/">
					<img class="logo_big hide_mobile" src="<?php print path_to_theme().'/images/logo_big.png' ?>" title="South Boston Animal Hospital" alt="South Boston Animal Hospital Logo" />
					<img class="logo_small hide_tablet hide_desktop" src="<?php print path_to_theme().'/images/logo_small.png' ?>" title="South Boston Animal Hospital" alt="South Boston Animal Hospital Logo" />
				</a>
			</div></a>
			<div id="header_info" class="col desktop_4 tablet_4 mobile_2">
				<p class="p_1"><?php print $header_phone ?></p>
				<p class="p_2 hide_mobile hide_tablet"><?php print $header_text ?></p>
				<div class="p_3 hide_mobile"><?php print $header_schedule ?></div>
				<p class="p_4 hide_desktop">
					<a target="_blank" href="https://www.facebook.com/southbostonanimalhospital"><img class="hide_mobile" src="<?php print path_to_theme().'/images/fb_small.png' ?>" title="Follow us on Facebook" alt="Facebook" /></a>
					<a target="_blank" href="https://twitter.com/southievet"><img class="tw hide_mobile" src="<?php print path_to_theme().'/images/tw_small.png' ?>" title="Follow us on Twitter" alt="Twitter" /></a>
					<a target="_blank" href="https://www.petly.com/"><img src="<?php print path_to_theme().'/images/patient_login.jpg' ?>" title="Patient Login" alt="Patient Login" /></a>
				</p>
			</div>
			<div id="header_social" class="col desktop_2 hide_tablet hide_mobile">
				<!-- DESKTOP SOCIAL LINKS -->
				<div id="desktop_social">
					<a target="_blank" href="https://www.facebook.com/southbostonanimalhospital"><img src="<?php print path_to_theme().'/images/fb_medium.png' ?>" width="19" height="19" title="Follow us on Facebook" alt="Facebook" /></a>
					<a target="_blank" href="https://twitter.com/southievet"><img src="<?php print path_to_theme().'/images/tw_medium.png' ?>" width="24" height="19" title="Follow us on Twitter" alt="Twitter" /></a>
					<a target="_blank" href="https://confirmsubscription.com/h/y/6ADDEA346866E2EC"><img src="<?php print path_to_theme().'/images/email_medium.png' ?>" width="25" height="19" title="Email" alt="Email" /></a>
				</div>
				<!-- DESKTOP PATIENT LOGIN -->
				<div id="desktop_login">
					<a target="_blank" href="http://www.petly.com"><img src="<?php print path_to_theme().'/images/patient_login.jpg' ?>" width="99" height="24" title="Patient Login" alt="Patient Login" /></a>
				</div>
			</div>
		</div>
	</header>
	<!-- MAIN MENU -->
	<nav id="nav" class="row">
		<div id="menu_wrapper" class="desktop_12 portrait_t_6 menu_mobile_2"><?php print render($page['menu']) ?></div>
		<!-- HIDDEN MENU BUTTON -->
		<div id="hidden_menu_button" class="portrait_t_2 menu_mobile_2 hide_desktop hide_table_land"><img src="<?php print path_to_theme().'/images/menu_word.png' ?>" title="Menu" alt="Menu" /></div>
		<!-- HIDDEN MENU -->
		<div id="hidden_menu" class="menu_mobile_4 portrait_t_2 hide_desktop hide_table_land"><?php print render($page['hidden_menu']) ?></div>
	</nav>
</div>
<!-- MAIN CONTENT -->
<section id="main_content">
<?php
	include($template);
?>
</section>
<!-- FOOTER -->
<footer id="footer">
	<div id="footer_shadow"></div>
	<div id="footer_wrapper">
		<div id="footer_info">
			<div id="footer_imgs"><?php print $footer_imgs ?></div>
			<div id="footer_text"><?php print $footer_text ?></div>
		</div>
	</div>
</footer>