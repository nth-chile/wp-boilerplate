<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">

  <title><?php wp_title(); ?></title>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>