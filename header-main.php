<!DOCTYPE html>
<!-- saved from url=(0046) -->
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <meta name="description" content="Art blog">
    <meta name="author" content="Jo-Hann Joseph">
    <meta name="copyright" content="Ripple, inc. Copyright (c) 2015">
    <?php wp_head();?>


  </head>

  <body <?php body_class();?>>
    <div class="row fullWidth">
      <?php include 'navigation/navigation.php';?>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <h1 class="blog-header"><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>
        <hr>
      </div>
    </div>
