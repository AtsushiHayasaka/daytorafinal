<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!--reset css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <!-- ファビコン -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>image/favicon.png">
    <!-- jquery & iScroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <!-- Wow  -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <!-- font awesome -->

    <!-- common -->
    <?php if (is_front_page()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php elseif (is_archive()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_news.css">
    <?php elseif (is_single()) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_singlenews.css">
    <?php elseif (is_page('story')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_story.css">
    <?php elseif (is_page('comments')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_comments.css">
    <?php elseif (is_page('cast')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_cast.css">
    <?php elseif (is_page('contact')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_contact.css">
    <?php elseif (is_page('')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php else : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_contact.css">
    <?php endif; ?>

    <!-- script -->

    <?php wp_head(); ?>
</head>