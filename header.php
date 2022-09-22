<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <?php wp_head(); ?>
 <!-- <link rel="stylesheet" href="css/style.min.css">
  <link
    href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic"
    rel="stylesheet" /> -->

  <title>Bicycle-WP</title>
</head>

<body>

  <div class="wraper">
    <main class="page">

      <header class="header">
      <div class="header__row">
          <nav class="header__menu menu">
              <div class="menu__body">
                  <ul class="menu__list">
                      <li><a href="" class="menu__link"><?php the_field('li1'); ?></a></li>
                      <li><a href="" class="menu__link"><?php the_field('li2'); ?></a></li>
                      <li><a href="" class="menu__link"><?php the_field('li3'); ?></a></li>
                      <li><a href="" class="menu__link"><?php the_field('li4'); ?></a></li>
                  </ul>
              </div>

            <div class="header-menu__icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header-menu">
            </div>
            
          </nav>

        
          
         
          <div class="header__logo"><source srcset="<?php the_custom_logo(); ?></div>

      </div>
   
    
</header>