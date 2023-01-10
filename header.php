<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styleheader.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylesecondaire.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styleespacepersonnel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylecategoriesdarts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/stylepagederecherche.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styleconnexioninscription.css">
    <link rel="stylesheet" href="https://use.typekit.net/opr3llo.css">
    <link rel="stylesheet" href="https://use.typekit.net/gaj8qct.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header border-1 border-top border-bottom">
<a class="pictomenu" href="<?php echo home_url('/'); ?>">
      <img class="pictomenu" src="<?php echo get_template_directory_uri(); ?>/assets/img/pictomenu.png" alt="Pictomenu">
</a>
<a class="logo" href="<?php echo home_url('/'); ?>">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logoepic.png" alt="Logo">
</a>
<a class="pictoespacep" href="<?php echo home_url() . '/connexion-inscription/'; ?>">
      <img class="pictoespacep" src="<?php echo get_template_directory_uri(); ?>/assets/img/pictoespacep.png" alt="Espacep">
    </a>  
  </header>
    
    <?php wp_body_open(); ?>