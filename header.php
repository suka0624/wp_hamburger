<?php
/**
 * Header file for the hamburger WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Hamburger
 * @since Hamburger 1.0
 */

?><!DOCTYPE html>

<html <?php language_attributes() ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery & iScroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.drawer').drawer();
        });
    </script>
    <script>
      const elms = document.querySelectorAll(".elements");
      let index;
      elms.forEach((elm) => {
        elm.addEventListener("click", () => {
          index = [].slice.call(elms).indexOf(elm);
        });
      });    
    </script>
    <?php wp_head(); ?>
  </head>

  <body <?php //body_class() ?> class="drawer drawer--right">

    <?php wp_body_open() ?>

      <div class="f-application">
        <div class="f-container">
          <div class="f-container__body">
            <header class="f-header">
              <div class="f-header__body">
                <section class="f-section--header">
                  <div class="f-section--header__body">
                    <div class="l-cols--header">
                      <div class="l-cols--header__col is-logo">
                        <div class="o-logo--hamburger">
                          <h1 class="o-logo--hamburger__item">
                            <?php bloginfo( 'name' ); ?>
                          </h1>
                        </div>
                      </div>
                      <div class="l-cols--header__col is-search">
                        <?php get_search_form(); ?>
                      </div>
                      <div class="l-cols--header__col is-menu">
                        <?php get_sidebar(); ?>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <!-- .f-header__body -->
            </header>
            <!-- .f-header -->
    