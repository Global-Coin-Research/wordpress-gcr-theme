<div class="posts_pagination clearfix">
    <?php 
        the_posts_pagination( array(
            'mid_size' => 3,
            'prev_text' => __( '<<', 'textdomain' ),
            'next_text' => __( '>>', 'textdomain' ),
            ) );

    ?>
</div>