<?php

/*
Template Name: Portfolio Page
*/
get_header();
?>

<?php get_template_part('section/navigation-main') ?>

<div class="portfolio-section">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="section-title">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="portfolio-area">
            <div class="clearfix linking-area">
                <div class="sorting">
                    <span class="portsort active" data-show="item">All</span>
                    <span class="portsort" data-show="defi">DeFi</span>
                    <span class="portsort" data-show="gaming">Gaming</span>
                    <span class="portsort" data-show="infrastructure">Infrastructure</span>
                    <span class="portsort" data-show="consumer">Consumer</span>
                    <span class="portsort" data-show="other">Other</span>
                </div>
                <div class="links">
                    <ul>
                        <li><a href="https://docs.google.com/spreadsheets/d/1VyZaQP7xrDL_0Xlofe2qPikjNdWY4Hu2_ojG_IWvGTY/">All PortCos (doc)</a></li>
                        <li><a href="https://globalcoinresearch.com/jobs" class="linker portsort">PortCo Jobs</a></li>
                    </ul>
                </div>
            </div>
            <div class="portfolios">
            <?php
                // add the portfolio list from the external data file
                require_once('data/all-portcos.php');
                
                foreach ($portfolios as $portfolio) {
                ?>
                    <div id="<?php echo $portfolio['id'] ?>" class="item active <?php echo $portfolio['cat'] ?>" >
                        <a href="<?php echo $portfolio['link'] ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/<?php echo $portfolio['image'] ?>" alt="">
                        </a>
                        <p><?php echo $portfolio['brand'] ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>