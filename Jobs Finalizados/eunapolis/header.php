<!DOCTYPE html>
<html lang="pt-br">

<head>
  	<?php $home = get_template_directory_uri(); ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Prefeitura Municipal de Eunapolis</title>

    <!-- Bootstrap -->
    <link href="<?= $home ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?= $home ?>/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $home ?>/style.css">



    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php	wp_head(); ?>
</head>

<body>
        <!-- LOGO E PESQUISA -->
    <header>
        <div class="container">
            <div class="col-md-6 logo">
                <a href="<?=home_url();?>">
                  <img src="<?=$home?>/assets/images/logo_pme.png" class="img-responsive" alt="Logo Eunápolis" />
                </a>
            </div>
            <div class="col-md-6 pesquisar">
              <?php get_search_form();?>
            </div>
          </div>
    </header>

      <!-- MENU -->
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <?php
              $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'bs-example-navbar-collapse-1',
                'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
                'walker' => new menu_principal_walker()
              );
              wp_nav_menu( $args );
            ?>
          </div><!-- /.container -->
        </nav>
      </div>
