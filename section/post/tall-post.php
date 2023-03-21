<?php 
    $tall_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-thumb-tall');
?>
<div class="article">
    <div class="thumb">
        <img class="lazy" src="<?php echo $tall_image[0]; ?>" alt="<?php the_title(); ?>">
    </div>
    <div class="text overlay-text">
        <h3>
            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 12, '' ); ?></a>
        </h3>
        <div class="details">
            <p><?php echo wp_trim_words(get_the_content(), 40, ' ...' ) ?></p>
        </div>
        <div class="meta-data">
            <div class="meta-text">
                <h5><?php the_author(); ?></h5>
                <p class="date"><?php the_time('F d, Y'); ?></p>
            </div>
        </div>
    </div>
</div>