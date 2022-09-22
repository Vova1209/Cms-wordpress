<?php
/*
Template Name: home

*/
?>


<?php get_header(); ?>
      <div class="main-screen">
        
        <div class="main-screen__bg ibg">
          <picture><source srcset="<?php the_field('top_img_webp'); ?>" type="image/webp"><img src="<?php the_field('top_img'); ?>" alt=""></picture>
        </div>
      </div>
      <div class="content">
        <section class="generation">
          <div class="container">
            <div class="generation__block block">
              <div class="block__icon"><picture><source srcset="<?php the_field('logo_block_webp'); ?>" type="image/webp"><img src="<?php the_field('logo_block'); ?>" alt=""></picture></div>
              <h1 class="block__title"><?php the_field('under_title'); ?></h1>
              <div class="block__text"><?php the_field('text_under'); ?></div>
            </div>
          </div>
        </section>
        <section class="brands">
          <div class="brands__row">
            <div class="brands__colum brands__colum_b">
              <a href="" class="brands__item item">
                <span class="item__logo"><picture><source srcset="<?php the_field('hover_picture_right_webp'); ?>" type="image/webp"><img src="<?php the_field('hover_picture_right'); ?>" alt=""></picture></span>
                <span class="item__image ibg"><picture><source srcset="<?php the_field('picture_block_webp'); ?>" type="image/webp"><img src="<?php the_field('picture_block'); ?>" alt=""></picture></span>
              </a>
            </div>
            <div class="brands__colum">
              <div class="brands__content block">
                  <div class="block__icon"><picture><source srcset="<?php the_field('logo_block_webp_right'); ?>" type="image/webp"><img src="<?php the_field('logo_block_right'); ?>" alt=""></picture></div>
                  <h2 class="block__title"><?php the_field('header_right'); ?></h2>
                  <div class="block__text block__text_j"><?php the_field('text_right'); ?></div>
                </div>
                <div class="brands__image ibg">
                  <picture><source srcset="<?php the_field('picture_under_text_webp'); ?>" type="image/webp"><img src="<?php the_field('picture_under_text'); ?>" alt=""></picture>
                </div>
              </div>
            </div>

        </section>


        <section class="brands brands__rev">
          <div class="brands__row">
            <div class="brands__colum  brands__colum_b">
              <a href="" class="brands__item item">
                <span class="item__logo"><picture><source srcset="<?php the_field('hower_left_picture_webp'); ?>" type="image/webp"><img src="<?php the_field('hower_left_picture'); ?>" alt=""></picture></span>
                <span class="item__image ibg"><picture><source srcset="<?php the_field('left_picture_webp'); ?>" type="image/webp"><img src="<?php the_field('left_picture'); ?>" alt=""></picture></span>
              </a>
            </div>
            <div class="brands__colum">
              <div class="brands__content block">
                  <div class="block__icon"><picture><source srcset="<?php the_field('logo_title_left_webp'); ?>" type="image/webp"><img src="<?php the_field('logo_title_left'); ?>" alt=""></picture></div>
                  <h2 class="block__title"><?php the_field('header_left'); ?></h2>
                  <div class="block__text block__text_j"><?php the_field('text_left');?></div>
                </div>
                <div class="brands__image ibg">
                  <picture><source srcset="<?php the_field
                  ('picture_under_left_text_webp'); ?>" type="image/webp"><img src="<?php the_field('picture_under_left_text'); ?>" alt=""></picture>
                </div>
              </div>
            </div>

        
        
          </section>

          <section class="brands brands__last">
            <div class="brands__row">
              <div class="brands__colum ">
                <a href="" class="brands__item item">
                  <span class="item__logo"><picture><source srcset="<?php the_field('hower_picture_center-1_webp'); ?>" type="image/webp"><img src="<?php the_field('hower_picture_center-1'); ?>" alt=""></picture></span>
                  <span class="item__image ibg"><picture><source srcset="<?php the_field('picture_center-1_webp'); ?>" type="image/webp"><img src="<?php the_field('picture_center-1'); ?>" alt=""></picture></span>
                </a>
              </div>
              <div class="brands__colum">
                <div class="brands__content block">
                    <div class="block__icon"><picture><source srcset="<?php the_field('logo_center_webp'); ?>" type="image/webp"><img src="<?php the_field('logo_center'); ?>" alt=""></picture></div>
                    <h2 class="block__title"><?php the_field('header_center'); ?></h2>
                    <div class="block__text block__text_j"><?php the_field('text_center');?></div>
                  </div>
                  <div class="brands__image ibg">
                    <picture><source srcset="<?php the_field('the_picture_under_text_center_webp'); ?>" type="image/webp"><img src="<?php the_field('the_picture_under_text_center'); ?>" alt=""></picture>
                  </div>
                </div>
                <div class="brands__colum ">
                  <a href="" class="brands__item item">
                    <span class="item__logo"><picture><source srcset="<?php the_field('hower_picture_center-2_webp'); ?>" type="image/webp"><img src="<?php the_field('hower_picture_center-2'); ?>" alt=""></picture></span>
                    <span class="item__image ibg"><picture><source srcset="<?php the_field('different_img_center_block_webp'); ?>" type="image/webp"><img src="<?php the_field('different_img_center_block'); ?>" alt=""></picture></span>
                  </a>
                </div>
              </div>
  
          </section>
          <section class="slider">
            <div class="container">
              <div class="slider__body">

