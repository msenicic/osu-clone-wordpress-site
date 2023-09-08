<?php
    $bnBgColor  = get_field('bn_background_color');
    $bnTxtColor = get_field('bn_text_color'); 
    $bnTitle = get_field('bn_title'); 
    $bnLink = get_field('bn_link'); 
?>

<section style="background-color:<?= $bnBgColor ?>; color:<?= $bnTxtColor ?>" class="module module-bjorvika-news-block">
    <div class="container">
        <div class="title">
            <h3><?= $bnTitle ?></h3>
        </div>
        <div class="news">
        <?php
            $args = array(
                'posts_per_page' => 3,
                'category_name' => 'bjorvika',
                'offset' => 0,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :?>
                <?php while ($query->have_posts()) : $query->the_post();?>
                <div class="block">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail() ?>
                        <div class="content">
                            <h4>
                                <?php the_title(); ?>
                                <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m22.696 2.18 8.358 8.278H0v3.079h31.054l-8.358 8.283 2.2 2.18L37 11.998 24.895 0l-2.199 2.18Z" fill="currentColor"></path></svg>
                            </h4>
                        </div>
                    </a>
                </div>
                    <?php endwhile;?>
                    <?php wp_reset_postdata(); ?>
            <?php endif; 
        ?>
        </div>
        <div class="link">
            <a href="<?= $bnLink['url']; ?>" target="<?= $bnLink['target']; ?>"><?= $bnLink['title']; ?></a>
        </div>
    </div>
</section>