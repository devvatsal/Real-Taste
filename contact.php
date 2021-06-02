<?php
/* Template Name: Contact */
get_header();
?>

<!-- /breadcrumb - start -->
<?php if( get_field('breadcrumb_image') ):?>
      <section class="breadcrumb" style="background-image: url(<?php the_field('breadcrumb_image'); ?>);">
         <div class="container-fluid">
            <?php if( get_field('breadcrumb_title') ):?>
            <div class="breadcrumb-title" data-aos="fade-up">
               <h2><?php the_field('breadcrumb_title'); ?></h2>
            </div>
         <?php endif; ?>
         </div>
      </section>
   <?php endif; ?>
      <!-- /breadcrumb - end -->



      <!-- contact -->
      <section class="contact">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="content pl-0 pl-lg-4 pt-4 pt-lg-0">
                     <?php if( get_field('section1_title') ):?>
                     <div class="title" data-aos="fade-up">
                        <?php the_field('section1_title'); ?>
                     </div>
                  <?php endif; ?>
                     <div class="text">
                        <?php if( get_field('address') ):?>
                        <div class="add" data-aos="fade-up">
                           <!-- <h4>Manufactured & Marketed By :</h4> -->
                           <?php the_field('address'); ?>
                           <?php
                            $link = get_field('location_button');
                              if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                 <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $link_title; ?></a>
                              <?php endif; ?>
                        </div>
                     <?php endif ?>
                     <?php if( get_field('contact_details') ):?>
                        <div class="text-2" data-aos="fade-up">
                           <?php the_field('contact_details'); ?>
                        </div>
                     <?php endif; ?>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="form">
                    <div class="title text-center pb-4" data-aos="zoom-in">
                      <h3><?php the_field('form_title'); ?></h3>
                    </div>
                    <?php echo do_shortcode(get_field('contact_form_shorcode')); ?>
                  </div>
                  </div>
               <div class="col-lg-12 pt-4">
                  <div class="map">
                     <div class="map text-center">
                        <iframe src="<?php the_field('map_iframe'); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact -->

<?php 
get_footer();
?>