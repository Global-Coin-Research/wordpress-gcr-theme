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
</div>

<?php
    // }
?>