<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
  'category' => 4,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
        <div class="slider__item">
                  <div class="slider__icon"><!---<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-brands.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-brands.svg" alt=""></picture>
                --->
                <?php the_post_thumbnail(); ?>
                </div> 
                  
                 <h3 class="slider__title"><?php the_title(); ?></h3>
                  <div class="slider__text"><?php the_content(); ?></div>
                </div>


<?php }} wp_reset_postdata(); ?>

<!--
                <div class="slider__item">
                  <div class="slider__icon"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-brands.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-brands.svg" alt=""></picture></div>
                  <h3 class="slider__title">ADD New York @add <span> /35 min</span></h3>
                  <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione omnis deleniti consectetur at rerum quia beatae quod quibusdam voluptatum facilis laudantium et recusandae quas quo, eligendi eveniet explicabo aut fugiat.</div>
                </div>
                <div class="slider__item">
                  <div class="slider__icon"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-brands.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-brands.svg" alt=""></picture></div>
                  <h3 class="slider__title">ADD New York @add <span> /35 min</span></h3>
                  <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione omnis deleniti consectetur at rerum quia beatae quod quibusdam voluptatum facilis laudantium et recusandae quas quo, eligendi eveniet explicabo aut fugiat.</div>
                </div>
                <div class="slider__item">
                  <div class="slider__icon"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-brands.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/twitter-brands.svg" alt=""></picture></div>
                  <h3 class="slider__title">ADD New York @add <span> /35 min</span></h3>
                  <div class="slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione omnis deleniti consectetur at rerum quia beatae quod quibusdam voluptatum facilis laudantium et recusandae quas quo, eligendi eveniet explicabo aut fugiat.</div>
                </div>
