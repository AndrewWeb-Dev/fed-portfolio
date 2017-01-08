<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="A Front End Developer with a passion for interactive development. Let's build something wonderful.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="fixedHead">
    <div class="overlay">
      <div class="container headerContainer">
        <div class="headerContent animated fadeInDown">  
          <?php wp_nav_menu( array(
              'container' => true,
              'theme_location' => 'social'
            )); ?>
          <h1>
            <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            Andrew Thompson<span class="devMan">Front End Developer</span>
            </a>
          </h1>
          <a class="hireButton" href="#!">Read My Latest Post</a><br>
          <div class="iconBox animated bounce infinite">
            <a class="iconContainer" href="#Hello"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
          </div>
        </div>
      </div><!-- /.container -->
        <i class="fa fa-bars animated fadeInRight" aria-hidden="true"></i>
        <i class="fa fa-times-circle" aria-hidden="true"></i>
        <div class="nav">
          <div class="container">
            <div class="navFlexer">
              <?php wp_nav_menu( array(
                'container' => true,
                'theme_location' => 'primary'
              )); ?>
              <?php wp_nav_menu( array(
                'container' => true,
                'theme_location' => 'secondary'
              )); ?>
            </div>
        </div><!-- /.container -->
      </div> <!-- /.nav -->
      <div class="fixedNav">
          <div class="container">
            <div class="navFlexer">
              <p class="initials">AT<span class='orangeDot'>.</span></p>
              <div class="navBox">
                <?php wp_nav_menu( array(
                  'container' => true,
                  'theme_location' => 'primary'
                )); ?>
                <?php wp_nav_menu( array(
                  'container' => true,
                  'theme_location' => 'secondary'
                )); ?>
              </div>
            </div>
        </div><!-- /.container -->
      </div>
    </div><!--/.Overlay-->
  </div><!--/.fixedHead-->
</header><!--/.header-->

