<?
/**
* インデックスページのテンプレート
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
require_once(dirname(__FILE__) . '/parts/nav-mobile.php');
?>
<div style="position: relative; z-index: 1; width: 100%; height: 100%;">
    <? require_once(dirname(__FILE__) . '/compass/svg/top.php'); ?>
    <div class="hidden-xs" style="position: absolute; top: 50px; left: 50px; width: 300px;">
        <div class="text-center">
            <p class="roboto-condensed tracking-1" style="color: #ffffff;">Orthodontic Office</p>
            <img src="<? bloginfo('template_directory') ?>/compass/images/top-logo.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-logo@2x.png 2x">
        </div>
    </div>
    <div class="text-center visible-xs" style="position: absolute; top: 50px; left: 0; width: 100%;">
        <p class="roboto-condensed tracking-1" style="color: #ffffff;">Orthodontic Office</p>
        <img src="<? bloginfo('template_directory') ?>/compass/images/top-logo.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-logo@2x.png 2x">
    </div>

    <div class="hidden-xs" style="position: absolute; top: 50px; right: 50px; width: 300px;">
        <div class="text-center">
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-white-l.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-white-l@2x.png 2x">
            <p class="tracking-1 bold line-height-2" style="color: #ffffff; font-size: 14px; margin-top: 10px;">えがおで暮らす、<br>仕組みをつくる。</p>
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-white-l.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-white-l@2x.png 2x">
            <h6 class="text-center tracking-2" style="color: #ffffff;"><i>from Hokkaido</i></h6>
        </div>
    </div>

</div>

<div class="p1" style="position: relative; width; 100%; height: 100%;">
    <? require_once(dirname(__FILE__) . '/parts/nested.php'); ?>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3);">
    </div>
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

    <div class="row">
        <div class="col-sm-3">
            <div class="col-p2 hidden-xs">
                <div class="p2-illust-20">
                    <img class="anim-20" src="<? bloginfo('template_directory') ?>/compass/images/animation/20.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/20@2x.png 2x">
                </div>

<?
for ($i=1; $i<=6; $i++) :
    if (!($i == 9 || $i == 10 || $i == 13)) :
?>
                <div class="p2-illust-<? echo $i ?>">
                    <img class="anim-<? echo $i ?>" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>@2x.png 2x">
                </div>
<?
    else :
?>
                <div class="p2-illust-<? echo $i ?>">
                    <img class="anim-<? echo $i ?>-1" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-1.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-1@2x.png 2x">
                    <img class="anim-<? echo $i ?>-2" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-2.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-2@2x.png 2x">
                </div>
<?
    endif;
endfor;
?>
            </div>
        </div><!-- /.col -->

        <div class="col-sm-6">
            <p class="bold text-center line-height-2" style="margin-top: 60px;">
                はじめまして。<br>
                「矯正歯科 e g a o 」を北海道・札幌の桑園で開院する<br class="hidden-xs">生野啓一郎と申します。<br>
                <br>
                わたしは矯正歯科の専門医です。<br>
                矯正治療は、それぞれの好み、ライフスタイル、性格など、<br class="hidden-xs">
                １人１人の個性に合わせてゴールまでたどりつく壮大な治療です。<br>
                また、幾度かの通院で終わるものではなく、<br class="hidden-xs">
                何年も、それこそ時には世代を超えて長いお付き合いをしていく<br class="hidden-xs">可能性もございます。<br>
                <br>
                たくさんの皆様と矯正の専門医として丁寧で、深く、<br class="hidden-xs">
                温かい関係を築きたいと思い開院することにしました。<br>
                矯正歯科 e g a o に来て頂く皆様には、<br class="hidden-xs">
                きれいで健康的になったという「結果」だけではなく、<br class="hidden-xs">
                その「過程」も、いつも笑顔で居て欲しいと思っています。<br>
                <br>
                1 人１人が笑顔で暮らせる、その仕組みを、矯正治療でつくっていくこと。<br>
                それが矯正歯科 e g a o のコンセプトです。
            </p>
        </div><!-- /.col -->

        <div class="col-sm-3">
            <div class="col-p2 hidden-xs">

<?
for ($i=7; $i<=13; $i++) :
    if ($i == 12 || $i == 9) $i++;
    if (!($i == 9 || $i == 10 || $i == 13)) :
?>
                <div class="p2-illust-<? echo $i ?>">
                    <img class="anim-<? echo $i ?>" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>@2x.png 2x">
                </div>
<?
    else :
?>
                <div class="p2-illust-<? echo $i ?>">
                    <img class="anim-<? echo $i ?>-1" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-1.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-1@2x.png 2x">
                    <img class="anim-<? echo $i ?>-2" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-2.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-2@2x.png 2x">
                </div>
<?
    endif;
endfor;
?>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->

</div><!-- /.container -->

<?php // スマホ用
    require_once(dirname(__FILE__) . '/parts/icons-xs.php');
?>



<div class="bg-white bg-pattern rounded-bg">
    <svg class="rounded-bg-top fixed" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
        <path style="fill: #ffffff;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
    </svg>
    <div class="container" style="padding-top: 80px; padding-bottom: 80px;">
        <h1 class="text-center line-height-15">
            <img src="<? bloginfo('template_directory') ?>/compass/images/top-title-news.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-news@2x.png 2x"><br>
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <h4 class="text-center bold tracking-1">お知らせ</h4>

        <div class="row" style="margin-top: 80px; margin-bottom: 50px;">
<?
while ( have_posts() ) : the_post();
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
            <div class="col-md-3">
                <div class="thumbnail news-thumbnail">
                    <a class="image" href="<? the_permalink(); ?>" style="background-image: url(<? echo $url ?>);">
                          <span class="category"><?php echo get_cat_name($cat->term_id); ?></span>
                    </a>
                    <div class="caption">
                        <h6><? the_date('Y.m.d'); ?></h6>
                        <h4><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h4>
                        <p><? the_excerpt(); ?></p>
                    </div>
                </div>
            </div><!-- /.col -->
<? endwhile; ?>
        </div><!-- /.row -->

        <h4 class="text-center">
            <a class="btn btn-egao" href="<? echo home_url(); ?>/news/">MORE&emsp;<img class="more" src="<? bloginfo('template_directory') ?>/compass/images/caret-right.png" srcset="<? bloginfo('template_directory') ?>/compass/images/caret-right@2x.png 2x"></a>
        </h4>
    </div><!-- /.container -->

</div><!-- /.bg-white -->

<div class="rounded-bg">
    <svg class="rounded-bg-top fixed" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
        <path style="fill: #f6f6f4;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
    </svg>
    <div class="container" style="padding-top: 80px; padding-bottom: 120px;">
        <h1 class="text-center line-height-15">
            <img class="hidden-xs" src="<? bloginfo('template_directory') ?>/compass/images/top-title-information.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-information@2x.png 2x"><br>
            <img class="visible-xs" style="width: 290px;" src="<? bloginfo('template_directory') ?>/compass/images/top-title-information.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-information@2x.png 2x"><br>
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <h4 class="text-center bold tracking-1">当院の情報</h4>
        <br>
        <br>
        <h4 class="text-center">
            <img src="<? bloginfo('template_directory') ?>/compass/images/top-title-timetable.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-title-timetable@2x.png 2x">
        </h4>

        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col-md-10 col-md-offset-1">
                <table class="table table-information hidden-xs">
                    <thead>
                        <tr>
                            <th style="width: 130px;">診療時間</th>
                            <td>月</td>
                            <td>火</td>
                            <td>水</td>
                            <td>
                                木
                                <span class="kome">※</span>
                            </td>
                            <td>金</td>
                            <td>土</td>
                            <td>
                                日
                                <span class="kome">※</span>
                            </td>
                            <td>祝</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>10:30 - 13:00</th>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-cross"></span></td>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-triangle"></span><br>9:30~</td>
                            <td><span class="icon-cross"></span></td>
                        </tr>

                        <tr>
                            <th>14:30 - 19:00</th>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-cross"></span></td>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-triangle"></span><br>18:00まで</td>
                            <td><span class="icon-triangle"></span><br>17:00まで</td>
                            <td><span class="icon-cross"></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-information-xs visible-xs">
                    <thead>
                        <tr>
                            <th>診療時間</th>
                            <td>10:30 - 13:00</td>
                            <td>14:30 - 19:00</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>月</th>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                        </tr>
                        <tr>
                            <th>火</th>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                        </tr>
                        <tr>
                            <th>水</th>
                            <td><span class="icon-cross"></span></td>
                            <td><span class="icon-cross"></span></td>
                        </tr>
                        <tr>
                            <th>木<span class="kome">※</span></th>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                        </tr>
                        <tr>
                            <th>金</th>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-circle"></span></td>
                        </tr>
                        <tr>
                            <th>土</th>
                            <td><span class="icon-circle"></span></td>
                            <td><span class="icon-triangle"></span><br>18:00まで</td>
                        </tr>
                        <tr>
                            <th>日<span class="kome">※</span></th>
                            <td><span class="icon-triangle"></span><br>9:30~</td>
                            <td><span class="icon-triangle"></span><br>17:00まで</td>
                        </tr>
                        <tr>
                            <th>祝</th>
                            <td><span class="icon-cross"></span></td>
                            <td><span class="icon-cross"></span></td>
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
        <br>
        <p class="text-center">週1程度 (9:30~17:00) / 曜日不定(診察カレンダーで確認できます)</p>

        <h4 class="text-center bold tracking-1" style="margin-top: 100px;">診療カレンダー</h4>
        <h1 class="text-center">
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>

    <?php require_once(dirname(__FILE__) . '/parts/calendar.php'); ?>
        <h4 class="text-center bold tracking-1" style="margin-top: 100px;">アクセス</h4>
        <h1 class="text-center line-height-15">
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <br>
        <p class="text-center">札幌市中央区北7条⻄15丁⽬28番地11中央カクマンビル２F</p>

        <div class="row" style="margin-top: 30px; margin-bottom: 40px;">
            <div class="col-sm-6 text-center">
                <h3 class="bold">電車でお越しの方</h3>
                <p>JR桑園駅から徒歩5分 イオン桑園店から徒歩2分</p>
            </div><!-- /.col -->
            <div class="col-sm-6 text-center">
                <h3 class="bold">お車でお越しの方</h3>
                <p>当ビルに駐車場2台ご用意しております</p>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-sm-12 col-map">
                <div id="map-canvas"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJzMAw_VBdmYYQGYS0_VUN7B3Qvqeec-w"></script>
    <script>

    var styles =
    [{"featureType":"water","stylers":[{"color":"#19a0d8"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"road.highway","elementType":"labels.icon"},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#11ff00"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#4cff00"},{"saturation":58}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#f0e4d3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-10}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]}];


    var map;
    function initialize() {
    var mapOptions = {
    zoom: 15,
    center: new google.maps.LatLng(43.067376, 141.332415),
    styles: styles,
    scrollwheel: false
    };
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
    position: {lat: 43.067376,  lng: 141.332415},
    map: map,
    title: '矯正歯科egao'
    });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
            </div>
        </div><!-- /.row -->


        <h4 class="text-center bold tracking-1" style="margin-top: 100px;">お問い合わせ</h4>
        <h1 class="text-center line-height-15">
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <h3 class="text-center">Tel 011-616-1919</h3>
        <br>
        <h4 class="text-center">
            <a class="btn btn-egao">メールを送る&emsp;<img class="mail" src="<? bloginfo('template_directory') ?>/compass/images/envelope.png" srcset="<? bloginfo('template_directory') ?>/compass/images/envelope@2x.png 2x"></a>
        </h4>

    </div><!-- /.container -->
</div>

<? get_footer(); ?>
