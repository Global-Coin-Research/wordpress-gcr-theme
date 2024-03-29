<div class="column article category">
    <div class="thumb">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb', array('class'=>'lazy')); ?></a>
    </div>
    <div class="text">
        <h3 class="headline">
            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 5, ' ...' ); ?></a>
        </h3>
        <div class="details">
            <p><?php echo wp_trim_words(get_the_excerpt(), 15, ' ...' ) ?></p>
        </div>
        <div class="meta-data">
            <div class="meta-text">
                <h5><?php the_author(); ?></h5>
                <p class="date"><?php the_time('F d, Y'); ?></p>
            </div>
        </div>
    </div>
</div>