<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package idea_theorem
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'idea-theorem' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$idea_theorem_description = get_bloginfo( 'description', 'display' );
			if ( $idea_theorem_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $idea_theorem_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '|||', 'sagar-roy-test' ); ?></button>
			<?php
			 $show_button = get_theme_mod( 'show_menu_button', true );
			 $button_html = '';
			 if ( $show_button ) {
					 $button_html = '<li><a href="'.  get_theme_mod('button_url').'" class="menu-button">'.get_theme_mod('button_text').'</a></li>';
			 }
	 
			 wp_nav_menu( array(
					 'theme_location' => 'menu-1',
					 'menu_id'        => 'primary-menu',
					 'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s' . $button_html . '</ul>',
			 ) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
