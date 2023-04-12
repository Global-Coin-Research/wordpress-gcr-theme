<?php
/*
Template Name: Testimonial Page
*/
get_header();
get_template_part('section/navigation-main'); 

?>

<div class="testimonial-section">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="section-text">
                <p>This is what our members said about us</p>
            </div>
        </div>
        <div class="testimonial-area">
            <div class="testimonials">
            <?php
                // add the portfolio list from the external data file
                require_once('data/all-testimonials.php');
                
                foreach ($testimonials as $testimonial) {
                ?>
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/testimonials/<?php echo $testimonial['image'] ?>" alt="">
                        </div>
                        <div class="text">
                            <blockquote><?php echo $testimonial['text'] ?></blockquote>
                            <div class="author">
                                <h4 class="name"><?php echo $testimonial['author'] ?></h4>
                                <!-- <p class="position"><?php // echo $testimonial['position'] ?></p> -->
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>