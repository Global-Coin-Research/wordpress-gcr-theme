<?php 
get_header();

get_template_part('section/navigation-main') 
?>


<div class="page-section">
    <div class="container">
        <div class="row clearfix">
            <div class="content">
                <div class="header post-header">
                    <h2 class="title">Archive: <?php the_archive_title() ?></h2>
                </div>  
                <div class="two-column">
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('section/post/default') ?>
                    <?php endwhile; ?>
                </div>
                <div class="posts_pagination clearfix">
                    <?php 
                        the_posts_pagination( array(
                            'mid_size' => 3,
                            'prev_text' => __( '<<', 'textdomain' ),
                            'next_text' => __( '>>', 'textdomain' ),
                            ) );
                    
                    ?>
                </div>
            </div>
            <?php get_template_part( 'sidebar' ) ?>
        </div>
    </div>
</div>
    

<?php get_footer(); ?>