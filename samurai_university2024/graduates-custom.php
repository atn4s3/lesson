<?php get_header(); ?>

    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>Event</div>
            <div>イベント</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Post 部分 -->
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title">イベント</div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month">OCT</div>
                              <div class="calendar_day">
                                <span>15</span>
                              </div>
                            </div>
                          </div>
                          <div class="calendar_hour">AM10:00-12:00</div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_header">
                            <img src="images/tags-solid.png" alt="" /> NEWS
                          </div>
                          <div class="news_detail_title">
                            AWSハンズオンセミナー
                          </div>
                          <div class="news_time">
                            <div>
                              <img src="images/clock-regular.png" alt="" />
                              <span>日付：2019年08月18日</span>
                            </div>
                            <div>
                              <img src="images/yen-sign-solid.png" alt="" />
                              <span>参加費：無料</span>
                            </div>
                          </div>
                          <div class="news_post_meta">
                            10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は...
                          </div>

                          <hr />
                          <div class="social_share">
                            <img src="images/facebook-square-brands.png" alt="" />
                            <img src="images/twitter-square-brands.png" alt="" />
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

        <!--  Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
   
    <?php get_footer(); ?>