<?php while(have_posts()) : the_post(); ?>
<?php 
    $post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-img-full');
    $post_opengraph_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'post-thumb-small');
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GCR is a Community of Investors & Researchers in Web3">
    <meta property="og:image" content="<?php echo $post_image[0]; ?>" />
	<meta property="og:image:secure_url" content="<?php echo $post_image[0]; ?>" />
    <meta property="og:image:secure_url" content="<?php echo $post_image[0]; ?>" />
	<meta property="og:image:width" content="800" />
	<meta property="og:image:height" content="540" />
    <meta name="twitter:data1" content="GCR">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('section/navigation-main') ?>

<div class="page-area single-post">
    <div class="container">
        <div class="row clearfix">
            <div class="content">
                
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
<?php endwhile; ?>