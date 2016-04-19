<!DOCTYPE html>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <title>Hum</title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css"><?php wp_enqueue_script("jquery"); ?><?php wp_head(); ?>
</head>

<body>
    <div class="header">
        <div class="title">
            <div class="col-xs-6">
                <div class="panel-heading panel-width">


                
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" position="absolute" class="hum-title" ><?php bloginfo( 'name' ); ?></a></h1>


<!-- 	        <img class="menu-menu" src=<?php echo get_template_directory_uri () . "/images/menu.png"?>  style="width:36px;height:36px;" > -->

                </div>
            </div>
        </div>
        

        <div class="menu" id="menuID">

            <h6 class="menu-menu">Menu</h6>

            <div class="menu-items">
                <h6 class="menu-add-course">Add course</h6>

                <h6 class="menu-library">Library</h6>

                <h6 class="menu-settings">Settings</h6>

                <h6 class="menu-log-out">Log out</h6>
            </div>
        </div>
    </div>
</body>
</html>
