<?php 
/**
* Template Name: 院内紹介
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
require_once(dirname(__FILE__) . '/parts/nav-mobile.php');
?>

<div class="fullscreen introduction">
    <div class="middle">
        <div class="text-center" style="margin-top: -100px; line-height: 5;">
            <img class="hidden-xs" src="<?php bloginfo('template_directory') ?>/compass/images/introduction-title.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/introduction-title@2x.png 2x"><br>
            <img class="visible-xs" style="width: 290px;" src="<?php bloginfo('template_directory') ?>/compass/images/introduction-title.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/introduction-title@2x.png 2x"><br>
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-white.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-white@2x.png 2x">
            <h4 class="bold tracking-1">院内紹介</h4>
        </div>
    </div>
    <div style="position: absolute; left: 0; bottom: -5px; width: 100%;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
            <path style="fill: #ffffff;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
        </svg>
    </div>
</div>

<div class="bg-white" style="padding-bottom: 160px;">
    <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
        <h1 class="text-center tracking-2 bold">ROOM</h1>
        <br>
        <h5 class="text-center bold tracking-1">えがお矯正歯科の院内紹介</h5>
        <br>
        <p class="text-center"><img src="<?php bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>
        <br>
        <br>
        <p class="text-center bold">当院では「安心・安全」そして「快適」にこだわっております。</p>
    </div><!-- /.container -->

	<div class="slick">
		<div class="slick-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/compass/images/introduction/slider/slider1.jpg);">
            <span>待合室</span>
        </div>
        <div class="slick-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/compass/images/introduction/slider/slider2.jpg);">
            <span>診察室</span>
        </div>
        <div class="slick-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/compass/images/introduction/slider/slider3.jpg);">
            <span>キッズスペース</span>
        </div>
        <div class="slick-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/compass/images/introduction/slider/slider4.jpg);">
            <span>受付</span>
        </div>
        <div class="slick-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/compass/images/introduction/slider/slider5.jpg);">
            <span>X線ルーム</span>
        </div>
        <div class="slick-item" style="background-image: url(<?php bloginfo('template_directory'); ?>/compass/images/introduction/slider/slider6.jpg);">
            <span>外観</span>
        </div>
	</div>
</div><!-- /.bg-white -->

<div class="rounded-bg">
    <svg class="rounded-bg-top fixed" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
        <path style="fill: #f6f6f4;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
    </svg>
    <div class="container" style="padding-top: 60px; padding-bottom: 160px;">
        <h1 class="text-center tracking-1 bold">MEDICAL EQUIPMENT</h1>
        <br>
        <h5 class="text-center bold tracking-1">矯正歯科egaoの医療器具</h5>
        <br>
        <p class="text-center"><img src="<?php bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>
        <br>
        <p class="text-center bold line-height-2">「自分の口の中に喜んで入れられるような状態にする」ということを１つの基準にしてスタッフ一同、<br>器具の滅菌・材料の取り扱いに注意しています。</p>

        <div class="row" style="margin-top: 60px;">
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img1.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img1@2x.jpg 2x">
            </div>
            <div class="col-sm-8">
                <h4 class="bold">クラスS　オートクレーブ</h4>
                <p class="line-height-2">
                    ハンドピースのような複雑な器具、バキュームチップなどのチューブ形状の器具、滅菌パックで包装された基本セットなどはクラスS以上のオートクレーブでなければ滅菌が不十分と言われています。当院では日本より基準の厳しいヨーロッパ基準のクラスSオートクレーブを導入しています。
                </p>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img2.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img2@2x.jpg 2x">
            </div>
            <div class="col-sm-8">
                <h4 class="bold">滅菌パック</h4>
                <p class="line-height-2">
                    オートクレーブで滅菌の終わったものはこのまま保管し、使用する直前に開封します。
                </p>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img3.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img3@2x.jpg 2x">
            </div>
            <div class="col-sm-8">
                <h4 class="bold">デジタルレントゲン</h4>
                <p class="line-height-2">
                    わずか３秒でセファロ撮影（矯正治療の診断に不可欠な横顔のレントゲン写真）ができるのが気に入ってこのレントゲンを選びました。お子さんが動いて画像が不鮮明になるリスクを減らせます。デジタルレントゲンなので被爆量も最小限に抑えられます。
                </p>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img4.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img4@2x.jpg 2x">
            </div>
            <div class="col-sm-8">
                <h4 class="bold">ふかふかシートのユニット</h4>
                <p class="line-height-2">
                    矯正治療中もリラックスして出来るだけ体に負担をかけないよう、たくさんのユニットを院長・副院長が試座して選んだふかふかシートのユニットです。気持ちよくて寝てしまわないようにご注意下さい。
                </p>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-4">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img5.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/introduction/img5@2x.jpg 2x">
            </div>
            <div class="col-sm-8">
                <h4 class="bold">唾液検査キット</h4>
                <p class="line-height-2">
                    特別な試薬を口に含んで唾液を採取し、この検査機で分析するとわずか５分程度でむし歯や歯周病のリスクの判定ができます。自分のリスクを数字でしっかり確認することで、日頃の歯磨き・食生活を良くしていくのに役立てていただくために導入しました。
                </p>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.rounded-bg -->


<script>
$(document).ready(function(){
    $('.slick').slick({
        dots: false,
        autoplay: true,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true,
    });
});
$(window).load(function(){
    moveSlickButton();
});
var timer = false;
$(window).resize(function() {
    if (timer !== false) {
        clearTimeout(timer);
    }
    timer = setTimeout(function() {
        console.log('resized');
        moveSlickButton();
    }, 200);
});
function moveSlickButton() {
    var w = $(window).width();
    if (w < 768) {
        $('.slick-item').css('width', w-60);
        $('.slick-prev').css('left', 0);
        $('.slick-next').css('right', 0);
    }
    else {
        $('.slick-item').css('width', '');
        $('.slick-prev').css('left', w/2-350);
        $('.slick-next').css('right', w/2-350);
    }
}
</script>


<?php get_footer(); ?>
