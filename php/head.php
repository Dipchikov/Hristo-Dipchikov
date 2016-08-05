<?php
	Theme::charset('utf-8');
	Theme::viewport('width=device-width, initial-scale=1');

	Theme::title();
	Theme::description();

	Theme::favicon('favicon.png');
?>

<!--[if lte IE 8]><script src="<?php echo HTML_PATH_THEME ?>assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/main.css">
<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/ie8.css" /><![endif]-->
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/bludit.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/normalize.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/page.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/plugins.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/post.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/css/rainbow.css">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/js/core.js">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/js/plugins.js">
<link rel="stylesheet" href="<?php echo HTML_PATH_THEME ?>assets/js/rainbow-custom.min.js">
<?php

// Add local Fonts Awesome
Theme::fontAwesome();

// Plugins for head
Theme::plugins('siteHead');

?>