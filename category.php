<?php 
get_header();

get_template_part('section/navigation-main') 
?>


<div class="page-area tags category">
    <div class="container">
        <div class="row clearfix">
            <div class="content">
                <div class="header post-header">
                    <h2 class="title">Category: <?php single_cat_title(); ?></h2>
                </div>  
                <div class="two-column">
                    <?php while(have_posts()) : the_post(); ?>
                        <?php get_template_part('section/post/category-post') ?>
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