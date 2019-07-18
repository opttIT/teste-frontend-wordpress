<footer>
<section class="logo col-md-2 col-12 text-center">
                        <?php the_custom_logo(); ?>
</section>

<div class="container">
                <div class="row">
                    <div class="copyright col-sm-7 col-4">
                    <p><?php echo get_theme_mod( 'set_copyright' ); ?></p>
                    </div>
                    <nav class="footer-menu col-sm-5 col-8 text-right">
                        <?php wp_nav_menu( 
                            array( 
                                'theme_location' =>  'footer_menu' ) ); 
                        ?>
                    </nav>
                </div>
            </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>