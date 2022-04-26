<?php 
/*
Template Name: Message Template
*/
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for subscribing - GCR</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="error-content">
        <div class="thank-you tcenter">
            <?php while(have_posts()) : the_post(); ?>
                <div class="header">
                    <h2 class="title"><?php the_title(); ?></h2>
                </div>
                <div class="description">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="four-not-four">
            <div id="back_button">
            </div>            
        </div>
    </div>
    
    <script>
        if(history.length>2){
            var btn = '<span class="btn" onCLick="history.back()">Back to the previous page</span>';
            console.log(history.length);
            
        }else{
            var btn = '<a class="btn" href="/">Back to the previous page</a>'
            console.log(history.length)
        }
        document.getElementById("back_button").innerHTML = btn;

    </script>
</body>
</html>