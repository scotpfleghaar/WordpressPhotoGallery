<!DOCTYPE html>
<html>

<head>
    <meta charset-"<?php bloginfo('charset'); ?>">
    <title>Wordpress Photo Gallery</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header class="w3-container w3-teal">
        <div class="w3-row">
            <div class="w3-col m9 l9">
                <h1><?php bloginfo('name'); ?></h1>
            </div>
            <div class="w3-col m3 l3">
                <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <input class='w3-input' type="text" name="s" placeholder="Search...">
                </form>
            </div>
        </div>
    </header>

    <div class="w3-row">
        <div class="w3-col m3 l3">
           <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar') ?>
           <?php endif?>
        </div>
         <div class="w3-col m9 l9">