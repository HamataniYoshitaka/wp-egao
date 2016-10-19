<?
/**
* 404ページ
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
require_once(dirname(__FILE__) . '/parts/nav-mobile.php');
?>
<div class="bg-white bg-pattern">

    <div class="container" style="padding-top: 100px; padding-bottom: 100px;">
        <h1 class="text-center line-height-15">
            <img src="<? bloginfo('template_directory') ?>/compass/images/top-title-news.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-news@2x.png 2x"><br>
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <h4 class="text-center bold tracking-1">お知らせ</h4>

        <div class="row" style="margin-top: 80px; margin-bottom: 60px;">
            <div class="col-sm-8 col-md-9">
                <? // Newsを検索するループを作成
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                );
                $my_query = new WP_Query($args);
                while ( $my_query->have_posts() ) : $my_query->the_post();
                if(has_post_thumbnail()) {	// サムネ画像が保存されてたら表示
                    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
                    $url =  $image_url[0];
                }
                else { /* サムネ画像が無かった場合 */
                    $url = get_template_directory_uri() . '/compass/images/thumbnail-alt.jpg';
                }
                $cat = get_the_category();
                $cat = $cat[0];
                ?>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<? the_permalink(); ?>">
                            <img class="img-responsive" src="<? echo $url ?>">
                            <span class="news-category-tab"><?php echo get_cat_name($cat->term_id); ?></span>
                        </a>
                    </div>
                    <div class="col-sm-8">
                        <h6><? the_date('Y.m.d') ?></h6>
                        <h4><a class="bold color-default" href="<? the_permalink(); ?>"><? the_title(); ?></a></h4>
                        <p><? the_excerpt(); ?></p>
                    </div>
                </div><!-- /.row -->
                <hr class="hr-dotted">
            <? endwhile; ?>
            </div><!-- /.col -->
            <div class="col-sm-4 col-md-3">
                <? get_sidebar(); ?>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.bg-white -->
<? get_footer(); ?>
