<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package selune
 */
global $wp_query;

get_header(); ?>
	<section class="page-header">
		<div class="search-text">
			<h1><?php printf( esc_html__( 'Søkeresultat for “%s”', 'selune' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<span>Viser <?php echo $wp_query->found_posts; ?> av <?php echo $wp_query->found_posts; ?></span>
		</div>
	</section><!-- .page-header -->
	<div id="primary" class="search">
		<div class="container">
			<div class="left-content">
				<div class="title">
					<h3>Prosjekter</h3>
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
			<div class="right-content">
				<?php
				if ( have_posts() ) : ?>
					<div class="article">
						<div class="title">
							<h3>Artikler</h3>
						</div>
						<?php
							while (have_posts() ) : the_post();
								get_template_part( 'template-parts/post/content', 'search' );
							endwhile;
						?>
					</div>
					<div class="pages">
						<div class="title">
							<h3>Andre sider</h3>
						</div>
						<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/post/content', 'search' );
							endwhile;
						?>
					</div>
			</div>
			<?php
				else :
				get_template_part( 'template-parts/post/content', 'none' );
				endif; ?>
		</div>
	</div>
	<div id="content" class="site-content">
		<main id="main" class="page-main site-main" role="main">
			<?php the_content(); ?>
        </main>
	</div>
<?php
// get_sidebar();
get_footer();
