<?php
/*
Template Name: 卒業生の声
Template Post Type: graduates
*/
?>

<?php get_header(); ?>

<?php if(have_posts()) :  ?>

    <div class="home">
        <div class="breadcrumbs_container">
            <div class="image_header">
                <div class="header_info">
                    <?php
                    $cat = get_the_category();
                    $catslug = $cat[0]->slug;
                    $catname = $cat[0]->cat_name;
                    ?>
                    <div><?php echo $catslug; ?></div>
                    <div><?php echo $catname; ?></div>
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

            <?php  endif; have_posts() ?>
            <?php get_sidebar(); ?>
            <div class="col-lg-8">
                <?php
            // 現在の投稿を除外するためにIDを取得
            global $post;
            $excluded_posts = array($post->ID);
            
            // 追加の投稿を取得
            $additional_posts = new WP_Query(array(
                'post_type' => 'graduates',
                'posts_per_page' => 2, // 表示する追加投稿の数
                'post_status' => 'publish',
                
                ));
                
                
                
                remove_all_filters('pre_get_posts');
                $additional_posts = new WP_Query(array(
                    'post_type' => 'graduates',
                    'posts_per_page' => 2,
                    'post_status' => 'publish'
                    ));
                    
                    if ($additional_posts->have_posts()) :
                        while($additional_posts->have_posts()) :
                            $additional_posts->the_post();
                            ?>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                    <?php 
                endwhile;  endif; 
                
                    wp_reset_postdata(); ?>
        </div>
        <!--  Sidebar -->
        
        <div class="col-lg-4" style="background-color: #2b7b8e33">
                <div class="sidebar">
                
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>