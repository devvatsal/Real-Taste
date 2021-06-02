<?php
/* Template Name: Menu */
get_header();
?>

<!-- /breadcrumb - start -->
    <?php if( get_field('breadcrumb_image') ):?>
      <section class="breadcrumb" style="background-image: url(<?php the_field('breadcrumb_image'); ?>);">
         <div class="container-fluid">
          <?php if( get_field('breadcrumb_image') ):?>
            <div class="breadcrumb-title" data-aos="fade-up">
               <h2>Menu</h2>
            </div>
          <?php endif; ?>
         </div>
      </section>
    <?php endif; ?>
      <!-- /breadcrumb - end -->



      <!-- /menu - start -->
      <section class="menu">
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-4">
              <?php if( get_field('section2_image') ):?>
               <div class="image">
                 <img src="<?php the_field('section2_image'); ?>" class="img-fluid" data-aos="fade-up">
               </div>
             <?php endif; ?>
             </div>
             <div class="col-lg-8">
               <div class="menu-list">
                <?php if( get_field('section2_title') ):?>
                 <div class="title">
                   <?php the_field('section2_title'); ?>
                 </div>
               <?php endif; ?>
                 <div class="row m-items">
                   <?php
                    if( have_rows('menu_item') ):
                        while( have_rows('menu_item') ) : the_row();
                          $menu_category_name = get_sub_field('menu_category_name');
                          ?>
                          <div class="col-lg-6">
                          <h4><?php echo $menu_category_name; ?></h4>
                          <ul>
                            <?php
                              if( have_rows('add_menu_items') ):
                                  while( have_rows('add_menu_items') ) : the_row();
                                      $item_title = get_sub_field('item_title');
                                      $item_price = get_sub_field('item_price');
                                      $item_description = get_sub_field('item_description');
                                      ?>
                                      <li>
                                        <div class="itemRight">
                                           <div class="itemMain">
                                              <h4 class="itemTitle" itemprop="headline"><?php echo $item_title ?></h4>
                                              <div class="dottedSeparator"> </div>
                                              <div class="itemPrice"><?php echo $item_price; ?></div>
                                           </div>
                                           <div class="itemDesc"><?php echo $item_description ?>
                                           </div>
                                        </div>
                                      </li>
                                      <?php
                                  endwhile;
                              endif;
                            ?>
                          </ul>
                          </div>
                          <?php
                        endwhile;
                    endif;
                  ?>
                 </div>
               </div>
             </div>
           </div>

           <div class="row mt-5">
             <div class="col-lg-8">
               <div class="menu-list">
                <?php if( get_field('section3_title') ):?>
                 <div class="title text-right">
                    <?php the_field('section3_title'); ?>
                 </div>
               <?php endif; ?>
                 <div class="row m-items">
                   <?php
                    if( have_rows('menu1_items') ):
                        while( have_rows('menu1_items') ) : the_row();
                          $menu1_category_name = get_sub_field('menu1_category_name');
                          ?>
                          <div class="col-lg-6">
                          <h4><?php echo $menu1_category_name; ?></h4>
                          <ul>
                            <?php
                              if( have_rows('add_menu1_items') ):
                                  while( have_rows('add_menu1_items') ) : the_row();
                                      $item_title = get_sub_field('item_title');
                                      $item_price = get_sub_field('item_price');
                                      $item_description = get_sub_field('item_description');
                                      ?>
                                      <li>
                                        <div class="itemRight">
                                           <div class="itemMain">
                                              <h4 class="itemTitle" itemprop="headline"><?php echo $item_title ?></h4>
                                              <div class="dottedSeparator"> </div>
                                              <div class="itemPrice"><?php echo $item_price; ?></div>
                                           </div>
                                           <div class="itemDesc"><?php echo $item_description ?>
                                           </div>
                                        </div>
                                      </li>
                                      <?php
                                  endwhile;
                              endif;
                            ?>
                          </ul>
                          </div>
                          <?php
                        endwhile;
                    endif;
                  ?>
                 </div>
               </div>
             </div>

             <div class="col-lg-4">
              <?php if( get_field('section3_image') ):?>
               <div class="image">
                 <img src="<?php the_field('section3_image'); ?>" class="img-fluid" data-aos="fade-up">
               </div>
             <?php endif; ?>
             </div>
           </div>
         </div>
      </section>
       <!-- /menu - end -->


       <!-- products - start -->
       <section class="products left-asset">
         <div class="container">
           <div class="row align-items-center">
             <div class="col-lg-3">
              <?php if( get_field('section4_title') ):?>
               <div class="title" data-aos="fade-up">
                 <?php the_field('section4_title'); ?>
               </div>
             <?php endif; ?>
             </div>
             <div class="col-lg-9">
               <div class="owl-carousel" id="product-carousel">
                 <?php
                if( have_rows('section4_gallary') ):
                    while( have_rows('section4_gallary') ) : the_row();
                        $gallary_image = get_sub_field('gallary_image');
                        $gallary_title = get_sub_field('gallary_title');
                        ?>
                        <div class="item">
                            <img src="<?php echo $gallary_image; ?>" class="img-fluid">
                            <div class="overlay-text">
                              <span><?php echo $gallary_title; ?></span>
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