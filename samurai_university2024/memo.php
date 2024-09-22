<?php
        $args = array(
          'post_type'      => 'post',
          'category_name' => 'graduates',
          'post_per_page' => '2',
        );
        $posts = get_posts($args);
        ?>

        <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>
        <div class="graduates_post_small">
          <div class="graduates_post_meta">
            <ul>
              <li>
                <a href="<?php echo get_permalink(); ?>">
                  <?php echo get_the_date(); ?>
                </a>
              </li>
            </ul>
          </div>
          <div class="graduates_post_small_title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </div>
        </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>

        <div class="col-lg-6 col-md-6 col-sx-12 news_col">
        <div class="graduates">GRADUATES</div>
        <div class="graduates_title_sub">卒業生の声</div>
        <?php
        $args = array(
        'post_type'      => 'post',
        'category_name' => 'graduates',
        'posts_per_page' => 3,
        );
        $graduates_posts = new WP_Query($args);
        ?>

        <?php if ($graduates_posts->have_posts()) : ?>
          <?php while ($graduates_posts->have_posts()) : $graduates_posts->the_post(); ?>
          <div class="graduates_post_small">
              <div class="graduates_post_meta">
                  <ul>
                      <li>
                          <a href="<?php the_permalink(); ?>">
                              <?php echo get_the_date(); ?>
                          </a>
                      </li>
                  </ul>
              </div>
              <div class="graduates_post_small_title">
                  <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                  </a>
              </div>
          </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
  <?php endif; ?>


  <?php
get_header();

if ( have_posts() ) : ?>
    <h1><?php single_cat_title(); ?></h1>

    <?php
    while ( have_posts() ) : the_post(); ?>
        <div>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div>
                <?php the_excerpt(); // または the_content(); ?>
            </div>
        </div>
    <?php endwhile;

    the_posts_navigation();

else :
    echo '<p>卒業生の声が見つかりませんでした。</p>';
endif;

get_footer();


<div class="col-lg-4" style="background-color: #2b7b8e33">
          <div class="sidebar">
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">News ニュース</a></li>
                  <li><a href="#">Event イベント</a></li>
                  <li><a href="#">CampusLife 侍の学生</a></li>
                </ul>
              </div>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>Latest Post</h2>
                <div class="section_subtitle">最新記事</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="course">
        <div class="row content-body">
            <div class="col-lg-8">
                <div class="course_tabs_container">
                    <div class="tab_panels">
                        <div class="tab_panel">
                            <div class="tab_panel_title"><?php echo $catname; ?></div>
                            <div class="tab_panel_content">
                                <div class="tab_panel_text">
                                    <div class="news_posts_small">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sx-12">
                                                <div class="calendar_news_border">
                                                    <div class="calendar_news_border_1">
                                                        <div class="calendar_month"><?php echo get_post_time('F' ); ?></div>
                                                        <div class="calendar_day">
                                                            <span><?php echo get_the_date('d'); ?></span><span>日</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="calendar_hour"><?php echo get_post_meta(get_the_ID(), 'time', true); ?></div>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sx-12">
                                                <div class="news_post_small_header">
                                                    <img src="<?php echo get_template_directory_uri();?>/images/tags-solid.png" alt="" />
                                                    <?php echo $catname; ?>
                                                </div>
                                                <div class="news_detail_title">
                                                    <?php the_title(); ?>
                                                </div>
                                                <div class="news-time">
                                                    <div>
                                                    <img src="<?php echo get_template_directory_uri();?>/images/clock-regular.png" alt="" />
                                                    <span>卒業年：<?php echo get_post_meta(get_the_ID(), 'graduate', true); ?> </span>
                                                    </div>
                                                </div>
                                                <div class="news_post_meta">
                                                    <?php the_content(); ?>
                                                </div>

                                                <hr />
                                                <div class="social_share">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt="" />
                                                    <img src="<?php echo get_template_directory_uri(); ?>/images/twitter-square-brands.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile; endif; ?>


            <div class="header_info">
                    <?php
                    $cat = get_the_category();
                    $catslug = $cat[0]->slug;
                    $catname = $cat[0]->cat_name;
                    ?>