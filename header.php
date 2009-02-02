<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" type="text/css" media="print" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body>
<div id="page">
<div id="header">
	<div id="headertitle">
		<h1><a href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>: <?php bloginfo('description') ?>"><?php bloginfo('name') ?></a></h1>
		<p><?php bloginfo('description') ?></p>
	</div> 
	<!-- Search box (If you prefer having search form as a sidebar widget, remove this block) -->
	<div class="search">
		<?php  include (TEMPLATEPATH . "/searchform.php"); ?>
	</div> 
	<!-- Search ends here-->
		
</div>

<div id="navbar">
<ul id="nav">
	<li><a href="<?php echo get_settings('home'); ?>"><?php _e('Home') ?></a></li>
	<?php wp_list_pages('title_li=&depth=2&sort_column=menu_order') ?>
</ul>
</div>
<div id="wrapper">
