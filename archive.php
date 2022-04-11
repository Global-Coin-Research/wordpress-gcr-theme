<?php get_header(); ?>


<div class="page-area tags category">
    <div class="container">
        <div class="row clearfix">
            <div class="content">
                <div class="header post-header">
                    <h2 class="title">Archive: <?php the_archive_title() ?></h2>
                </div>  
                <div class="two-column">
                    <?php while(have_posts()) : the_post(); ?>
                    <div class="news column">
                        <div class="news-thumb">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="news-text">
                            <p class="tag"><?php the_category(', '); ?></p>
                            <h3 class="news-headline">
                                <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 5, ' ...' ); ?></a>
                            </h3>
                            <div class="details">
                                <p><?php echo wp_trim_words(get_the_content(), 15, ' ...' ) ?></p>
                            </div>
                            <div class="meta-data">
                                <div class="meta-text">
                                    <h5><a href="<?php echo esc_url(get_the_author_meta('user_url') ); ?>"><?php the_author(); ?></a></h5>
                                    <p class="date"><?php the_time('F d'); ?></p> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php get_template_part( 'sidebar' ) ?>
        </div>
    </div>
</div>
    

<?php get_footer(); ?>