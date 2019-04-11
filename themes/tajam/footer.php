
		</div>

		<footer class="footer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/bg_f.png')">
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-row">
                        <div class="footer-col">
                            <?php $logo_image = esc_url( get_theme_mod( 'logo_image' ) ); ?>
                            <?php if(!empty($logo_image)) : ?>
                                <a href="#" class="footer__logo">
                                    <img src="<?php echo $logo_image ?>" alt="logo">
                                </a>
                            <?php endif; ?>
                            <div class="footer__text">
                                <?php echo get_theme_mod( 'footer_text' ); ?>
                            </div>
                        </div>
                        <div class="footer-col">
                            <h3 class="footer__title">Our studio</h3>
                            <div class="footer__location">
                                <span class="footer-icon" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/loc.png')"></span> <?php echo get_theme_mod('footer_location'); ?>
                            </div>
                            <?php $tel = get_theme_mod( 'footer_tel' ); ?>
                            <a class="footer__phone" href="tel:+<?php echo str_replace([' ', '+', '-', '(', ')', '.'], '', $tel); ?>">
                               <span class="footer-icon" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/phone.png')"></span> <?php echo $tel; ?>
                            </a>
                        </div>
                        <div class="footer-col">
                            <h3 class="footer__title">Stay in Touch</h3>
                            <form class="footer__form">
                                <input type="email" placeholder="Subscribe our newsletter">
                                <input type="submit" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/letter.png ?>')">
                            </form>
                            <div class="footer-social">
                                <a href="<?php echo get_theme_mod( 'footer_social_facebook' ); ?>" class="facebook"></a>
                                <a href="<?php echo get_theme_mod( 'footer_social_twitter' ); ?>" class="twitter"></a>
                                <a href="<?php echo get_theme_mod( 'footer_social_dribbble' ); ?>" class="dribbble"></a>
                                <a href="<?php echo get_theme_mod( 'footer_social_instagram' ); ?>" class="instagram"></a>
                                <a href="<?php echo get_theme_mod( 'footer_social_google' ); ?>" class="google"></a>
                                <a href="<?php echo get_theme_mod( 'footer_social_youtube' ); ?>" class="youtube"></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-row">
                        <div class="footer-col">
                            <nav class="footer__menu">
                                <?php wp_nav_menu(array(
                                    'theme_location' => 'footer',
                                    'menu'           => '',
                                    'menu_class'     => '',
                                    'container'      => ''
                                )); ?>
                            </nav>
                        </div>
                        <div class="footer-col">
                            <div class="footer__copyright">
                                Copyright © <?php echo currentYear(); ?> - Tajem Creative
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</footer>
        <?php get_template_part( 'social_style' );  ?>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
