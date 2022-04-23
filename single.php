<?php get_header(); ?>

<div class="page-area single-post">
    <div class="container">
        <div class="row clearfix">
            <div class="content">
                <?php while(have_posts()) : the_post(); ?>
                <?php 
                    $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-img-full');
                ?>
                <div class="header post-header">
                    <h2 class="title"><?php the_title(); ?></h2>
                </div>
                <div class="post-meta clearfix">
                    <div class="meta-data">
                        <div class="meta-text">
                            <h5><a href="<?php echo esc_url(get_the_author_meta('user_url') ); ?>"><?php the_author(); ?></a></h5>
                            <p class="date"><?php the_time('F d'); ?></p>
                        </div>
                    </div>
                    <div class="tags-meta">
                        <i class="icon icon-tags"></i>
                        <?php the_category(' '); ?>
                    </div>
                    <div class="comment-meta">
                    <i class="icon icon-chat"></i> <span><?php comments_number(); ?></span>
                    </div>
                </div>
                <div class="description">
                    <?php
                        if(has_post_thumbnail()){
                    ?>
                    <div class="post-image-area clearfix">
                        <div class="post-image">
                            <img src="<?php echo $post_image[0]; ?>" alt="<?php the_title(); ?>">
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
                    <?php the_content(); ?>
                </div>
                <?php endwhile; ?>
                <?php 
                    if ( comments_open() ) {
					    comments_template();
				    }  
                ?>
            </div>
            
            <?php get_template_part( 'sidebar' ) ?>
        </div>
        
        <div class="row clearfix">
            <?php get_template_part('section/related-post') ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>