-->
              </div>
            </div>
          </section>
          <div class="shop">
            <div class="shop__body"> 
              <div class="shop__column shop__column_b">
                <div class="shop__block block-shop">
                  <div class="block-shop__row">
                    <div class="block-shop__column">
                      <a href="" class="block-shop__item block-shop__item_l item">
                        <span class="item__logo"><picture><source srcset="<?php the_field('hover1_web'); ?>" type="image/webp"><img src="<?php the_field('hover1'); ?>" alt=""></picture>
                        <span><?php  the_field('text_picture1'); ?></span>
                      </span>
                        <span class="item__image ibg"><picture><source srcset="<?php the_field('picture1_webp'); ?>" type="image/webp"><img src="<?php the_field('picture1'); ?>" alt=""></picture></span>
                      </a>
                    </div>
                    <div class="block-shop__column">  
                      <a href="" class="block-shop__item block-shop__item_l item">
                        <span class="item__logo"><picture><source srcset="<?php the_field('hover2_webp'); ?>" type="image/webp"><img src="<?php the_field('hover2'); ?>" alt=""></picture>
                        <span><?php  the_field('text_picture2'); ?></span>
                      </span>
                        <span class="item__image ibg"><picture><source srcset="<?php the_field('picture2_webp'); ?>" type="image/webp"><img src="<?php the_field('picture2'); ?>" alt=""></picture></span>
                      </a>
                    </div>
                  </div>
                  <a href="" class="block-shop__item item">
                    <span class="item__logo"><picture><source srcset="<?php the_field('hover3_webp'); ?>" type="image/webp"><img src="<?php the_field('hover3'); ?>t=""></picture>
                    <span><?php  the_field('text_picture3'); ?></span>
                  </span>
                    <span class="item__image ibg"><picture><source srcset="<?php the_field('picture3_webp'); ?>" type="image/webp"><img src="<?php the_field('picture3'); ?>" alt=""></picture></span>
                  </a>
                </div>
              </div>
              <div class="shop__column">
                <a href="" class="block-shop__item block-shop__item_b item">
                  <span class="item__logo"><picture><source srcset="<?php the_field('hover4_webp'); ?>" type="image/webp"><img src="<?php the_field('hover4'); ?>" alt=""></picture>
                  <span><?php  the_field('text_picture4'); ?></span>
                </span>
                  <span class="item__image ibg"><picture><source srcset="<?php the_field('picture4_webp'); ?>" type="image/webp"><img src="<?php the_field('picture4'); ?>" alt=""></picture></span>
                </a>
              </div>
              <div class="shop__column">
                <a href="" class="block-shop__item block-shop__item_b item">
                  <span class="item__logo"><picture><source srcset="<?php the_field('hover5_webp'); ?>" type="image/webp"><img src="<?php the_field('hover5'); ?>" alt=""></picture>
                  <span><?php  the_field('text_picture5'); ?></span>
                </span>
                  <span class="item__image ibg"><picture><source srcset="<?php the_field('picture5_webp'); ?>" type="image/webp"><img src="<?php the_field('picture5'); ?>" alt=""></picture></span>
                </a>
              </div>
              <div class="shop__column shop__column_b">
                <div class="shop__block block-shop">
                  
                  <a href="" class="block-shop__item item">
                    <span class="item__logo"><picture><source srcset="<?php the_field('hover6_webp'); ?>" type="image/webp"><img src="<?php the_field('hover6'); ?>" alt=""></picture>
                    <span><?php  the_field('text_picture6'); ?></span>
                  </span>
                    <span class="item__image ibg"><picture><source srcset="<?php the_field('picture6_webp'); ?>" type="image/webp"><img src="<?php the_field('picture6'); ?>" alt=""></picture></span>
                  </a>
                  <div class="block-shop__row">
                    <div class="block-shop__column">
                      <a href="" class="block-shop__item block-shop__item_l item">
                        <span class="item__logo"><picture><source srcset="<?php the_field('hover7_webp'); ?>" type="image/webp"><img src="<?php the_field('hover7'); ?>" alt=""></picture>
                        <span><?php  the_field('text_picture7'); ?></span>
                      </span>
                        <span class="item__image ibg"><picture><source srcset="<?php the_field('picture7_webp'); ?>" type="image/webp"><img src="<?php the_field('picture7'); ?>" alt=""></picture></span>
                      </a>
                    </div>
                    <div class="block-shop__column">  
                      <a href="" class="block-shop__item block-shop__item_l item">
                        <span class="item__logo"><picture><source srcset="<?php the_field('hover8_webp'); ?>" type="image/webp"><img src="<?php the_field('hover8'); ?>" alt=""></picture>
                        <span><?php  the_field('text_picture8'); ?></span>
                      </span>
                        <span class="item__image ibg"><picture><source srcset="<?php the_field('picture8_webp'); ?>" type="image/webp"><img src="<?php the_field('picture8'); ?>" alt=""></picture></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="shop__footer">
              <div class="container">
                <a href="" class="shop__btn"> <?php the_field('text_button'); ?></a>
              </div>
            </div>

          </div>
          <div class="subscribe">
            <div class="container">
              <div class="subcsribe__body">
                <div class="subcsribe__logo">
                  <picture><source srcset="<?php the_field('logo_form_webp'); ?>" type="image/webp"><img src="<?php the_field('logo_form'); ?>" alt=""></picture>
                </div>
                <div class="subcsribe__label">
                  <?php the_field('form_title');?>
                </div>
                <form action="#" class="subcsribe__form">
                  <div class="subcsribe__input">
                    <?php echo do_shortcode('[contact-form-7 id="35" title="Контактна форма email"]')?>
                  <!---  <input autocomplete="off" type="email" name="form[]" data-value="enter your email" placeholder="Enter your email" class="input email"> --->
                  </div>
                  <div class="subcsribe__button">
                 
                    <!--- <button type="submit" class="subcsribe__btn">GO</button> --->
                  </div>
                </form>
              </div>
            </div>
          </div>
         <?php get_footer(); ?>
