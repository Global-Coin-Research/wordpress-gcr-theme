<div id="testimonial-slideshow" class="testimonial-slideshow clearfix">
    <a class="slide" href="https://globalcoinresearch.com/partners/">
        <?php
            // add the portfolio list from the external data file
            get_template_part('data/all-testimonials.php');
            dd($testimonials);
            
            foreach ($testimonials as $testimonial) {
                $type = $testimonial['type'];
                if($type == "company"){
        ?>
            <div class="user-image">
                <img class="lazy" src="<?php echo get_template_directory_uri(); ?>/img/partners/square/<?php echo $testimonial['image']; ?>" alt=""/>
            </div>
            <div class="user-info">
                <h4>Sweatcoin</h4>
                <p>PortCo Since 2021</p>
            </div>
            <blockquote class="testimonial">
                <p>@Globalcoinrsrch has been really helpful as an investor!</p>
            </blockquote>
            <?php
                }
            }
            ?>
        
    </a>
</div>