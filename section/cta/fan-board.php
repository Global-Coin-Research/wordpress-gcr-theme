<div class="fan-board mt0">
    <div class="container">
        <div class="row clearfix">
            <div class="header section-title">
                <h2>GCR Fan Board</h2>
            </div>
            <?php 
                if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'fan-board-summary', 'slug' ); }
            ?>
            <a class="btn btn-primary btn-large" href="fan-board">Check them all</a>
        </div>
    </div>
</div>