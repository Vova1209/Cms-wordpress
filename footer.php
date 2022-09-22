<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__column">
                <div class="footer__address">
                    <p><?php the_field('p_1'); ?></p>
                    <p><?php the_field('p_2'); ?></p>
                    <p><?php the_field('p_3'); ?></p>
                </div>
            </div>
            <div class="footer__column">
                <div class="footer__social social">
                    <a href="<?php the_field('twiter_link'); ?>" class="social__link"><picture><source srcset="<?php the_field('social_link1_webp'); ?>" type="image/webp"><img src="<?php the_field('social_link1'); ?>" alt=""></picture></a>
                    <a href="<?php the_field('link_facebook'); ?>" class="social__link"><picture><source srcset="<?php the_field('social_link2_webp'); ?>" type="image/webp"><img src="<?php the_field('social_link2'); ?>" alt=""></picture></a>
                    <a href="<?php the_field('link_else'); ?>" class="social__link"><picture><source srcset="<?php the_field('social_link3_webp'); ?>" type="image/webp"><img src="<?php the_field('social_link3'); ?>" alt=""></picture></a>
                </div>
            </div>
            <div class="footer__column">
                <a class="footer__dev dev">
                    <span class="dev__text"><?php the_field('label'); ?></span>
                    <span class="dev__icon"><picture><source srcset="<?php the_field('text_picture_webp'); ?>" type="image/webp"><img src="<?php the_field('text_picture'); ?>" alt=""></picture></span>

                </a>
            </div>
            </div>
        </div>
    </div>
</footer>
      </div>
       
    </main>
  </div>

 <?php wp_footer(); ?>


</body>

</html>