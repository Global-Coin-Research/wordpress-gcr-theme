<?php 
/*
Template Name: Landing Template
*/
?>
<?php get_template_part('header-landing') ?>


<?php get_template_part('slider-landing') ?>

<div class="flagship-section">
    <div class="container clearfix">
        <div class="row clearfix">
            <div class="section-title-2">
				<h2>Our Community</h2>
                <p class="section-moto">$GCR is the native token of the community. By holding a set number of $GCR in your cryptowallet, community members are able to enjoy and participate in various events, deals and resources.</p>
			</div>
            <div class="four-widget clearfix">
                <?php if(is_active_sidebar('community_widget_1' )){ dynamic_sidebar('community_widget_1'); }else{ ?>
                <div class="flagship">
                    <h2 class="title"><span class="larger">30K</span> Subscribers</h2>
                    <a href="#" class="tag">Content</a>
                    <p class="category">Content & Newsletter</p>
                    <p class="excerpt">Join alongside founders, investors, media and 30,000 other subscribers learning about the web3 space. Get the latest insights, trends and alerts from the community.</p>
                    <a href="http://eepurl.com/dvD3FH" class="btn">Subscribe</a>
                </div>
                <?php  }  ?>
                
                <?php if(is_active_sidebar('community_widget_2' )){ dynamic_sidebar('community_widget_2'); }else{ ?>
                <div class="flagship">
                    <h2 class="title"><span class="larger">Weekly</span>Hangouts</h2>
                    <a href="#" class="tag">Core</a>
                    <p class="category">Community</p>
                    <p class="excerpt">The core of our community  and daily hangout spot for learners and investors. Join project and deal discussions, AMAs and community trivia.</p>
                    <a href="//gcr.community" class="btn">Join the Discord</a>
                </div>
                <?php  }  ?>
                
                <?php if(is_active_sidebar('community_widget_3' )){ dynamic_sidebar('community_widget_3'); }else{ ?>
                <div class="flagship">
                    <h2 class="title"><span class="larger">+100</span>Various Events</h2>
                    <a href="#" class="tag">Social</a>
                    <p class="category">Events</p>
                    <p class="excerpt">Virtual and IRL events. From meeting founders and NFT artists on Discord to happy hours at sleek venues around the world.</p>
                    <a href="https://globalcoinresearch.com/gcr-events/" class="btn">Check the calender</a>
                </div>
                <?php  }  ?>
                
                <?php if(is_active_sidebar('community_widget_4' )){ dynamic_sidebar('community_widget_4'); }else{ ?>
                <div class="flagship">
                    <h2 class="title"><span class="larger">+26mn</span>Invested</h2>
                    <a href="#" class="tag">Investment</a>
                    <p class="category">Deal Flow</p>
                    <p class="excerpt">$GCR members have cumulatively invested in over 30+ deals, in the sizes of over $800k+ for Pre-Seed and Seed fundraises, $5mn+in Liquidity Mining rounds, and over $20m in Growth Equity.</p>
                    <a href="https://globalcoinresearch.com/gcr-deals-faq/" class="btn">Past Deals</a>
                </div>
                <?php  }  ?>
            </div>
        </div>
    </div>
</div>

<div class="newsletter-section bg-dark-blue" id="subscription">
    <div class="container clearfix">
        <div class="row clearfix">
            <?php 
                if(is_active_sidebar('subscription_header' )){
                    dynamic_sidebar('subscription_header');
                }else{
            ?>
            <div class="subscribe-text">
                <h3>Crypto insights you won’t delete.<br/>
                    delivered to your inbox weekly.</h3>
            </div>
            <?php
                } 
            ?>
            <div class="subscribe-form horizontal">
                <?php get_template_part('subscription-form'); ?>
            </div>
        </div>
    </div>
</div>

