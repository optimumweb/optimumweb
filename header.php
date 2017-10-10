<?php get_template_part('head'); ?>
<?php wpbp_wrap_before(); ?>
	<div id="wrap" role="document">
        <section id="top" class="page-section slim green">
            <?php dynamic_sidebar('Top'); ?>
        </section>
        <?php wpbp_header_before(); ?>
        <header id="header" role="banner">
            <?php wpbp_header_inside_before(); ?>
            <div class="<?php wpbp_container_class(); ?> relative">
                <div class="grid_4 mobile-center">
                    <a id="logo" href="<?php echo home_url(); ?>">
                        <img src="<?php echo THEME_URI . '/img/logo.png'; ?>" width="300" height="75" alt="<?php bloginfo('name'); ?>" />
                    </a>
                </div>
                <div class="grid_8 mobile-center">
                    <nav id="main-nav" role="navigation">
                        <?php wp_nav_menu(array( 'theme_location' => 'primary_navigation', 'menu_id' => 'main-menu' )); ?>
                        <div class="clear"></div>
                    </nav>
                </div>
                <a id="toggle-top" class="toggle" href="#top">+</a>
            </div>
            <?php wpbp_header_inside_after(); ?>
        </header>
		<?php wpbp_header_after(); ?>
