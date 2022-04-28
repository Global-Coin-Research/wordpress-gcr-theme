<?php

/*
Template Name: Latest Blog Page
*/
get_header();

get_template_part('section/navigation-main') 
?>


<div class="page-section">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="section-title">
				<h2>All Posts</h2>
			</div>
			<?php wp_reset_postdata(); ?>
            <?php 
				$latest_args = array(
					'post_type' => 'post',
                    'oderby' => 'modified',
					'order'   => 'DESC',
					'posts_per_page' => '3', 
				);
				$lastest_post_query = new WP_Query( $latest_args );
            ?>
            <div class="three-column clearfix">
                <?php 
                    while ( have_posts() ) : the_post();  
                    ?>
                    <?php get_template_part('section/post/default') ?>
                <?php endwhile; ?>
                
            </div>
            <?php get_template_part('section/pagination') ?>
        </div>
    </div>
</div>
    
<?php get_footer(); ?>