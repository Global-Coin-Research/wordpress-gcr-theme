<?php
/*
Template Name: Testimonial Page
*/
get_header();
get_template_part('section/navigation-main'); 

?>

<div class="testimonial-section">
    <div class="clearfix">
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

<div class="tag-cloud-section">
    <div class="tag-cloud-container">
        <div id="tag-cloud"></div>
    </div>
</div>

<script>
    var entries = [ 

        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-1.png', width: '340', height: '47', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-2.png', width: '300', height: '53', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-3.png', width: '300', height: '68', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-4.png', width: '400', height: '61', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-5.png', width: '260', height: '64', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-6.png', width: '300', height: '54', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-7.png', width: '350', height: '58', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-8.png', width: '400', height: '144', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-9.png', width: '450', height: '72', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-10.png', width: '450', height: '114', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-11.png', width: '350', height: '73', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-12.png', width: '400', height: '138', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-13.png', width: '300', height: '72', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-14.png', width: '350', height: '60', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-15.png', width: '300', height: '83', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-16.png', width: '400', height: '77', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-17.png', width: '350', height: '91', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-18.png', width: '350', height: '79', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-19.png', width: '400', height: '53', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-20.png', width: '350', height: '78', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-21.png', width: '400', height: '72', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-22.png', width: '380', height: '144', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-23.png', width: '450', height: '82', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-24.png', width: '300', height: '88', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-25.png', width: '350', height: '66', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-26.png', width: '450', height: '53', url: '#', target: '_top' },
        { image: '<?php echo get_template_directory_uri(); ?>/img/clouds/cloud-27.png', width: '350', height: '61', url: '#', target: '_top' },

    ];
</script>

<?php get_footer(); ?>