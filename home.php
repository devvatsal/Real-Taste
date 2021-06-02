<?php
/* Template Name: home */
get_header();
?>
    <!-- /banner - start -->
    <section class="banner">
      <div class="owl-carousel" id="banner-carousel">
        <?php
          if( have_rows('banner') ):
              while( have_rows('banner') ) : the_row();
                $banner_image = get_sub_field('banner_image');
                $banner_content = get_sub_field('banner_content');
                ?>
                <div class="item">
                  <div class="banner-image" style="background-image: url(<?php echo $banner_image; ?>);">
                    <div class="banner-content" data-aos="fade-up">
                      <?php echo $banner_content; ?>
                    </div>
                  </div>
                </div>
                <?php
              endwhile;
          endif;
        ?>
      </div>
      <svg class="blurp--top" width="192" height="61" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="currentColor" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
    <div class="down-arrow down-arrow--bubble"><div class="arrow"></div></div>
    </section>

    <!-- /banner - end -->


    <!-- /img-content - start -->
    <section class="img-content" id="about-us">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="two-img">
              <?php if( get_field('image_1') ):?>
               <div class="img1">
                  <img src="<?php the_field('image_1'); ?>" alt="Read Our Blog">
               </div>
              <?php endif; ?>
              <?php if( get_field('image_2') ):?>
               <div class="img2">
                  <img src="<?php the_field('image_2'); ?>" alt="Special Offers">
               </div>
              <?php endif; ?>
            </div>    
          </div>

          <div class="col-lg-6">
            <div class="content">
              <?php if( get_field('section2_heading') ):?>
              <div class="title mb-4">
                <?php the_field('section2_heading');?>
              </div>
            <?php endif; ?>
             <!--  <b>real flavours of joy</b> -->
              <?php the_field('section2_description'); ?>
              <div class="left-line"  data-aos="fade-up">
              <?php
                $link = get_field('left_line_button');
                  if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" class="red-line" target="<?php echo esc_attr( $link_target ); ?>" itemprop="url">
                  <span class="line-name"><?php echo $link_title; ?></span>
                    </a>
                  <?php endif; ?>
              </div>
            </div>            
          </div>
          
          
        </div>        
      </div>
      </div>
    </section>
    <!-- /img-content - end -->


    <!-- /full-img - start -->
    <section class="full-img bg-black">
      <div class="container-fluid p-0">
        <div class="row m-0">
          <div class="col-lg-6 p-0 d-flex align-items-center">
            <div class="content">
              <?php if( get_field('section3_title') ):?>
                <div class="title">
                  <?php the_field('section3_title'); ?>
                </div>
              <?php endif; ?>
              <?php if( get_field('section3_description') ):?>
              <div class="list">
                <?php the_field('section3_description'); ?>
              </div>
            <?php endif; ?>
              <div class="left-line white" data-aos="fade-up">
                 <?php
                $link_buttn = get_field('left_line_white_button');
                  if( $link_buttn ): 
                    $link_buttn_url = $link_buttn['url'];
                    $link_buttn_title = $link_buttn['title'];
                    $link_buttn_target = $link_buttn['target'] ? $link_buttn['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_buttn_url ); ?>" class="red-line" target="<?php echo esc_attr( $link_buttn_target ); ?>" itemprop="url">
                  <span class="line-name"><?php echo $link_buttn_title; ?></span>
                    </a>
                  <?php endif; ?>
              </div>
            </div>
          </div>
          <?php if( get_field('section3_image') ):?>
          <div class="col-lg-6 p-0">
            <div class="image">
              <img src="<?php the_field('section3_image'); ?>" class="img-fluid">
            </div>
          </div>
        <?php endif; ?>
        </div>
      </div>
    </section>
    <!-- /full-img - end -->



    <!-- /menu - start -->
    <section class="menu">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <?php if( get_field('section4_image') ):?>
            <div class="image">
              <img src="<?php the_field('section4_image'); ?>" class="img-fluid" data-aos="fade-up">
            </div>
          <?php endif; ?>
          </div>
          <div class="col-lg-8">
            <div class="menu-list">
              <?php if( get_field('section4_heading') ):?>
              <div class="title">
                <?php the_field('section4_heading'); ?>
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
              <?php if( get_field('section5_heading') ):?>
              <div class="title text-right">
                <?php the_field('section5_heading'); ?>
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

          <?php if( get_field('section5_image') ):?>
          <div class="col-lg-4">
            <div class="image">
              <img src="<?php the_field('section5_image'); ?>" class="img-fluid" data-aos="fade-up">
            </div>
          </div>
        <?php endif; ?>
        </div>
      </div>
    </section>
    <!-- /menu - end -->


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
                if( have_rows('add_item') ):
                    while( have_rows('add_item') ) : the_row();
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