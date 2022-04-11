<div class="page-section">
    <div class="container clearfix">
        <div class="row clearfix">
			<div class="section-title">
				<h2>GCR Announcements</h2>
			</div>
            <?php 
                $the_query = new WP_Query( array(
                    'tax_query' => array(
                        'relation' => 'OR',
                        array(
                            'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => 'gcr',
                        ),
                    ),
                    'posts_per_page' => 3
                )); 
            ?>
			<div class="three-column category_post">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php get_template_part('section/post/category-post') ?>
                <?php endwhile; ?>
			</div>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>