<div class="pricing-section">
    <div class="container clearfix">
        <div class="row">
            <div class="section-title-2">
				<h2>3 Tiers of Hodling</h2>
                <p class="section-moto">$GCR is the native token of the community. By holding a set number of $GCR in your cryptowallet, community members are able to enjoy and participate in various events, deals and resources.</p>
			</div>
            <div class="pricing-area clearfix">
                <?php if(is_active_sidebar('tier_1' )){ dynamic_sidebar('tier_1'); }else{ ?>
                <div class="single-pricing">
                    <div class="head">
                        <h3>Tier 1 - Pioneer</h3>
                    </div>
                    <div class="body">
                        <ul class="tick">
                            <li>Access to All Community Investment Calls</li>
                            <li>Research and Content on GlobalCoinResearch.com</li>
                            <li>Weekly Newsletter and Updates</li>
                            <li>Educational and Research Calls</li>
                            <li>Governance Discussions</li>
                            <li>Virtual and IRL Community Hangouts Around the World</li>
                        </ul>
                        <a href="//gcr.community" class="btn btn-dark action">Start</a>
                    </div>
                </div>
                <?php  }  ?>
                
                <?php if(is_active_sidebar('tier_2' )){ dynamic_sidebar('tier_2'); }else{ ?>
                <div class="single-pricing">
                    <div class="head">
                        <h3>Tier 2 - Gold</h3>
                    </div>
                    <div class="body">
                        <ul class="tick">
                            <li>Access to All Community Investment Calls</li>
                            <li>Research and Content on GlobalCoinResearch.com</li>
                            <li>Weekly Newsletter and Updates</li>
                            <li>Educational and Research Calls</li>
                            <li>Governance Discussions</li>
                            <li>Virtual and IRL Community Hangouts Around the World</li>
                            <li>Access to Investment Threads and Discussions</li>
                            <li>Sponsorships and Complimentary Pioneer Referrals</li>
                        </ul>
                        <a href="//gcr.community" class="btn btn-dark action">Start</a>
                    </div>
                </div>
                <?php  }  ?>
                
                <?php if(is_active_sidebar('tier_3' )){ dynamic_sidebar('tier_3'); }else{ ?>
                <div class="single-pricing">
                    <div class="head">
                        <h3>Tier 3 - Gold PRO</h3>
                    </div>
                    <div class="body">
                        <ul class="tick">
                            <li>Access to All Community Investment Calls</li>
                            <li>Research and Content on GlobalCoinResearch.com</li>
                            <li>Weekly Newsletter and Updates</li>
                            <li>Educational and Research Calls</li>
                            <li>Governance Discussions</li>
                            <li>Virtual and IRL Community Hangouts Around the World</li>
                            <li>Access to Investment Threads and Discussions</li>
                            <li>Sponsorships and Complimentary Pioneer Referrals</li>
                            
                            <li>Guaranteed Investment Allocation</li>
                            <li>Monthly Airdrops</li>
                            <li>Deal Recap Calls</li>
                            <li>Participate in the Exclusive GCR Angel Network</li>
                        </ul>
                        <a href="//gcr.community" class="btn btn-dark action">Start</a>
                    </div>
                </div>
                <?php  }  ?>
            </div>
        </div>
    </div>
</div>

<div class="blank-section">
    <div class="container">
        <div class="row clearfix">
            <h3>Want to learn more about our tokenomics? <a href="https://globalcoinresearch.com/2021/08/27/gcr-tokenomics/"> Go here</a>.</h3>
        </div>
    </div>
</div>

<div class="bg-blue call-to-action">
    <div class="container">
        <div class="row clearfix">
            <ul class="get_gcr">
                <li>
                <span class="btn action" id="get_gcr">Get $GCR <i class="fas fa-angle-down"></i></span>
                    <ul class="sub_gcr">
                        <li><a href="https://app.uniswap.org/#/swap?inputCurrency=0x6307b25a665efc992ec1c1bc403c38f3ddd7c661&outputCurrency=0xa0b86991c6218b36c1d19d4a2e9eb0ce3606eb48&chain=mainnet">Uniswap</a></li>
                        <li><a href="https://quickswap.exchange/#/swap?inputCurrency=0x2791bca1f2de4661ed88a30c99a7a9449aa84174&outputCurrency=0xa69d14d6369e414a32a5c7e729b7afbafd285965">QuickSwap (Polygon)</a></li>
                    </ul>
                </li>
            </ul>
            
        </div>
    </div>
</div>
    
<?php get_template_part( 'footer-2'); ?>