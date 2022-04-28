<div class="page-section gcr-news">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="section-title">
				<h2>GCR News</h2>
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
                <?php while ( $lastest_post_query->have_posts() ) : $lastest_post_query->the_post();  ?>
                <?php get_template_part('section/post/default') ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>