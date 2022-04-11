<footer class="footer">
        <div class="container clearfix">
            <div class="row footer-top">
                <?php 
                    if(is_active_sidebar('contribution_widget' )){
                        dynamic_sidebar('contribution_widget');
                    }else{
                ?>
                <div class="widget">
                    <h4 class="headline">become a contributor</h4>
                    <p>$GCR is a Tokenized Community of Researchers and Investors in the crypto space. Join our community today to get access to all the best investments ideas and deal flow, workshops and direct access to founders and key players in the space.</p>
                </div>
                <?php
                    } 
                ?>
                
                <div class="subscribe-form vertical">
                    <?php get_template_part('subscription-form'); ?>
                </div>
            </div>
            <div class="row footer-bottom">
                <div class="logo-area">
                    <a class="logolink" href="https://globalcoinresearch.com/">GCR</a>
                    <p class="tag"><?php bloginfo('description') ?></p>
                    <?php 
                        if(is_active_sidebar('bottom_social' )){
                            dynamic_sidebar('bottom_social');
                        }else{
                    ?>
                    <div class="socials">
                        <ul class="clearfix">
                            <li><a href="https://www.facebook.com/globalcoinresearch"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com/globalcoinrsrch"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="https://discord.gg/globalcoinresearch"><i class="icon icon-paper-plane"></i></a></li>
                            <li><a href="https://discord.gg/globalcoinresearch"><i class="icon icon-link"></i></a></li>
                        </ul>
                    </div>
                    <?php
                        } 
                    ?>
                </div>
                <?php 
                    if(is_active_sidebar('bottom_footer' )){
                        dynamic_sidebar('bottom_footer');
                    } 
                ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>