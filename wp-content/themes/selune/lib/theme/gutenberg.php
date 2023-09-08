<?php
add_filter( 'admin_body_class',
/**
 * Adds one or more classes to the body tag in the dashboard.
 *
 * @link https://wordpress.stackexchange.com/a/154951/17187
 * @param  String $classes Current body classes.
 * @return String          Altered body classes.
 */
function ( $classes ) {
    $template_slug = get_page_template_slug();
    return "$classes $template_slug";
} );

add_filter( 'block_categories_all', function( $categories, $post ) {
    return array_merge(
        array(
            array(
                'slug'  => 'osu-blocks',
                'title' => 'OSU Blocks',
                'icon'  => 'dashicons-excerpt-view'
            ),
        ),
        $categories
    );
}, 10, 2 );

add_action('acf/init', function () {


    if (function_exists('acf_register_block')) {

        acf_register_block(array(
            'name'				=> 'intro_block',
            'title'				=> __('Intro Block'),
            'description'		=> __('Intro gutenberg block.'),
            // 'example'           => array(
            //     'attributes' => array(
            //         'mode' => 'preview',
            //         'data' => array(
            //             'center_align'  => true,
            //             'text'          => "Text Example",
            //             'subtext'       => "This is subtext example"
            //         )
            //     )
            // ),
            'render_callback'	=> 'trigger_fn',
            'mode'              => 'edit',
            'category'			=> 'osu-blocks',
            'supports'	=> array(
                'align'	=> false
            ),
            'icon'				=> 'filter',
            'keywords'			=> array( 'intro' ),
        ));

        acf_register_block(array(
            'name'				=> 'gallery',
            'title'				=> __('Gallery'),
            'description'		=> __('Gallery gutenberg block.'),
            'render_callback'	=> 'trigger_fn',
            'mode'              => 'edit',
            'category'			=> 'osu-blocks',
            'supports'	=> array(
                'align'	=> false
            ),
            'icon'				=> 'block-default',
            'keywords'			=> array( 'gallery' ),
        ));

        acf_register_block(array(
            'name'				=> 'image_text_block',
            'title'				=> __('Image Text Block'),
            'description'		=> __('Image Text gutenberg block.'),
            'render_callback'	=> 'trigger_fn',
            'mode'              => 'edit',
            'category'			=> 'osu-blocks',
            'supports'	=> array(
                'align'	=> false
            ),
            'icon'				=> 'block-default',
            'keywords'			=> array( 'Image', 'Text' ),
        ));

        acf_register_block(array(
            'name'				=> 'quote_block',
            'title'				=> __('Quote Block'),
            'description'		=> __('Quote gutenberg block.'),
            'render_callback'	=> 'trigger_fn',
            'mode'              => 'edit',
            'category'			=> 'osu-blocks',
            'supports'	=> array(
                'align'	=> false
            ),
            'icon'				=> 'block-default',
            'keywords'			=> array( 'Quote' ),
        ));

        acf_register_block(array(
            'name'				=> 'bjorvika_news_block',
            'title'				=> __('Bjorvika News Block'),
            'description'		=> __('Bjorvika News gutenberg block.'),
            'render_callback'	=> 'trigger_fn',
            'mode'              => 'edit',
            'category'			=> 'osu-blocks',
            'supports'	=> array(
                'align'	=> false
            ),
            'icon'				=> 'block-default',
            'keywords'			=> array( 'Bjorvika', 'News' ),
        ));

        acf_register_block(array(
            'name'				=> 'active_projects_block',
            'title'				=> __('Active Projects Block'),
            'description'		=> __('Active Projects gutenberg block.'),
            'render_callback'	=> 'trigger_fn',
            'mode'              => 'edit',
            'category'			=> 'osu-blocks',
            'supports'	=> array(
                'align'	=> false
            ),
            'icon'				=> 'block-default',
            'keywords'			=> array( 'Projects', 'Active' ),
        ));

        acf_register_block(array(
            'name'				=> 'newsletter_form_block',
            'title'				=> __('Newsletter Form Block'),
            'description'		=> __('Newsletter Form gutenberg block.'),
            'render_callback'	=> 'trigger_fn',
            'mode'              => 'edit',
            'category'			=> 'osu-blocks',
            'supports'	=> array(
                'align'	=> false
            ),
            'icon'				=> 'block-default',
            'keywords'			=> array( 'Newsletter', 'Form' ),
        ));
    }
});

function trigger_fn( $block ) {

    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
        include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
    }
}

// add_filter('allowed_block_types_all', function ( $allowed_blocks ) {
//     global $pagenow;

//     $current_template = get_page_template_slug();

//     if( $pagenow === 'widgets.php' ) {
//         return true;
//     }

//     $any        = true;
//     $is_landing = str_contains($current_template, 'template-landing');
//     $is_inner   = str_contains($current_template, 'template-inner');

//     return array(
//         // COMMON
//         'core/paragraph',
//         'core/image',
//         'core/heading',
// //        'core/gallery',
//         'core/list',
// //        'core/quote',
//         'core/audio',
//         'core/cover',
//         'core/file',
//         'core/video',

//         // FORMATING
//         'core/table',
// //        'core/verse',
//         'core/code',
//         'core/freeform',
//         'core/html',
//         'core/preformatted',
// //        'core/pullquote',

//         // LAYOUTS
// //        'core/buttons',
//         'core/text-columns',
//         'core/columns',
// //        'core/media-text',
// //        'core/more',
//         'core/nextpage',
//         'core/separator',
//         'core/spacer',
//         'core/navigation',
//         'core/navigation-menu',

//         // WIDGETS
//         'core/shortcode',
//         'core/archives',
//         'core/categories',
//         'core/latest-comments',
//         'core/latest-posts',
//         'core/calendar',
//         'core/rss',
//         'core/search',
//         'core/tag-cloud',

