<?php 
/**
* Template Name: ご予約
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
require_once(dirname(__FILE__) . '/parts/nav-mobile.php');
?>
<div class="fullscreen reservation">
    <div class="middle">
        <div class="text-center" style="margin-top: -100px; line-height: 5;">
            <img class="hidden-xs" src="<?php bloginfo('template_directory') ?>/compass/images/reservation/title.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/reservation/title@2x.png 2x"><br>
            <img class="visible-xs-inline" style="width: 300px;" src="<?php bloginfo('template_directory') ?>/compass/images/reservation/title.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/reservation/title@2x.png 2x"><br>
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-white.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-white@2x.png 2x">
            <h4 class="bold tracking-1">ご予約</h4>
        </div>
    </div>
    <div style="position: absolute; left: 0; bottom: -5px; width: 100%;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
            <path style="fill: #ffffff;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
        </svg>
    </div>
</div>

<div class="bg-white">

    <div class="container" style="padding-top: 60px; padding-bottom: 30px;">
        <h1 class="text-center tracking-1 bold">RESERVATION</h1>
        <br>
        <h5 class="text-center bold tracking-1">矯正治療・小児予防歯科のご予約</h5>
        <br>
        <p class="text-center"><img src="<?php bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>
        <br><br><br>
        <p class="text-center line-height-2">
            すべてのご予約は電話で受付をさせて頂いております。<br>
            以下のお電話番号までお気軽にご連絡ください。<br>
            お会いできるのを楽しみにお待ちしております。
        </p>

        <div class="row">
            <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <hr style="border-top: 3px solid #222;">
                <h1 class="text-center tel roboto-condensed bold tracking-1">
                    T<span style="font-size: 75%;">EL</span> 011-616-1919
                </h1>
                <hr style="border-top: 3px solid #222;">
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="container bg-gray-xs" style="padding-top: 60px; padding-bottom: 100px;">
        <div style="background-color: #f6f6f4; padding-top: 50px; padding-bottom: 50px;">
            <h4 class="text-center bold tracking-1">受付は当院の診療時間になります</h4>
            <h1 class="text-center line-height-15">
                <img src="http://localhost:8888/egao-wp/assets/themes/egao/compass/images/wave-small.png" srcset="http://localhost:8888/egao-wp/assets/themes/egao/compass/images/wave-small@2x.png 2x"><br>
            </h1>
            <h4 class="text-center">
                <img src="<?php bloginfo('template_directory') ?>/compass/images/top-title-timetable.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-title-timetable@2x.png 2x">
            </h4>
            <?php include_once(dirname(__FILE__) . '/parts/timetable.php'); ?>
            <h4 class="text-center">
                <img src="<?php bloginfo('template_directory') ?>/compass/images/top-title-children.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-title-children@2x.png 2x">
            </h4>
            <br>
            <p class="text-center">週1程度 (9:30~17:00) / 曜日不定(診察カレンダーで確認できます)</p>
            <br>
            <h4 class="text-center">
                <a class="btn btn-egao" href="<?php echo home_url(); ?>/#calendar">診療日カレンダーはコチラ&emsp;<i class="fa fa-calendar fa-lg mail"></i></a>
            </h4>


            <h4 class="text-center bold tracking-1" style="margin-top: 100px;">お問い合わせ</h4>
            <h1 class="text-center line-height-15">
                <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
            </h1>
            <p class="text-center">※メールでのご予約は承っておりません</p>

            <br><br><br>

            <h4 class="text-center">
                <a class="btn btn-egao" href="mailto:info@egao-kyousei-sapporo.com">メールを送る&emsp;<img class="mail" src="<?php bloginfo('template_directory') ?>/compass/images/envelope.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/envelope@2x.png 2x"></a>
            </h4>

        </div>


    </div><!-- /.container -->
</div><!-- /.bg-white -->


<?php get_footer(); ?>
