<?php 
get_header();

get_template_part('section/navigation-main') 
?>


<div class="page-area tags category">
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
            </div>
            <?php get_template_part( 'sidebar' ) ?>
        </div>
    </div>
</div>
    

<?php get_footer(); ?>