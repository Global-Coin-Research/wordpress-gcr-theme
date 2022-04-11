    <footer class="footer">
        <div class="container clearfix">
            <div class="row footer-top">
                <div class="invitation">
                    <h4 class="headline">Become a member</h4>
                    <p>GCR is a Tokenized DAO of Researchers and Investors in the crypto space. Join alongside founders, investors, media and 30,000 other subscribers learning about the Web3 space and get the latest insights, trends and alert.</p>
                </div>
                
                <div class="subscribe-form vertical">
                    <?php get_template_part('section/subscription-form'); ?>
                </div>
            </div>
            <div class="row footer-bottom">
                <div class="logo-area">
                    <a class="logolink" href="https://globalcoinresearch.com/">GCR</a>
                    <p class="tag">Crypto Research and Investing</p>
                    <?php get_template_part('section/widget/footer_social') ?>
                </div>
                
                <?php get_template_part('section/widget/footer_widgets') ?>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>