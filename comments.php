
<div class="comment-area">
    <ul class="comments_list">
        <?php wp_list_comments( ); ?>
    </ul>
    <?php
        if(!comments_open()){
            echo "<h4 class='headline'>Comments are closed</h4>";
        }
    ?>
    <?php comment_form();?>
</div>