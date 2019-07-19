<footer>
    <section class="logo col-md-12 text-center">
        <?php the_custom_logo(); ?>
    </section>

    <div class="container">
        <div class="row">
            <nav class="footer-menu col-md-12 text-center">
                <?php wp_nav_menu(
                    array(
                        'theme_location' =>  'footer_menu'
                    )
                );
                ?>
            </nav>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="social-network col-md-12 text-center">
                <?php

                if (is_active_sidebar('social-media')) {
                    dynamic_sidebar('social-media');
                }

                ?>
            </div>
        </div>
        </div>
        <section class="scopyright">
                <div class="copyright col-md-12">
                    <p><?php echo get_theme_mod('set_copyright'); ?></p>
                </div>
        </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>