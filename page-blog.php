<?php

get_header(); ?>


<?php get_template_part('slider') ?>

<div class="news-section">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="section-title">
				<h2 class="white">
					Latest Posts
				</h2>
			</div>
			<?php wp_reset_postdata(); ?>
            <?php 
				$latest_args = array(
					'post_type' => 'post',
                    'oderby' => 'modified',
					'order'   => 'DESC',
					'posts_per_page' => '6', 
				);
				$lastest_post_query = new WP_Query( $latest_args );
            ?>
            <div class="three-column">
                <?php while ( $lastest_post_query->have_posts() ) : $lastest_post_query->the_post();  ?>
                <div class="news column">
                    <div class="news-thumb">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        
                    </div>
                    <div class="news-text">
                        <p class="tag"><?php the_category(', '); ?></p>
                        <h3 class="news-headline">
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 5, '...' ); ?></a>
                        </h3>
                        <div class="details">
                            <p><?php echo wp_trim_words(get_the_content(), 20, '' ) ?></p>
                        </div>
                        <div class="meta-data">
                            <div class="meta-text">
                                <h5><a href="<?php echo esc_url(get_the_author_meta('user_url') ); ?>"><?php the_author(); ?></a></h5>
                                <p class="date"><?php the_time('F d'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<div class="newsletter-section">
    <div class="container clearfix">
        <div class="row clearfix">
            <?php 
                if(is_active_sidebar('subscription_header' )){
                    dynamic_sidebar('subscription_header');
                }else{
            ?>
            <div class="subscribe-text">
                <h3>Crypto insights you won’t delete.<br/>
                    delivered to your inbox weekly.</h3>
            </div>
            <?php
                } 
            ?>
            <div class="subscribe-form horizontal">
                <?php get_template_part('subscription-form'); ?>
            </div>
        </div>
    </div>
</div>

<div class="news-section">
    <div class="container clearfix">
		<div class="row">
			<div class="section-title">
				<h2>
					Insights
				</h2>
			</div>
		</div>
        <div class="row clearfix news-block-vertical">
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
                <?php 
                    $tall_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-thumb-tall');
                ?>
                <div class="news">
                    <div class="news-thumb">
                        <img src="<?php echo $tall_image[0]; ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="overlay-text">
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 12, '' ); ?></a>
                        </h3>
                        <div class="meta-data">
                            <div class="meta-text">
                                <h5><a href="<?php echo esc_url(get_the_author_meta('user_url') ); ?>"><?php the_author(); ?></a></h5>
                                <p class="date"><?php the_time('F d'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
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
                <?php 
                    $small_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-thumb-small');
                ?>
                <div class="news">
                    <div class="news-thumb">
                        <img src="<?php echo $small_thumb[0]; ?>" alt="<?php the_title(); ?>">
                    </div>
                    <div class="news-text">
                        <h3 class="news-headline">
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '' ); ?></a>
                        </h3>
                        <div class="details">
                            <p><?php echo wp_trim_words(get_the_content(), 50, '' ) ?></p>
                        </div>
                        <div class="meta-data">
                            <div class="meta-text">
                                <h5><a href="<?php echo esc_url(get_the_author_meta('user_url') ); ?>"><?php the_author(); ?></a></h5>
                                <p class="date"><?php the_time('F d'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<div class="news-section">
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
			<div class="three-column">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="news column">
                <div class="news-thumb">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    
                </div>
                <div class="news-text">
                    <h3 class="news-headline">
                        <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 6, ' ...' ); ?></a>
                    </h3>
                    <div class="details">
                        <p><?php echo wp_trim_words(get_the_content(), 15, '' ) ?></p>
                    </div>
                    <div class="meta-data">
                        <div class="meta-text">
                            <h5><a href="<?php echo esc_url(get_the_author_meta('user_url') ); ?>"><?php the_author(); ?></a></h5>
                            <p class="date"><?php the_time('F d'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
			</div>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>
    
<?php get_footer(); ?>