//         // EMBEDS
//         'core/embed',
//         'core-embed/twitter',
//         'core-embed/youtube',
//         'core-embed/facebook',
//         'core-embed/instagram',
//         'core-embed/wordpress',
//         'core-embed/soundcloud',
//         'core-embed/spotify',
//         'core-embed/flickr',
//         'core-embed/vimeo',
//         'core-embed/animoto',
//         'core-embed/cloudup',
//         'core-embed/collegehumor',
//         'core-embed/dailymotion',
//         'core-embed/funnyordie',
//         'core-embed/hulu',
//         'core-embed/imgur',
//         'core-embed/issuu',
//         'core-embed/kickstarter',
//         'core-embed/meetup-com',
//         'core-embed/mixcloud',
//         'core-embed/photobucket',
//         'core-embed/polldaddy',
//         'core-embed/reddit',
//         'core-embed/reverbnation',
//         'core-embed/screencast',
//         'core-embed/scribd',
//         'core-embed/slideshare',
//         'core-embed/smugmug',
//         'core-embed/speaker',
//         'core-embed/ted',
//         'core-embed/tumblr',
//         'core-embed/videopress',
//         'core-embed/wordpress-tv',

//         'kadence/tabs',
//         'kadence/accordion',
//         'kadence/iconlist',
//         'kadence/icon',

//         'acf/intro-with-links',
//         'acf/intro-block',
//         'acf/factoid',
//         'acf/quote',
//         'acf/highlight-cards',
//         'acf/smart-teaser',
//         'acf/feature-teaser',
//         'acf/cta-bar',
// //        'acf/breadcrumb',
//         'acf/button',
//         'acf/contact',
//         'acf/spotlights',
//         'acf/wysiwyg-classic',
//         'acf/looking-for',
//         'acf/news-event-feed',
//         'acf/news-event-feed-auto',
//     );
// });

add_theme_support( 'editor-color-palette', array(
    array(
        'name' => __( 'Forest Green', 'selune' ),
        'slug' => 'forest-green',
        'color' => '#005941',
    ),
    array(
        'name' => __( 'Sunshine', 'selune' ),
        'slug' => 'sunshine',
        'color' => '#f3cf1e',
    ),
    array(
        'name' => __( 'Forest Night', 'selune' ),
        'slug' => 'forest-night',
        'color' => '#072a1b',
    ),
    array(
        'name' => __( 'Ash White', 'selune' ),
        'slug' => 'ash-white',
        'color' => '#f8f4ef',
    ),
    array(
        'name' => __( 'Sage', 'selune' ),
        'slug' => 'sage',
        'color' => '#86a879',
    ),
    array(
        'name' => __( 'Fern', 'selune' ),
        'slug' => 'fern',
        'color' => '#aed459',
    ),
    array(
        'name' => __( 'Midnight', 'selune' ),
        'slug' => 'midnight',
        'color' => '#000',
    ),
    array(
        'name' => __( 'Grey', 'selune' ),
        'slug' => 'grey',
        'color' => '#f0f0f0',
    ),
) );

/**
 * Function to wrap all gutenberg blocks
 * @var $block_content
 * @var $block {Array}
 */
add_filter( 'render_block', function ( $block_content, $block ) {

    $level = isset($block['attrs']['level']) ? $block['attrs']['level'] : '2';

    if (!($block['blockName'])) :
        // Hackish solution.... There is no other way to detect core/freeform (classic) block
        // So we use case when blockName is NULL and innerHTML is bigger than 5 (usually, under 5 are some weird empty spaces or break rows).
        if ($block == 'core/freeform' || ($block['blockName'] === NULL && strlen($block['innerHTML']) > 5)) :
            $block_content =
                '<section class="module module-common classic">' .
                    '<div class="container">' .
                        $block_content .
                    '</div>' .
                '</section>';
        endif;
    else :
        switch ($block['blockName']) :
            case 'core/paragraph':
                $block_content =
                    '<section class="module module-common paragraph">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/calendar':
                $block_content =
                    '<section class="module module-calendar">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/image':
                $class = '';
                if (count($block['attrs']) && isset($block['attrs']['align'])) {
                    $class = 'align-block-' . $block['attrs']['align'];
                }

                $block_content = '<section class="module module-common image ' . $class . '">' . $block_content . '</section>';
                break;
            case 'core/cover':
                $block_content = '<section class="module module-common cover">' . $block_content . '</section>';
                break;
            case 'core/separator':
                $block_content =
                    '<section class="module module-common separator">' . $block_content . '</section>';
                break;
            case 'core/file':
                $block_content =
                    '<section class="module module-common file">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/heading':
                $block_content =
                    '<section class="module module-common heading level-' . $level . '">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/list':
                $block_content =
                    '<section class="module module-common list">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/columns':
                $block_content =
                    '<section class="module module-common columns">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/table':
                $block_content =
                    '<section class="module module-common classic tables">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/gallery':
                $block_content =
                    '<section class="module module-common gallery">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/html':
                $block_content =
                    '<section class="module module-common html">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
                break;
            case 'core/quote':
                $block_content =
                    '<section class="module module-quote">' .
                        '<div class="container">' .
                            $block_content .
                        '</div>' .
                    '</section>';
            break;
            case 'core/group':
                $block_content =
                '<section class="module module-group">' .
                    '<div class="container">' .
                        $block_content .
                    '</div>' .
                '</section>';
            break;
        endswitch;
    endif;

    return $block_content;
}, 10, 2 );

function my_acf_input_admin_footer() {

    ?>
    <script type="text/javascript">
        (function($) {

        })(jQuery);
    </script>
    <?php

}

add_action('acf/input/admin_footer', 'my_acf_input_admin_footer');