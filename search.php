<?php get_header(); ?>

<div class="page-area">
    <div class="container">
        <div class="row clearfix">
            <div class="content search-content">
				<h2 class="search-title">Search result for <span class="searchterm"><?php echo get_search_query(); ?></span></h2>
				<?php if ( have_posts() ) : ?>
					<?php 
					while(have_posts()) : the_post();
					$small_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-thumb-small');
					?>
						<div class="search-item">
							<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<a href="<?php the_permalink() ?>"><img class="image" src="<?php echo $small_thumb[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></a>
							<p><?php echo wp_trim_words(get_the_content(), 40, '' ) ?>... [<a href="<?php the_permalink() ?>">Read More >></a>]</p>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
				<div class="no-result">
					<p>No result found of <span class="searchterm"><?php echo get_search_query(); ?></span></p>
				</div>
				<?php endif; ?>
            </div>
            <?php get_template_part( 'sidebar' ) ?>
        </div>
    </div>
</div>

<?php
get_footer();
