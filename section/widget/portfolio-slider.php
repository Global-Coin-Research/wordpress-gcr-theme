<div class="portfolio-slider-section">
    <div class="container">
        <div class="row">
            <div class="heading">
                <h3>GCR has deployed $41M+ in community-sourced capital across 65+ projects to-date</h3>
            </div>
            <div class="module">
                <ul class="scroll1">
                    <?php
                    $slider_images = ['aurora', 'scroll', 'gnosis-safe', 'sui', 'layerzero', 'magic-eden', 'sweat-economy', 'lense', 'decrypt', 'syndicate'];
                    foreach ($slider_images as $image) {
                    ?>
                        <li>
                            <a href="https://globalcoinresearch.com/portfolio" class="p-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/slider/<?php echo $image; ?>.png" />
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="help-text">
                <ul class="tick-notes">
                    <li class="full">Investing in Infrastructure, Social, Gaming, Tooling, Crypto Services, and other Web3 markets</li>
                    <li class="half">Over 500 exclusive opportunities per year</li>
                    <li class="half">50:50 direct Community & Core Team sourced projects</li>
                </ul>
            </div>
        </div>
    </div>
</div>