<div class="slide">
    <div class="slide-img">
        <?php the_post_thumbnail() ?>
    </div>
    <div class="slide-text">
        <p class="tag"><?php the_category(', '); ?></p>
        <h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 10, '' ); ?></a></h2>
        <p><?php the_excerpt() ?></p>
        <div class="meta-data">
            <div class="meta-text">
                <h5><?php the_author(); ?></h5>
                <p class="date"><?php the_time('F d'); ?></p>
            </div>
        </div>
    </div>
</div>