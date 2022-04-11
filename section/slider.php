<div class="slider-area slider-content bg-blue clearfix">
    <div class="container slider-container">
        <div id="slider-content" class="slider clearfix">
            <?php 
                $the_query = new WP_Query( array(
                    'category_name' => 'GCR Exclusive',
                    'posts_per_page' => 10
                )); 
            ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php get_template_part('section/post/slider-post') ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="slider-nav">
            <ul>
                <li><span class="prev"><i class="icon icon-left-open"></i></span></li>
                <li><span class="next"><i class="icon icon-right-open"></i></span></li>
            </ul>
        </div>
    </div>
</div>