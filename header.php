<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="nav globalNav">
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
  </div> <!-- /.nav -->
</header><!--/.header-->

