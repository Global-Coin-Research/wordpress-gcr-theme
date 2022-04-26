<?php 
get_header();

get_template_part('section/navigation-main') 
?>


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
            </div>
        </div>
    </div>
    

    <?php include_once('footer.php') ?>