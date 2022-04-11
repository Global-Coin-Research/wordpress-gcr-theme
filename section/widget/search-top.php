<div class="searcharea" id="search">
    <span class="search_btn" id="search_trigger"></span>
    <?php 
        if(is_active_sidebar('top_search' )){
            dynamic_sidebar('top_search');
        }
    ?>
</div>