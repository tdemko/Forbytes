<footer id="footer">
    <div class="container">
        <div class="row first-row">
            <div class="col-xs-12">
                <div class="logo clearfix">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/app/common/logo_monochrome.svg" alt="fortbytes" />
                        <h1>Forbytes</h1>
                    </a>
                </div>
                <ul class="clearfix social">
                    <li class="facebook">
                        <a class="icon-socialfacebook" href="https://www.facebook.com/forbytesab" target="_blank"></a>
                    </li>
                    <li class="linkedin">
                        <a class="icon-sociallinkedin" href="https://www.linkedin.com/company/forbytes" target="_blank"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row second-row">
            <div class="col-xs-12">
                <div class="copyright-top">
                    &copy; 2015 Forbytes. All rights reserved.
                </div>
                <nav class="clearfix">
                     <ul class="clearfix links">
                       <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
                    </ul>
                    <ul class="clearfix social">
                        <li class="facebook">
                            <a class="icon-socialfacebook" href="https://www.facebook.com/forbytesab" target="_blank"></a>
                        </li>
                        <li class="linkedin">
                            <a class="icon-sociallinkedin" href="https://www.linkedin.com/company/forbytes" target="_blank"></a>
                        </li>
                    </ul>
                </nav>  
                <div class="clearfix"></div>
                 <div class="copyright-bottom">
                    &copy; 2015 Forbytes. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<!--<script defer src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.2.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.scrollTo.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.fullPage.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/plugins.min.js"></script>
<script defer src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>-->

