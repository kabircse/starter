<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter_blue
 */

?>

    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
    <footer>
        <div class="container">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-sm-6">
                  <?php if(is_dynamic_sidebar('footer-1'))?>
                  <?php dynamic_sidebar('footer-1') ?>
                </div>
                <div class="col-sm-6">
                  <?php if(is_dynamic_sidebar('footer-2'))?>
                  <?php dynamic_sidebar('footer-2') ?>
              </div>
            </div>
              <div class="row">
                <p class="pull-xs-right"><a href="#">Back to top</a></p>
                <p><?php _e( 'Copyright &copy; 2016 &middot; All Rights Reserved &middot','starter-blue');?> <a href="#"><?php bloginfo('name')?></a></p>
              </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.container -->
    </footer>
    <!-- /FOOTER -->

  <?php wp_footer(); ?>
</body>
</html>
