<header class="site-header header-top header-main">
    <div class="container clearfix">
        <div class="logo">
            <h1><a class="logolink" href="<?php echo get_option("siteurl"); ?>">GCR</a></h1>
        </div>
        <span id="menu">
            <span class="default">&#9776;</span>
            <span class="open">&#9747;</span>
        </span>
        <?php get_template_part('section/widget/navigation') ?>
        
        <?php get_template_part('section/widget/search-top') ?>
    </div>
</header>