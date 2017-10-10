<section id="recall" class="page-section dark-blue">
    <?php dynamic_sidebar('Recall'); ?>
</section>
<?php wpbp_footer_before(); ?>
<footer id="footer" role="contentinfo">
    <?php wpbp_footer_inside_before(); ?>
    <section class="footer-section slim">
        <div class="<?php wpbp_container_class(); ?>">
            <div class="grid_9 mobile-center">
                <nav id="footer-nav">
                    <?php wp_nav_menu(array( 'theme_location' => 'secondary_navigation' )); ?>
                    <div class="clear"></div>
                </nav>
            </div>
            <div class="grid_3 text-right mobile-center">
                <a href="https://www.facebook.com/pages/OptimumWeb/139669046107427" target="_blank"><img src="<?php echo TEMPLATE_URI; ?>/img/social_icons/vector/24px/facebook.png" width="24" height="24" alt="Facebook" /></a>
                <a href="https://plus.google.com/u/0/b/103970714736747408716/103970714736747408716/about" rel="publisher" target="_blank"><img src="<?php echo TEMPLATE_URI; ?>/img/social_icons/vector/24px/google-plus.png" width="24" height="24" alt="Google+" /></a>
                <a href="https://www.twitter.com/Optimum_Web" target="_blank"><img src="<?php echo TEMPLATE_URI; ?>/img/social_icons/vector/24px/twitter.png" width="24" height="24" alt="Twitter" /></a>
            </div>
        </div>
    </section>
    <?php wpbp_footer_inside_after(); ?>
</footer>
<?php wpbp_footer_after(); ?>
</div>

<?php wp_footer(); ?>
<?php wpbp_footer(); ?>

</body>
</html>
<?php wpbp_after_html(); ?>