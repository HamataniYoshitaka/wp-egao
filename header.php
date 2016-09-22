<?php
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title('|', true, 'right'); bloginfo('name');?></title>

	<!-- Google fonts -->
	<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:700|Roboto+Condensed' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/compass/stylesheets/styles.css">
	<script src="<?php bloginfo('template_directory')?>/compass/javascripts/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="<? bloginfo('template_directory') ?>/compass/javascripts/bootstrap.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="<? bloginfo('template_directory') ?>/compass/fonts/font-awesome/css/font-awesome.min.css">

<? if (is_home() || is_front_page()) : ?>
	<script src="<? bloginfo('template_directory') ?>/compass/javascripts/nested/jquery.nested.js" type="text/javascript"></script>
	<script src="<? bloginfo('template_directory') ?>/compass/javascripts/nested/makeboxes.js" type="text/javascript"></script>
<? endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
