<?php get_header() ?>

<main class="main">
  <article class="article">
    <section class="f-section--top">
      <div class="f-section--top__body">
        <div class="l-unit--top">
          <div class="l-unit--top__header">
            <div class="o-heading--top">
              <span class="o-heading--top__label">
                ダミーサイト
              </span>
            </div>
          </div>
          <div class="l-unit--top__image">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/front_page/front_top.png">
          </div>
        </div>
      </div>
    </section>
    <section class="f-section--branchMenu">
      <div class="f-section--branchMenu__body">
        <div class="l-cols--branchMenu">
          <div class="l-cols--branchMenu__col">
            <div class="o-action--branchMenu">
              <div class="l-unit--branchMenu">
                <a href="
                  <?php
                    $category = get_category_by_slug('takeout');
                    echo get_category_link( $category->cat_ID );
                  ?>
                " class="l-unit--branchMenu__link">
                  <div class="l-unit--branchMenu__header">
                    <div class="o-heading--branchMenu">
                      <h2 class="h2 o-heading--branchMenu__item">
                        Take Out
                      </h2>
                    </div>
                  </div>
                  <div class="l-unit--branchMenu__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/front_page/branch_takeout.png">
                  </div>
                  <div class="l-unit--branchMenu__description">
                    <div class="l-rows--branchMenu">
                      <div class="l-rows--branchMenu__row">
                        <div class="l-unit--menuInfo">
                          <div class="l-unit--menuInfo__header">
                            <div class="o-heading--menuInfo">
                              <p class="o-heading--menuInfo__item">小見出しが入ります</p>
                            </div>
                          </div>
                          <div class="l-unit--menuInfo__description">
                            <div class="o-message--menuInfo">
                              <p class="o-message--menuInfo__item">
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="l-rows--branchMenu__row">
                        <div class="l-unit--menuInfo">
                          <div class="l-unit--menuInfo__header">
                            <div class="o-heading--menuInfo">
                              <p class="o-heading--menuInfo__item">小見出しが入ります</p>
                            </div>
                          </div>
                          <div class="l-unit--menuInfo__description">
                            <div class="o-message--menuInfo">
                              <p class="o-message--menuInfo__item">
                                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="l-cols--branchMenu__col">
          </div>
        </div>
      </div>
    </section>
    <section class="f-section--access"></section>
  </article>
</main>

<?php get_footer();