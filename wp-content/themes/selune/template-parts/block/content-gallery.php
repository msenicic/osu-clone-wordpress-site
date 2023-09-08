<?php
    $galleryTitle = get_field('gallery_title');
    $galleryImages = get_field('gallery_images') 
?>

<section class="module module-gallery">
    <div class="container">
        <div class="title">
            <h3><?= $galleryTitle ?></h3>
        </div>
        <div class="slider">
            <?php foreach( $galleryImages as $image ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endforeach; ?>
        </div>
    </div>
</section>