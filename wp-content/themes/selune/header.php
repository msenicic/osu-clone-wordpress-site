<?php
/**
 * @package selune
 */
global $globalSite;
?>
<?php
    $bgColor        = get_field("page_bg_color");
    $txtColor       = get_field("page_text_color");
    $accentBgColor  = get_field("page_accent_bg_color");
    $accentTxtColor = get_field("page_accent_txt_color");
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="icon" href="<?= SELUNE_BUILD_IMG_URI . '/favicon.ico'; ?>" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/8a391c339d.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<?php
    $siteLogo = get_field('site_logo', 'option');
?>
<body class="<?= $txtColor; ?>"<?php body_class(); ?>>
<style>
    :root {
        --bg-color: <?= $bgColor; ?>;
        --txt-color: <?= $txtColor;?>;
        --accent-bg-color: <?= $accentBgColor; ?>;
        --accent-txt-color: <?= $accentTxtColor; ?>;
    }
</style>
<?php
include (locate_template('template-parts/globals/svg-icons/index.php', false, true)); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="inner">
                <div class="site-logo">
                    <a href="<?php _e( home_url( '/' ) ); ?>">
                        <?php if($siteLogo): ?>
                            <img <?php if($txtColor == "white"): ?> style="filter: invert(100%);"<?php endif; ?> src="<?= $siteLogo['url'] ?>" alt="<?= $globalSite['name'] ?>">
                        <?php endif; ?>
                    </a>
                </div>
                <div class="menu-button js-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <?php get_template_part( 'template-parts/components/nav'); ?>
            </div>
        </div>
    </header>