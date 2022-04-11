<div class="slider-area bg-blue clearfix">
    <div id="slider" class="container header-slider clearfix">
        <?php 
            $the_query = new WP_Query( array(
                'category_name' => 'GCR Exclusive',
                'posts_per_page' => 10
            )); 
        ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php 
            $slider_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'slider-image');
        ?>
        <div class="slide">
            <div class="slide-img">
                <!-- <img src="<?php echo $slider_image[0]; ?>" alt="<?php the_title(); ?>"> -->
                <?php the_post_thumbnail() ?>
            </div>
            <div class="slide-text">
                <p class="tag"><?php the_category(', '); ?></p>
                <h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 12, '' ); ?></a></h2>
                <p><?php echo wp_trim_words(get_the_content(), 50, ' ...' ) ?></p>
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
    <div class="slide-nav">
        <ul>
            <li><span class="prev"><i class="icon icon-left-open"></i></span></li>
            <li><span class="next"><i class="icon icon-right-open"></i></span></li>
        </ul>
    </div>
</div>