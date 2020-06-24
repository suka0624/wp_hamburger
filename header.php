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
    <?php wp_head(); ?>
  </head>

  <body <?php body_class() ?>>

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
                    </div>
                  </div>
                </section>
              </div>
              <!-- .f-header__body -->
            </header>
            <!-- .f-header -->
    