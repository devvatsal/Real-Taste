<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real-taste
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">  

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-- /header - start -->
    <header class="header">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php the_field('header_logo', 'option'); ?>" alt="Logo"></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="#navbarNav" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            	<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'navbar-nav ml-auto',
				        'container' => 'ul',
				        'container_class' => 'navbar-nav ml-auto',
					)
				);
				?>
          </div>
        </nav>
      </div>
    </header>
    <!-- /header - end -->
