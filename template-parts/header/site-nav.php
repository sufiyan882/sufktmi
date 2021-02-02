<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="navbar navbar-expand-md navbar-light" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
		<a class="navbar-brand" href="<?php echo site_url(); ?>">
			<img src="<?php the_field('logo_image', 'option'); ?>" class="img-fluid" alt="logo">
		</a>
		<a class="mob-logo" href="<?php echo site_url(); ?>">
			<img src="<?php the_field('mobile_logo', 'option'); ?>" class="img-fluid" alt="logo">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper navbar-nav',
				'container_class' => 'primary-menu-container collapse navbar-collapse',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'add_li_class'  => 'nav-item',
				'fallback_cb'     => false,
				'container_id' => 'collapsibleNavbar',
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>
