<?
/**
* Template Name: 院内紹介
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
?>

<div class="fullscreen" style="background-image: url(<? bloginfo('template_directory') ?>/compass/images/dummy/bg1.jpg);">
    <div class="middle">
        <div class="text-center" style="margin-top: -100px; line-height: 5;">
            <img src="<? bloginfo('template_directory') ?>/compass/images/introduction-title.png" srcset="<? bloginfo('template_directory') ?>/compass/images/introduction-title@2x.png 2x"><br>
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-white.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-white@2x.png 2x">
            <h4 class="bold tracking-1">院内紹介</h4>
        </div>
    </div>
</div>

<div class="bg-white" style="padding-bottom: 100px;">
    <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
        <h1 class="text-center tracking-2 bold">ROOM</h1>
        <br>
        <h5 class="text-center bold tracking-1">えがお矯正歯科の院内紹介</h5>
        <br>
        <p class="text-center"><img src="<? bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<? bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>
        <br>
        <br>
        <p class="text-center bold">「歯医者らしくない空間」「くつろげる空間」「ブルックリンスタイル」をテーマに空間を作っています。</p>
    </div><!-- /.container -->

	<div class="slick">
		<div class="slick-item" style="background-image: url(https://placehold.it/720x480);"></div>
        <div class="slick-item" style="background-image: url(https://placehold.it/720x480);"></div>
        <div class="slick-item" style="background-image: url(https://placehold.it/720x480);"></div>
	</div>
</div><!-- /.bg-white -->

<div class="container" style="padding-top: 60px; padding-bottom: 160px;">
    <h1 class="text-center tracking-2 bold">MEDICAL EQUIPMENT</h1>
    <br>
    <h5 class="text-center bold tracking-1">えがお矯正歯科の医療器具</h5>
    <br>
    <p class="text-center"><img src="<? bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<? bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>
    <br>
    <p class="text-center bold">ダミーです。当院では滅菌にこだわっています。テキストテキストテイスト</p>

    <div class="row" style="margin-top: 60px;">
        <div class="col-sm-4">
            <img class="img-responsive" src="https://placehold.it/720x480">
        </div>
        <div class="col-sm-8">
            <h4 class="bold">クラスS　オートクレーブ</h4>
            <p class="line-height-2">
                ダミーです。最新機種のデジタルレントゲンは、X線放射量が従来の約数分の1で高速デジタル撮影が可能なため、 生体に優しく、画像診断に対し多くの情報量を得ることができます。デジタル撮影が可能なため、 生体に優しく、画像診断に対し多くの情報量を得ることができます。
            </p>
        </div>
    </div><!-- /.row -->

    <div class="row" style="margin-top: 30px;">
        <div class="col-sm-4">
            <img class="img-responsive" src="https://placehold.it/720x480">
        </div>
        <div class="col-sm-8">
            <h4 class="bold">ユニット</h4>
            <p class="line-height-2">
                ダミーです。最新機種のデジタルレントゲンは、X線放射量が従来の約数分の1で高速デジタル撮影が可能なため、 生体に優しく、画像診断に対し多くの情報量を得ることができます。デジタル撮影が可能なため、 生体に優しく、画像診断に対し多くの情報量を得ることができます。
            </p>
        </div>
    </div><!-- /.row -->

    <div class="row" style="margin-top: 30px;">
        <div class="col-sm-4">
            <img class="img-responsive" src="https://placehold.it/720x480">
        </div>
        <div class="col-sm-8">
            <h4 class="bold">レントゲン</h4>
            <p class="line-height-2">
                ダミーです。最新機種のデジタルレントゲンは、X線放射量が従来の約数分の1で高速デジタル撮影が可能なため、 生体に優しく、画像診断に対し多くの情報量を得ることができます。デジタル撮影が可能なため、 生体に優しく、画像診断に対し多くの情報量を得ることができます。
            </p>
        </div>
    </div><!-- /.row -->
</div><!-- /.container -->

<script>
$(document).ready(function(){
  $('.slick').slick({
		dots: false,
	    autoplay: true,
	    infinite: true,
	    speed: 500,
	    slidesToShow: 1,
	    centerMode: true,
	    variableWidth: true
  });
});
</script>


<? get_footer(); ?>
