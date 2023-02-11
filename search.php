<?php 
get_header();

get_template_part('section/navigation-main') 
?>

<div class="page-area">
    <div class="container">
        <div class="row clearfix">
            <div class="content search-content">
				<h2 class="search-title">Search result for <span class="searchterm"><?php echo get_search_query(); ?></span></h2>
				<?php if ( have_posts() ) : ?>
					<div class="two-column">
						<?php while(have_posts()) : the_post(); ?>
							<?php get_template_part('section/post/default') ?>
						<?php endwhile; ?>
					</div>
					<?php get_template_part('section/pagination') ?>
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
