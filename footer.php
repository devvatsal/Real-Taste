<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real-taste
 */

?>

	<!-- /footer - start -->
    <footer class="footer">
       <div class="container">
          <div class="row row-eq-height align-items-center">
             <div class="col-lg-8 order-3 order-lg-2">
                <div class="copyright text-lg-left text-center">
                   <?php the_field('footer_text', 'option'); ?>
                </div>
             </div>
             <div class="col-lg-4 order-2 order-lg-3 text-lg-right text-center">
                <ul class="social-media">
                  <?php
                     if( have_rows('social_option','option') ):
                         while( have_rows('social_option','option') ) : the_row();
                             $title = get_sub_field('title');
                             $social_link = get_sub_field('social_link');
                             ?>
                             <li>
                               <a href="<?php echo $social_link; ?>"><i class="<?php echo $title; ?>"></i></a>
                            </li>
                             <?php
                         endwhile;
                     endif;
                  ?>
                </ul>
             </div>
             <!--col end -->
          </div>
          <!-- row end -->
       </div>
    </footer>
    <!-- /footer - end -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
