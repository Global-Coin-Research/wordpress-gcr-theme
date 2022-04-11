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
                <h5><?php the_author(); ?></h5>
                <p class="date"><?php the_time('F d'); ?></p>
            </div>
        </div>
    </div>
</div>