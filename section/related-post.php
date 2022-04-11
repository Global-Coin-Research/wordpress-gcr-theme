<div class="related_post">
    <div class="heading">
        <h3>More from GCR</h3>
    </div>
    
    <?php 
        $the_query = new WP_Query( array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        )); 
    ?>
    
    <div class="three-column clearfix">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php get_template_part('section/post/default') ?>
        <?php endwhile; ?>
    </div>
</div>