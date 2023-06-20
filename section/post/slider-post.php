<div class="slide">
    <div class="slide-img">
        <?php the_post_thumbnail('post-thumb', array('class'=>'lazy')); ?>
    </div>
    <div class="slide-text">
        <!-- <p class="tag"><?php // the_category(', '); ?></p> -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt() ?></p>
        <div class="meta-data">
            <div class="meta-text">
                <h5><?php the_author(); ?></h5>
                <p class="date"><?php the_time('F d, Y'); ?></p>
            </div>
        </div>
    </div>
</div>