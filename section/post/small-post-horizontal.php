<?php 
    $small_thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-thumb-small');
?>
<div class="article">
    <div class="thumb">
        <img src="<?php echo $small_thumb[0]; ?>" alt="<?php the_title(); ?>">
    </div>
    <div class="text">
        <h3 class="headline">
            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 6, ' ...' ); ?></a>
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