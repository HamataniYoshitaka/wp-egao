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
	<script src="<?php bloginfo('template_directory')?>/compass/javascripts/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="<? bloginfo('template_directory') ?>/compass/javascripts/bootstrap.min.js" type="text/javascript"></script>

	<link rel="stylesheet" href="<? bloginfo('template_directory') ?>/compass/fonts/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<? bloginfo('template_directory') ?>/compass/fonts/icomoon/style.css">
	<script src="<? bloginfo('template_directory') ?>/compass/javascripts/scroll.js" type="text/javascript"></script>

<?php if (is_home() || is_front_page()) : ?>
	<script src="<?php bloginfo('template_directory') ?>/compass/javascripts/nested/jquery.nested.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_directory') ?>/compass/javascripts/nested/makeboxes.js" type="text/javascript"></script>
<?php endif; ?>

<?php
if (!is_404()) :
	if (get_page(get_the_ID())->post_name == 'introduction') :
?>
	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory') ?>/compass/javascripts/slick/slick/slick.css">
	<script type="text/javascript" src="<? bloginfo('template_directory') ?>/compass/javascripts/slick/slick/slick.min.js"></script>
<?php
	endif;
endif;
?>

	<!-- /.drawer -->
	<link rel="stylesheet" type="text/css" href="<? bloginfo('template_directory') ?>/compass/javascripts/bootstrap-drawer/dist/css/bootstrap-drawer.css">
	<script type="text/javascript" src="<? bloginfo('template_directory') ?>/compass/javascripts/bootstrap-drawer/dist/js/drawer.min.js"></script>

	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/compass/stylesheets/styles.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class('has-drawer'); ?>>
