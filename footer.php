<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

?>

<?php wp_footer(); ?>
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p class="pull-xs-right"><a href="#">Back to top</a></p>
                <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /FOOTER -->

    <!--Script-->
    <!-- jQuery local files, if remote not found -->
    <script>
        window.jQuery || document.write('<script src="<?php bloginfo('template_directory');?>/assets/js/jquery.min.js"><\/script>')
    </script>
    <!-- Jquery remote files -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- Tether for Bootstrap -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <!-- Bootstrap Script -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php bloginfo('template_directory');?>/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/modernizr.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/js/custom.js"></script>
    <script src="<?php bloginfo('template_directory');?>/assets/lib/slider/slider.js"></script>
    <!--Font Script For Typekit-->
    <script src="//use.typekit.net/ckt3tvt.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

</body>
</html>
