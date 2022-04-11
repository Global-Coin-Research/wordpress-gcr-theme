<?php get_header(); ?>


    <div class="page area">
        <div class="container">
            <div class="row clearfix">
                <div class="content">
                    <div class="header">
                        <h2>Register/Sign In</h2>
                    </div>
                    <div class="signin-area">
                        <h3>Register Today and Start Earning GCR Tokens </h3>
                        <form action="#" class="singin" method="post">
                            <fieldset class="field">
                                <label for="first_name">First Name:<span class="red">&#65121;</span></label>
                                <input type="text" name="first-name" id="first_name" placeholder="your first name">
                            </fieldset>
                            <fieldset class="field">
                                <label for="last_name">Last Name:<span class="red">&#65121;</span></label>
                                <input type="text" name="last-name" id="last_name" placeholder="your last name">
                            </fieldset>
                            <button type="submit">Sign In</button>
                        </form>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="section-title">
                        <h3>Related News</h3>
                    </div>
                    <div class="news column">
                        <div class="news-thumb">
                            <img src="img/news-thumb-2.jpg" alt="">
                        </div>
                        <div class="news-text">
                            <a href="#" class="tag"><i class="icon icon-tag"></i> Insight</a>
                            <h3 class="news-headline">Ethereum Layer 2 Needs a Token, discover the new infos</h3>
                            <p>Ethereum Layer 2. It is set to solve major issues that the Ethereum ecosystem faces right now, by providing cheaper fees and faster transactions- that is the value proposition.</p>
                            <div class="meta-data">
                                <div class="meta-img">
                                    <img src="img/thumb.png" alt="">
                                </div>
                                <div class="meta-text">
                                    <h5><a href="#">Yuri Antomv</a></h5>
                                    <p class="date">October 23</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php include_once('footer.php') ?>