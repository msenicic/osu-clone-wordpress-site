<?php
    $imageSlider   = get_field('image_slider');
    $title         = get_field('title'); 
    $text          = get_field('text');
    $link          = get_field('link');
    $imagePosition = get_field('image_position');
?>

<section class="module module-image-text-block">
    <div class="container<?php if($imagePosition): echo " invert"; endif;?>">
        <div class="left-content">
            <div class="slider">
                <?php foreach( $imageSlider as $image ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endforeach; ?>
            </div>
        </div>
        <div class="right-content">
            <?php if( $title ) : ?>
                <div class="title">
                    <h2><?= $title; ?></h2>
                </div>
            <?php endif; ?>
            <div class="text">
                <?= $text; ?>
            </div>
            <?php if( $link ) : ?>
                <div class="link">
                    <a style="background-color: <?= $bg_color; ?>; color: <?= $txt_color; ?>" href="<?= $link['url'] ?>" target="<?= $link['target']; ?>">
                        <span><?= $link['title']; ?></span>
                        <svg width="37" height="24" viewBox="0 0 37 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m22.696 2.18 8.358 8.278H0v3.079h31.054l-8.358 8.283 2.2 2.18L37 11.998 24.895 0l-2.199 2.18Z" fill="currentColor"></path></svg>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

