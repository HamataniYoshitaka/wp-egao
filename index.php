<?
/**
* インデックスページのテンプレート
*/
get_header(); ?>
<div class="p1" style="position: relative; width; 100%; height: 100%;">
    <? require_once(dirname(__FILE__) . '/parts/nested.php'); ?>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.2);">
        <div class="text-center" style="position: absolute; top: 50%; left: 0; width: 100%; height: 0;">
            <div class="text-center" style="margin-top: -100px;">
                <p class="roboto-condensed tracking-1" style="color: #ffffff;">Orthodontic Office</p>
                <img src="<? bloginfo('template_directory') ?>/compass/images/top-logo.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-logo@2x.png 2x">
            </div>
        </div>
    </div>
    <img style="width:100%; position: absolute; bottom: 0; left: 0; height: auto;" src="<? bloginfo('template_directory') ?>/compass/images/dummy/bg1-top.png">
</div>

<div class="p2" style="position: relative; width: 100%; height: 100%; background-position: center top; background-size: cover; background-image: url(<? bloginfo('template_directory') ?>/compass/images/dummy/bg1-bottom.jpg);">
    <div style="position: absolute; top: 50%; left: 0; width: 100%;">
        <div class="text-center" style="margin-top: -100px;">
            <img src="<? bloginfo('template_directory') ?>/compass/images/top-title-concept.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-concept@2x.png 2x"><br>
            <img style="margin-top: 30px; margin-bottom: 30px;" src="<? bloginfo('template_directory') ?>/compass/images/wave-white.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-white@2x.png 2x">
            <h4 class="bold tracking-1" style="color: #ffffff;">大切にしていること</h4>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 90px; padding-bottom: 60px;">
    <div class="hidden-xs">
        <p class="text-center" style="margin-bottom: 30px;">
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-p2.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-p2@2x.png 2x">
        </p>
        <h2 class="text-center bold tracking-2">
            えがおで暮らす、仕組みをつくる。
        </h2>
        <h3 class="text-center tracking-2"><i>from Hokkaido</i></h3>
        <p class="text-center" style="margin-top: 30px;">
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-p2.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-p2@2x.png 2x">
        </p>
    </div>
    <div class="visible-xs">
        <img class="img-responsive visible-xs" src="<? bloginfo('template_directory') ?>/compass/images/wave-p2.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-p2@2x.png 2x">
        <h2 class="text-center bold tracking-2 line-height-15">
            えがおで暮らす<br>仕組みをつくる
        </h2>
        <h3 class="text-center tracking-2"><i>from Hokkaido</i></h3>
        <img class="img-responsive visible-xs" src="<? bloginfo('template_directory') ?>/compass/images/wave-p2.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-p2@2x.png 2x">
    </div>

    <p class="bold text-center line-height-2" style="margin-top: 60px;">
        はじめまして。<br>
        「矯正歯科 e g a o 」を北海道・札幌の桑園で開院する生野啓一郎と申します。<br>
        <br>
        わたしは矯正歯科の専門医です。<br>
        矯正治療は、それぞれの好み、ライフスタイル、性格など、<br>
        １人１人の個性に合わせてゴールまでたどりつく壮大な治療です。<br>
        また、幾度かの通院で終わるものではなく、<br>
        何年も、それこそ時には世代を超えて長いお付き合いをしていく可能性もございます。<br>
        <br>
        たくさんの皆様と矯正の専門医として丁寧で、深く、<br>
        温かい関係を築きたいと思い開院することにしました。<br>
        矯正歯科 e g a o に来て頂く皆様には、<br>
        きれいで健康的になったという「結果」だけではなく、<br>
        その「過程」も、いつも笑顔で居て欲しいと思っています。<br>
        <br>
        1 人１人が笑顔で暮らせる、その仕組みを、矯正治療でつくっていくこと。<br>
        それが矯正歯科 e g a o のコンセプトです。
    </p>
</div><!-- /.container -->
<div class="bg-white">
    <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
        <h1 class="text-center line-height-15">
            <img src="<? bloginfo('template_directory') ?>/compass/images/top-title-news.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-news@2x.png 2x"><br>
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <h4 class="text-center bold tracking-1">お知らせ</h4>

        <div class="row">
<?
while ( have_posts() ) : the_post();
  if(has_post_thumbnail()) {	// サムネ画像が保存されてたら表示
    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
    $url =  $image_url[0];
  }
  else { /* サムネ画像が無かった場合 */
    $url = get_template_directory_uri() . '/compass/images/thumbnail-alt.jpg';
  }
?>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="<? echo $url ?>">
                    <div class="caption">
                        <h6><? the_date('Y.m.d'); ?></h6>
                        <h3><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h3>
                        <p><? the_excerpt(); ?></p>
                    </div>
                </div>
            </div><!-- /.col -->
<? endwhile; ?>
        </div><!-- /.row -->
    </div>
</div><!-- /.bg-white -->

<div class="container" style="padding-top: 80px; padding-bottom: 80px;">
    <h1 class="text-center line-height-15">
        <img src="<? bloginfo('template_directory') ?>/compass/images/top-title-information.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-information@2x.png 2x"><br>
        <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
    </h1>
    <h4 class="text-center bold tracking-1">当院の情報</h4>
    <br>
    <br>
    <h4 class="text-center">
        <img src="<? bloginfo('template_directory') ?>/compass/images/top-title-timetable.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-timetable@2x.png 2x">
    </h4>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table">
                <thead>
                    <tr>
                        <th>診療時間</th>
                        <td>月</td>
                        <td>火</td>
                        <td>水</td>
                        <td>木</td>
                        <td>金</td>
                        <td>土</td>
                        <td>日</td>
                        <td>祝</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>10:30 - 13:00</th>
                        <td>&#9711;</td>
                        <td>&#9711;</td>
                        <td>&#x2613;</td>
                        <td>&#9711;</td>
                        <td>&#9711;</td>
                        <td>&#9711;</td>
                        <td>&#9651;</td>
                        <td>&#x2613;</td>
                    </tr>

                    <tr>
                        <th>14:30 - 19:00</th>
                        <td>&#9711;</td>
                        <td>&#9711;</td>
                        <td>&#x2613;</td>
                        <td>&#9711;</td>
                        <td>&#9711;</td>
                        <td>&#9651;</td>
                        <td>&#9651;</td>
                        <td>&#x2613;</td>
                    </tr>
                </tbody>
            </table>
            <p class="text-right">
                ※ 木曜日・日曜日隔週休み
            </p>
        </div>
    </div><!-- /.row -->

    <h4 class="text-center">
        <img src="<? bloginfo('template_directory') ?>/compass/images/top-title-children.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-children@2x.png 2x">
    </h4>
    <p class="text-center">週1程度 (14:30-18:00) / 曜日不定(診察カレンダーで確認できます)</p>

    <h4 class="text-center bold tracking-1">アクセス</h4>
    <h1 class="text-center line-height-15">
        <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
    </h1>
    <p class="text-center">札幌市中央区北7条⻄15丁⽬28番地11中央カクマンビル２F</p>

    <h4 class="text-center bold tracking-1">お問い合わせ</h4>
    <h1 class="text-center line-height-15">
        <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
    </h1>
    <p class="text-center">Tel 011-616-1919</p>

</div><!-- /.container -->

<? get_footer(); ?>
