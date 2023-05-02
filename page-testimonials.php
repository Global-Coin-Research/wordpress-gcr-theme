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
                <p>This is what our partners and community members said about us</p>
            </div>
        </div>
        <div class="testimonial-area">
            <div class="testimonials">
            <?php
                // add the portfolio list from the external data file
                require_once('data/all-testimonials.php');
                
                foreach ($testimonials as $testimonial) {
                    $type = $testimonial['type'];
                    $logo = "<img src='".get_template_directory_uri()."/img/partners/".$testimonial['image']."' alt=''>";
                ?>
                    <div class="item">
                        <?php if($type=="company"){ ?>
                            <a class="image" href="<?php echo $testimonial['logo_link']; ?>" target="_blank"><?php echo $logo; ?></a>
                        <?php }else{ ?>
                            <div class="image"><?php echo $logo; ?></div>
                        <?php } ?>
                            
                        <div class="text">
                            <blockquote><?php echo $testimonial['text'] ?></blockquote>
                            <div class="author">
                                <a href="<?php echo $testimonial['author_link']; ?>" class="name" target="_blank"><?php echo $testimonial['author'] ?></a>
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