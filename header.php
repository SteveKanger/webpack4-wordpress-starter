<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="description" content="<?php bloginfo('description')?>">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title()?></title>

    <?php wp_head()?>

</head>

<body <?php body_class('test')?>>