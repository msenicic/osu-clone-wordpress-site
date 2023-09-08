<section class="module module-active-projects-block">
    <div class="container">
        <div class="title">
            <h3>Aktuelle prosjekter:</h3>
        </div>
        <div class="active-projects">
        <?php
            $i = 0; 
            $args = array(
                'posts_per_page' => -1,
                'category_name' => 'prosjekter',
                'offset' => 0,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :?>
                <?php while ($query->have_posts()) : $query->the_post();?>
                    <div class="hidden">
                        <?php the_content(); ?>
                    </div>
                <?php
                    $bg_color  = get_field("page_bg_color");
                    $txt_color = get_field("page_text_color"); 
                ?>
                <div class="project<?php if($i%2==0): echo " invert"; endif;?>" style="background-color: <?= $bg_color; ?>; color: <?= $txt_color; ?>">
                    <div class="right-content">
                        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
                    </div>
                    <div class="left-content">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <p id="pop-up">Meld interesse</p>
                        <div class="link">
                            <a href="<?php the_permalink(); ?>">
                                <span>Se prosjektet her</span>
                                <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m22.696 2.18 8.358 8.278H0v3.079h31.054l-8.358 8.283 2.2 2.18L37 11.998 24.895 0l-2.199 2.18Z" fill="currentColor"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                    <?php $i = $i + 1; ?>
                    <?php endwhile;?>
                    <?php wp_reset_postdata(); ?>
            <?php endif; 
        ?>
        </div>
    </div>
</section>