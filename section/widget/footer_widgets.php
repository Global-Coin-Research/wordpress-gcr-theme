<?php 
    // if(is_active_sidebar('footer_widgets' )){
    //    dynamic_sidebar('footer_widgets');
    // }else{
?>
<div class="widget">
    <h5>Categories</h5>
    <div class="textwidget">
        <ul>
            <li><a href="https://globalcoinresearch.com/category/gcr-exclusive/">GCR Exclusive Insight</a></li>
            <li><a href="https://globalcoinresearch.com/category/gcr/">GCR Announcement</a></li>
            <li><a href="https://globalcoinresearch.com/category/monthly-special/">Monthly Specials</a></li>
        </ul>
    </div>
</div>
<div class="widget">
    <h5>Media Mining</h5>
    <div class="textwidget">
        <ul>
            <li><a href="https://globalcoinresearch.com/how-to-submit-contributor-posts/gcr-article-submission-guidelines/">GCR Media Mining Instructions</a></li>
            <li><a href="https://globalcoinresearch.com/wp-admin/edit.php?post_type=post">My Posts</a></li>
            <li><a href="https://globalcoinresearch.com/wp-admin/post-new.php">Write New Post</a></li>
        </ul>
    </div>
</div>

<div class="widget">
    <h5>Settings</h5>
    <?php 
        wp_nav_menu( array(
            'theme_location' => 'footer-setting',
            'container' => 'div',
            'container_class' => 'textwidget',
            'container_id' => 'footer-setting',
            'fallback_cb' => false
        ) ) 
    ?>
    <!-- <div class="textwidget">
        <ul>
            <li><a href="https://globalcoinresearch.com/register" rel="nofollow">Register</a></li>
            <li><a href="https://globalcoinresearch.com/login-3/" rel="nofollow">Log in</a></li>
            <li><a href="https://globalcoinresearch.com/wp-login.php?action=logout&amp;_wpnonce=e2f0c21445" rel="nofollow">Log Out</a></li>
            <li><a href="https://docs.google.com/presentation/u/1/d/19SKdjJsm5E97EdISDyiqMomHhoDxMH7VCJFapcOFlKU/edit#slide=id.p4">Brand Guidelines</a></li>
        </ul>
    </div> -->
</div>

<?php
    // }
?>