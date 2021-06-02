<?php
/* Template Name: About */
get_header();
?>

 <!-- /breadcrumb - start -->
      <?php if( get_field('breadcrumb_image') ):?>
      <section class="breadcrumb" style="background-image: url(<?php the_field('breadcrumb_image'); ?>);">
         <?php if( get_field('breadcrumb_title') ):?>
         <div class="container-fluid">
            <div class="breadcrumb-title" data-aos="fade-up">
               <h2><?php the_field('breadcrumb_title'); ?></h2>
            </div>
         </div>
      <?php endif; ?>
      </section>
   <?php endif; ?>
      <!-- /breadcrumb - end -->



      <!-- /img-content - start -->
      <section class="img-content about">
         <div class="container-fluid">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="two-img">
                     <?php if( get_field('first_image') ):?>
                     <div class="img1">
                        <img src="<?php the_field('first_image'); ?>" alt="Read Our Blog">
                     </div>
                     <?php endif; ?>
                     <?php if( get_field('second_image') ):?>
                     <div class="img2">
                        <img src="<?php the_field('second_image'); ?>" alt="Special Offers">
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="content">
                     <?php if( get_field('section2_title') ):?>
                     <div class="title mb-4">
                        <?php the_field('section2_title'); ?>
                     </div>
                     <?php endif; ?>
                     <?php if( get_field('section2_description') ):?>
                     <!--  <b>real flavours of joy</b> -->
                     <?php the_field('section2_description'); ?>
                     <?php endif; ?>
                     <?php if( get_field('left_line_text') ):?>
                     <div class="left-line"  data-aos="fade-up">
                        <div class="red-line">
                           <span class="line-name"><?php the_field('left_line_text'); ?></span>
                        </div>
                     </div>
                     <?php endif; ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- /img-content - end -->



      <!-- /background-image - start -->
      <?php if( get_field('section3_image') ):?>
      <section class="background-image" style="background-image: url(<?php the_field('section3_image') ?>);">
         <div class="container-fluid">
            <div class="content text-center">
               <?php if( get_field('section3_title') ):?>
               <div class="title pb-5" data-aos="fade-up">
                  <?php the_field('section3_title'); ?>
               </div>
               <?php endif; ?>
               <?php if( get_field('section3_description') ):?>
               <div class="text" data-aos="fade-up">
                 <?php the_field('section3_description'); ?>
               </div>
            <?php endif; ?>
            </div>
         </div>
      </section>
      <?php endif; ?>
      <!-- /background-image - end -->



      <!-- /content-img - start -->
      <section class="content-img about">
         <div class="container">
            <div class="row align-items-center">
               <?php if( get_field('left_image') ):?>
               <div class="col-lg-6">
                  <div class="image">
                     <img src="<?php the_field('left_image'); ?>" alt="Read Our Blog">
                  </div>
               </div>
            <?php endif; ?>
               <div class="col-lg-6">
                  <div class="content text-center" data-aos="fade-up">
                     <?php if( get_field('left_title') ):?>
                     <div class="title mb-4">
                        <?php the_field('left_title'); ?>
                     </div>
                     <?php endif ?>
                     <?php if( get_field('left_description') ):?>
                     <!--  <b>real flavours of joy</b> -->
                     <?php the_field('left_description'); ?>
                  <?php endif; ?>
                  </div>
               </div>
            </div>
            <div class="row align-items-center mt-3">
               <div class="col-lg-6">
                  <div class="content text-center" data-aos="fade-up">
                     <?php if( get_field('right_title') ):?>
                     <div class="title mb-4">
                        <?php the_field('right_title'); ?>
                     </div>
                  <?php endif; ?>
                  <?php if( get_field('right_description') ):?>
                     <!--  <b>real flavours of joy</b> -->
                     <?php the_field('right_description'); ?>
                  <?php endif; ?>
                  </div>
               </div>
               <?php if( get_field('right_image') ):?>
               <div class="col-lg-6">
                  <div class="image">
                     <img src="<?php the_field('right_image'); ?>" alt="Read Our Blog">
                  </div>
               </div>
            <?php endif; ?>
            </div>
         </div>
      </section>
      <!-- /content-img - end -->



      <!-- products - start -->
      <section class="products left-asset">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3">
                  <div class="title" data-aos="fade-up">
                     <h3>our</h3>
                     <h2>speciality</h2>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="owl-carousel" id="product-carousel">
                     <?php
                        if( have_rows('section4_gallary') ):
                            while( have_rows('section4_gallary') ) : the_row();
                                $item_image = get_sub_field('item_image');
                                $item_name = get_sub_field('item_name');
                                ?>
                                <div class="item">
                                    <img src="<?php echo $item_image; ?>" class="img-fluid">
                                    <div class="overlay-text">
                                       <span><?php echo $item_name; ?></span>
                                    </div>
                                 </div>
                                <?php
                            endwhile;
                        endif;
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- products - end -->

<?php
get_footer();
?>