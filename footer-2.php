    <footer class="minimal-footer clearfix">
        <div class="container clearfix">
            <div class="row footer-row clearfix">
                <div class="logo-area">
                    <a href="https://globalcoinresearch.com/" class="logolink blacklogo">GCR</a>
                    <p class="tag"><?php bloginfo('description') ?></p>
                    <?php 
                        if(is_active_sidebar('bottom_social_2' )){
                            dynamic_sidebar('bottom_social_2');
                        }else{
                    ?>
                    <div class="socials">
                        <ul class="clearfix">
                            <li><a class="discord_link" href="https://discord.com/invite/KKHtbTwxkn"><i class="icon discord"></i></a></li>
                            <li><a href="https://twitter.com/globalcoinrsrch"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="https://t.me/joinchat/ROZYvMlDh-LCrodz"><i class="icon icon-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <?php
                        } 
                    ?>
                </div>
                <?php 
                    if(is_active_sidebar('bottom_corner_nav' )){
                        dynamic_sidebar('bottom_corner_nav');
                    }else{
                ?>
                        <ul class="clearfix">
                            <li><a href="https://www.coingecko.com/en/coins/global-coin-research">Buy $GCR</a></li>
                            <li><a href="https://discord.gg/globalcoinresearch">Community</a></li>
                            <li><a href="https://globalcoinresearch.com/content/">Content</a></li>
                        </ul>
                <?php
                    } 
                ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>