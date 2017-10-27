<footer class="page-footer red">
    <div class="container">
        <div class="row">
            <div class="col l3 s12">
                <h6 class="white-text"><a  class ="brand-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h6>
                <p class="grey-text text-lighten-4"><?php bloginfo( 'description' ); ?></p>
            </div>
            <div class="col l3 s12">
                <h6 class="white-text">Blog Posts</h6>
                
            </div>
            <div class="col l3 s12">
                <h6 class="white-text">About(Us)</h6>
               
<!--                <a class="btn" href="http://iscrizione.gateofeternity.com">Iscriviti</a>-->
            </div>
            <div class="col l3 s12" id="socialinks">
                <h6 class="white-text"><i class="mdi-social-public"></i>External Links</h6>               
                <?php wp_nav_menu(array('theme_location' => 'footer_menu', 'container_class' => 'footerlink')); ?>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <p>©Copyright<i class="icon-groana"></i><span class="morphfont"> <?php bloginfo( 'name' ); ?></span> 2017 - All rights reserved</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>