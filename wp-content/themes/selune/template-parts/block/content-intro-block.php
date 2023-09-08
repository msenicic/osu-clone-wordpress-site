<?php
    $intro_text  = get_field('intro_text');
    $intro_title = get_field('intro_title'); 
?>

<section class="module module-intro-block">
    <div class="container">
        <div class="left-content">
            <div class="title"><h2><?= $intro_title ?></h2></div>
            <div class="text"><?= $intro_text ?></div>
        </div>
        <div class="right-content">
            <div class="title">
                <svg xmlns="http://www.w3.org/2000/svg" width="130" height="86" fill="none">
                    <path d="m80.32 18.462 13.352 13.36H44.033v4.965h49.639L80.32 50.14l3.508 3.515 19.357-19.35-19.357-19.357-3.508 3.515Z" fill="#000"></path>
                    <path d="M124.869 85.311H130L108.026 0H21.974l-.48 1.868L0 85.31h5.131l4.303-16.717H38.36l4.311 16.717h5.131l-4.311-16.717h43.002L82.182 85.31h5.131l4.303-16.717h28.934l4.319 16.717ZM10.727 63.628l13.186-51.183L37.099 63.63H10.727Zm31.527 0L27.144 4.966h77.051l15.11 58.663H42.253Z" fill="#000"></path>
                </svg>
                <h3>Aktuelle prosjekter</h3>
            </div>
        <?php
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
                <div class="link">
                    <a style="background-color: <?= $bg_color; ?>; color: <?= $txt_color; ?>" href="<?php the_permalink(); ?>">
                        <span><?php the_title(); ?></span>
                        <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m22.696 2.18 8.358 8.278H0v3.079h31.054l-8.358 8.283 2.2 2.18L37 11.998 24.895 0l-2.199 2.18Z" fill="currentColor"></path></svg>
                    </a>
                </div>
                <?php endwhile;?>
                <?php wp_reset_postdata(); ?>
            <?php endif; 
        ?>
        </div>
    </div>
</section>