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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque. Animi rem architecto non sint neque eum molestias quam voluptas!</p>
            </div>
        </div>
        <div class="testimonial-area">
            <div class="testimonials">
            <?php
                // add the portfolio list from the external data file
                require_once('data/all-testimonials.php');
                
                foreach ($testimonials as $testimonial) {
                ?>
                    <a class="item" href="<?php echo $testimonial['link'] ?>" target="_blank">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/testimonials/<?php echo $testimonial['image'] ?>" alt="">
                        </div>
                        <div class="text">
                            <h4 class="author"><?php echo $testimonial['author'] ?></h4>
                            <p class="position"><?php echo $testimonial['position'] ?></p>
                        </div>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>