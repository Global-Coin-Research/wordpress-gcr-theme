<div class="page-section">
    <div class="container clearfix">
		<div class="row">
			<div class="section-title">
				<h2>
					Insights
				</h2>
			</div>
		</div>
        <div class="row clearfix article-block-vertical">
            <div class="left-high-block">
                <?php 
                    $the_query = new WP_Query( array(
                        'tax_query' => array(
                            'relation' => 'OR',
                            array(
                                'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'writing',
                            ),
                        ),
                        'posts_per_page' => 1
                    )); 
                ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part('section/post/tall-post') ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            
            <div class="right-vertical-block">
                <?php 
                    $the_query = new WP_Query( array(
                        'tax_query' => array(
                            'relation' => 'OR',
                            array(
                                'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => 'writing',
                            ),
                        ),
                        'offset' => 1,
                        'posts_per_page' => 2
                    )); 
                ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php get_template_part('section/post/small-post-horizontal') ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>