
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
    <!-- <h4 class="headline">Leave a Reply</h4>
    <form action="#" class="comment-form" method="post">
        <textarea name="comment" id="" cols="30" rows="5" placeholder="Enter Your Comment Here..."></textarea>
        <button type="submit">Comment</button>
    </form> -->
</div>