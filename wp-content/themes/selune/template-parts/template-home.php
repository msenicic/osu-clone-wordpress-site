<?php
/* Template Name: Home */
get_header(); ?>
    <div id="content" class="site-content">
        <?php
        headerHomePage(); ?>
        <main id="main" class="page-main site-main" role="main">
            <?php the_content(); ?>
        </main>
    </div>
<?php
get_footer();