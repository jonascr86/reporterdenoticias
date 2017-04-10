<footer>
    <div class="footer-wrapper">
        <div class="container">
            <div class="row">
                <div id="bottom1" class="col-sm-6 col-md-3">
                    <div id="logo" class="footer-logo"></div>
                    <!--<p class="footer-logo" id="logo"><img src="<?php // echo get_template_directory_uri(); ?>/img/bottom-logo.png" alt="logo"></p>-->
                    <p class="footer-info"><?php echo get_bloginfo('description'); ?></p>
                    <div class="footer-contact">
                        <p>
                            <span>Email:</span>
                            <?php echo get_option('admin_email'); ?>
                        </p>
                    </div>
                </div> <!-- //bottom1 -->

                <div id="bottom2" class="col-sm-6 col-md-3">
                    <div class="menu-rodape">
                        <h3 class="title">Acesse</h3>
                        <?php
                            $params = ['menu_class' => 'megamenu-parent', 'theme-location' => 'rodape', 'menu' => 'Menu Rodapé'];
                            getMenu($params);
                        ?>
                    </div>
                </div> <!-- //bottom2 -->

                <div id="bottom4" class="col-sm-6 col-md-3">
                    <div class="social-wrapper">
                        <h3 class="title">Redes Sociais</h3>
                        <ul class="social-icons">
                            <li><a target="_blank" href="https://www.facebook.com/reporterdenoticias/"><i class="fa fa-facebook"></i> Facebook</a></li>
                        </ul>
                    </div>
                </div> <!-- //bottom4 -->
            </div> <!-- //row -->
        </div>  <!-- //container -->
    </div> <!-- //footer-wrapper --> 

    <div class="copyright-wrapper">
        <div class="container">
        </div> <!-- //container -->
    </div> <!-- //copyright-wrapper -->
</footer>

<!--====  End of FOOTER  ====-->

<!-- Offcanvas Start-->
<div class="offcanvas-overlay"></div>
<div class="offcanvas-menu visible-sm visible-xs">
    <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
    <div class="offcanvas-inner">
        <ul>
            <?php 
                $params = ['menu_class' => 'megamenu-parent'];
                getMenu($params);
            ?>
        </ul>
    </div>
</div>
<!-- end Offcanvas -->
</div>
<?php wp_footer(); ?>
</body>
</html>