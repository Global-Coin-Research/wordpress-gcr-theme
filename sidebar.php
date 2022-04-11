<div class="sidebar">
    
    <div class="livewire">
        <div class="title">
            <h3>Latest News</h3>
        </div>
        <div class="livewire-area clearfix">
            <?php 
                $the_query = new WP_Query( array(
                    'posts_per_page' => 10
                )); 
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                $small_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-thumb-small');
            ?>
        
            <div class="single_wire clearfix">
                <p class="date"><i class="far fa-clock"></i> <?php the_time('F d'); ?></p>
                <h3 class="headline"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 20, ' ...' ); ?></a></h3>
                <img class="image" src="<?php echo $small_thumb[0]; ?>" alt="<?php the_title(); ?>">
            </div>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="clearfix doubel_border">&nbsp;</div>
    
    <?php // if ( class_exists( 'Jetpack_RelatedPosts' ) ) : ?>
		<!-- <div class="recommended-posts-wrap cf">
				<?php // echo do_shortcode( '[jetpack-related-posts]' ); ?>
		</div> -->
	<?php // endif; ?>
    
    <?php dynamic_sidebar('sidebar_widgets'); ?>
</div>