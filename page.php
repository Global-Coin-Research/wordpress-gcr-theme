<?php 
get_header();

get_template_part('section/navigation-main') 
?>


<div class="page-area">
    <div class="container">
        <div class="row clearfix">
            <div class="content post-details">
                <?php while(have_posts()) : the_post(); ?>
                    <div class="header">
                        <h2 class="title"><?php the_title(); ?></h2>
                    </div>
                    <div class="description">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php get_template_part( 'sidebar' ) ?>
        </div>
    </div>
</div>
    

<?php get_footer(); ?>