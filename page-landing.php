<?php
/*
Template Name: Landing Page Template
*/
?>
<?php
get_header();

get_template_part('section/navigation-minimal');
?>

<div class="header-banner bg-dark-blue clearfix">
    <div class="container clearfix overflow-hidden">
        <div class="header-text">
            <h2>Global Coin Research is a tokenized, decentralized community of learners and investors in <span class="blue">Web3.</span></h2>
            <div class="button-area">
                <a class="btn btn-primary" href="http://eepurl.com/dvD3FH">Subscribe to GCR Weekly</a>
                <a class="btn btn-white" href="https://discord.gg/globalcoinresearch">Join the Community</a>
            </div>
            <div id="testimonial-slideshow" class="testimonial-slideshow clearfix">
                
                <?php
                // add the portfolio list from the external data file
                require_once('data/all-testimonials.php');
                shuffle($testimonials);
                foreach ($testimonials as $testimonial) {
                    $type = $testimonial['type'];
                    $showable = isset($testimonial['showable']) ? true : false;
                    if ($type == "company" && $showable) {
                ?>
                    <a class="slide" href="https://globalcoinresearch.com/partners/">
                        <div class="user-image">
                            <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/partners/square/<?php echo $testimonial['image']; ?>" alt="" />
                        </div>
                        <div class="user-info">
                            <h4><?php echo $testimonial['author_short'] ?></h4>
                            <p>PortCo Since 2021</p>
                        </div>
                        <blockquote class="testimonial">
                            <p><?php echo $testimonial['text'] ?></p>
                        </blockquote>
                    </a>
                <?php
                    }
                }
                ?>

                
            </div>
        </div>
        <?php
        get_template_part('section/slider-landing');
        ?>
    </div>
</div>

<?php
get_template_part('section/widget/portfolio-slider');

?>

<?php get_template_part('section/flagship') ?>

<?php get_template_part('section/subscription-horizontal') ?>

<?php get_template_part('section/tiers') ?>

<?php get_template_part('section/cta/fan-board') ?>

<?php get_template_part('section/cta/learn-tokenomics') ?>

<?php get_template_part('section/cta/get-gcr') ?>

<?php get_template_part('section/gcr-news') ?>

<?php get_template_part('section/footer-minimal'); ?>