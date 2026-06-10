<?php 
/**
* Template Name: 矯正治療費について
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
require_once(dirname(__FILE__) . '/parts/nav-mobile.php');
?>

<div class="fullscreen cost">
    <div class="middle">
        <div class="text-center" style="margin-top: -100px; line-height: 5;">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/cost-title.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-title@2x.png 2x"><br>
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-white.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-white@2x.png 2x">
            <h4 class="bold tracking-1">料金について</h4>
	    <h5 class="bold tracking-1">矯正歯科治療は公的健康保険適用外の<br class="visible-xs">自費（自由）診療です。</h5>
        </div>
    </div>
    <div style="position: absolute; left: 0; bottom: -5px; width: 100%;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
            <path style="fill: #ffffff;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
        </svg>
    </div>
</div>

<div class="bg-white">
    <div class="container" style="padding-top: 60px; padding-bottom: 120px;">
        <h1 class="text-center tracking-1 bold">STEP &amp; FEE</h1>
        <br>
        <h5 class="text-center bold tracking-1">治療のステップと費用</h5>
        <br>
        <p class="text-center"><img src="<?php bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>

        <h3 class="text-center bold hidden-xs" style="margin-top: 100px;">
            <span class="round-border-title">12歳以下（子供の歯がある場合）</span>
        </h3>

        <h5 class="text-center bold visible-xs" style="margin-top: 100px;">
            <span class="round-border-title">12歳以下（子供の歯がある場合）</span>
        </h5>

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 100px;">
                <h4 class="bold tracking-1">相談料</h4>
                <h3 class="bold roboto-condensed tracking-1" style="margin-top: 30px; margin-left: 10px;"><span class="cost-borderd-box">2,200<small>円</small></span></h3>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 100px;">
                <h4 class="bold tracking-1">初診検査・診断料</h4>
                <h3 class="bold roboto-condensed tracking-1" style="margin-top: 30px; margin-left: 10px;"><span class="cost-borderd-box">44,000<small>円</small></span></h3>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-10 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 100px;">
                <h4 class="bold tracking-1">唾液検査・歯磨き指導・全体クリーニング</h4>
                <h3 class="bold roboto-condensed tracking-1" style="margin-top: 30px; margin-left: 10px;"><span class="cost-borderd-box">5,500<small>円</small></span></h3>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 100px;">
            <div class="col-xs-11 col-sm-6 col-xs-offset-1 col-sm-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 220px;">
                <hr class="hr-dot-black hidden-xs" style="position: absolute; top: 2px; width: 100%; left: 10px;">
                <h4 class="bold tracking-1"><span style="position: relative; background-color: #fff; padding-right: 10px; padding-left: 3px;">成長期の治療</span></h4>
                <h3 class="bold tracking-1" style="margin-top: 30px; margin-left: 10px;">
                    <span class="cost-borderd-box roboto-condensed">396,000<small class="color-default bold">円</small></span>
                </h3>
            </div>
            <div class="col-xs-11 col-sm-5 col-xs-offset-1 col-sm-offset-0">
                <div class="hidden-xs" style="margin-top: -40px;">
                </div>
                <div class="visible-xs" style="margin-top: 40px;">
                </div>
                <?php include(dirname(__FILE__) . '/compass/images/cost/chart1.svg');?>
            </div>
        </div><!-- /.row -->

        <br><br>

        <div class="bg-wave text-center bold">
            <span style="background-color: #ffffff; padding: 20px;">~&nbsp;12歳くらいまで</span>
        </div>

        <br><br><br><br>

        <p class="bold">＜必要に応じて＞マルチブラケット装置に進む場合</p>

        <div class="row" style="margin-top: 60px;">
            <div class="col-sm-10 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 100px;">
                <h4 class="bold tracking-1">マルチブラケット装置装着前の検査診断料</h4>
                <h3 class="bold roboto-condensed tracking-1" style="margin-top: 30px; margin-left: 10px;">
                    <span class="cost-borderd-box">11,000<small>円</small></span>
                </h3>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 340px;">
                <hr class="hr-dot-black hidden-xs" style="position: absolute; top: 2px; width: 100%; left: 10px;">
                <h4 class="bold tracking-1"><span style="position: relative; background-color: #fff; padding-right: 10px; padding-left: 3px;">装置料（表側）</span></h4>
                <h3 class="bold tracking-1" style="margin-top: 30px; margin-left: 10px;">
                    <span class="cost-borderd-box roboto-condensed">330,000<small class="color-default bold">円</small></span>
                </h3>
                <br>

                <?php include(dirname(__FILE__) . '/compass/images/cost/chart2.svg'); ?>

            </div>
            <div class="col-sm-5 col-xs-11 col-xs-offset-1 col-sm-offset-0">
                <div class="hidden-xs" style="margin-top: -70px;">
                </div>
                <div class="visible-xs" style="margin-top: 40px;">
                </div>

                <?php include(dirname(__FILE__) . '/compass/images/cost/chart3.svg'); ?>
            </div>
        </div><!-- /.row -->

        <br><br>

        <div class="bg-wave text-center bold">
            <span style="background-color: #ffffff; padding: 20px;">マルチブラケット装置装着期間&emsp;2~3年</span>
        </div>

        <br>

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="hr-dot-black hidden-xs" style="position: absolute; top: 2px; width: 100%; left: 10px;">
                <h4 class="bold tracking-1"><span style="position: relative; background-color: #fff; padding-right: 10px; padding-left: 3px;">最終検査・保定装置料</span></h4>
                <h3 class="bold tracking-1" style="margin-top: 30px; margin-left: 10px;">
                    <span class="cost-borderd-box roboto-condensed">44,000<small class="color-default bold">円</small></span>
                </h3>
            </div>
            <div class="col-xs-11 col-sm-5 col-xs-offset-1 col-sm-offset-0">
                <div class="hidden-xs" style="margin-top: -40px;">
                </div>
                <div class="visible-xs" style="margin-top: 40px;">
                </div>
                <?php include(dirname(__FILE__) . '/compass/images/cost/chart4.svg'); ?>
            </div>
        </div><!-- /.row -->

        <br><br><br>

        <div class="bg-wave text-center bold">
            <span style="background-color: #ffffff; padding: 20px;">保定期間&emsp;2年</span>
        </div>

        <br><br><br>

        <div class="row" style="margin-top: 60px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <h4 class="bold tracking-1">その他</h4>
            </div>
        </div><!-- /.row -->
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-4 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <?php include(dirname(__FILE__) . '/compass/images/cost/chart5.svg'); ?>
            </div>
            <div class="col-sm-4 col-xs-11 col-xs-offset-1" style="position: relative;">
                <?php include(dirname(__FILE__) . '/compass/images/cost/chart6.svg'); ?>
            </div>
        </div><!-- /.row -->

        <br><br><br>
        <hr style="border-top: 2px solid #222;">

        <h3 class="text-center bold hidden-xs" style="margin-top: 100px;">
            <span class="round-border-title">12歳以上（すべて大人の歯の場合）</span>
        </h3>

        <h5 class="text-center bold visible-xs" style="margin-top: 100px;">
            <span class="round-border-title">12歳以上（すべて大人の歯の場合）</span>
        </h5>
	<h5 class="text-center bold" style="margin-top: 20px;">一般的な治療期間2〜3年間、通院回数24〜36回</h5>

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 100px;">
                <h4 class="bold tracking-1">相談料</h4>
                <h3 class="bold roboto-condensed tracking-1" style="margin-top: 30px; margin-left: 10px;"><span class="cost-borderd-box">2,200<small>円</small></span></h3>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 100px;">
                <h4 class="bold tracking-1">初診検査・診断料</h4>
                <h3 class="bold roboto-condensed tracking-1" style="margin-top: 30px; margin-left: 10px;"><span class="cost-borderd-box">44,000<small>円</small></span></h3>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-10 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 100px;">
                <h4 class="bold tracking-1">唾液検査・歯磨き指導・全体クリーニング</h4>
                <h3 class="bold roboto-condensed tracking-1" style="margin-top: 30px; margin-left: 10px;"><span class="cost-borderd-box">5,500<small>円</small></span></h3>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="vertical-line" style="width: 340px;">
                <hr class="hr-dot-black hidden-xs" style="position: absolute; top: 2px; width: 100%; left: 10px;">
                <h4 class="bold tracking-1"><span style="position: relative; background-color: #fff; padding-right: 10px; padding-left: 3px;">装置料（表側）</span></h4>
                <h4 class="bold tracking-1" style="margin-top: 30px; margin-left: 10px;">
                    <span class="cost-borderd-box roboto-condensed">660,000<small class="color-default bold">円</small>&nbsp;~&nbsp;715,000<small class="color-default bold">円</small></span>
                </h4>
                <br>

                <?php include(dirname(__FILE__) . '/compass/images/cost/chart2.svg'); ?>

            </div>
            <div class="col-sm-5 col-xs-11 col-xs-offset-1 col-sm-offset-0">
                <div class="hidden-xs" style="margin-top: -70px;">
                </div>
                <div class="visible-xs" style="margin-top: 40px;">
                </div>

                <?php include(dirname(__FILE__) . '/compass/images/cost/chart3.svg'); ?>
            </div>
        </div><!-- /.row -->

        <br><br>

        <div class="bg-wave text-center bold">
            <span style="background-color: #ffffff; padding: 20px;">マルチブラケット装置装着期間&emsp;2~3年</span>
        </div>

        <br>

        <div class="row" style="margin-top: 100px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <hr class="hr-dot-black hidden-xs" style="position: absolute; top: 2px; width: 100%; left: 10px;">
                <h4 class="bold tracking-1"><span style="position: relative; background-color: #fff; padding-right: 10px; padding-left: 3px;">最終検査・保定装置料</span></h4>
                <h3 class="bold tracking-1" style="margin-top: 30px; margin-left: 10px;">
                    <span class="cost-borderd-box roboto-condensed">44,000<small class="color-default bold">円</small></span>
                </h3>
            </div>
            <div class="col-sm-5 col-xs-11 col-xs-offset-1 col-sm-offset-0">
                <div class="hidden-xs" style="margin-top: -40px;">
                </div>
                <div class="visible-xs" style="margin-top: 40px;">
                </div>
                <?php include(dirname(__FILE__) . '/compass/images/cost/chart4.svg'); ?>
            </div>
        </div><!-- /.row -->

        <br><br><br>

        <div class="bg-wave text-center bold">
            <span style="background-color: #ffffff; padding: 20px;">保定期間&emsp;2年</span>
        </div>

        <br><br><br>

        <div class="row" style="margin-top: 60px;">
            <div class="col-sm-6 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <img class="cost-circle" src="<?php bloginfo('template_directory') ?>/compass/images/cost-circle.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/cost-circle@2x.png 2x">
                <h4 class="bold tracking-1">その他</h4>
            </div>
        </div><!-- /.row -->
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-11 col-sm-offset-1 col-xs-11 col-xs-offset-1" style="position: relative;">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-4" style="position: relative;">
                        <?php include(dirname(__FILE__) . '/compass/images/cost/chart5.svg'); ?>
                    </div>
                    <div class="col-sm-4" style="position: relative;">
                        <?php include(dirname(__FILE__) . '/compass/images/cost/chart7.svg'); ?>
                    </div>
                    <div class="col-sm-4" style="position: relative;">
                        <?php include(dirname(__FILE__) . '/compass/images/cost/chart8.svg'); ?>
                    </div>
                </div><!-- /.row -->
            </div>
        </div><!-- /.row -->
        <br>
        <p class="text-center">*1 マウスピース型矯正装置（インビザライン）は医薬品医療機器等法（薬機法）の承認を受けていない未承認医薬品です。<br>
	* マウスピース型矯正装置（インビザライン）は米国アライン・テクノロジー社の製品であり、インビザライン・ジャパン株式会社を介して入手しています。<br>
* 国内にもマウスピース型矯正装置として医療品医療機器等法（薬機法）の承認を受けているものは複数存在します。<br>
* マウスピース型矯正装置（インビザライン）は1998年にFDA（米国食品医薬品局）により医療機器として認証を受けています。<br>
* マウスピース型矯正装置（インビザライン）は完成物薬機法対象外の矯正装置であり、承認薬品を対象とする医薬品副作用被害救済制度の対象外となる場合があります。</p>
        <p class="text-center">*2 インビザライン・MTMとも「相談料」「検査診断料」「最終検査・保定装置料」は必要となります。</p>

    </div><!-- /.container -->
</div><!-- /.bg-white -->

<div class="rounded-bg">
    <svg class="rounded-bg-top fixed" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
        <path style="fill: #f6f6f4;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
    </svg>

    <div class="container" style="padding-top: 60px; padding-bottom: 160px;">
        <h1 class="text-center tracking-1 bold">ORTHODONTIC DEVICE</h1>
        <br>
        <h5 class="text-center bold tracking-1">成人の方の矯正装置の費用</h5>
        <br>
        <p class="text-center"><img src="<?php bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>

        <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
            <div class="col-sm-6 col-md-5 col-sm-offset-1">
                <h4 class="bold line-height-15">マルチブラケット装置<br>（オーソドックスな表側の矯正）</h4>
                <img class="img-responsive visible-xs" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img1.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img1@2x.jpg 2x">
                <p class="line-height-2">
                    費用を抑えたい方、矯正していることをアピールしたい方（外国ではステータスとなることもあリます）、はこちらです。当院では前歯の装置自体は透明です。金属色のギンギラギンではありません。ワイヤーは基本は銀色ですが、かなりみえにくいホワイトワイヤーに変更も可能です。
                </p>
                <br>
                <h4 class="bold tracking-1">
                    <span class="cost-borderd-box roboto-condensed">660,000<small class="color-default bold">円</small>&nbsp;~&nbsp;715,000<small class="color-default bold">円</small></span>
                </h4>
            </div>
            <div class="col-sm-5 col-md-4 col-md-offset-1 hidden-xs">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img1.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img1@2x.jpg 2x">
            </div>
        </div><!-- /.row -->

        <hr class="hr-dot-black">

        <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
            <div class="col-sm-6 col-md-5 col-sm-offset-1">
                <h4 class="bold line-height-15">リンガルブラケット矯正装置<br>（前方からは見えない舌側の矯正）</h4>
                <img class="img-responsive visible-xs" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img2.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img2@2x.jpg 2x">
                <p class="line-height-2">
                    みえるのはどうしても嫌、という方はこちらです。唾液の作用により虫歯になりにくいというメリットもあります（歯磨きが難しくなるので注意は必要です）。慣れるまで舌に違和感がある、発音しづらいというデメリットはあります。ただし、慣れていきます。
                </p>
                <br>
                <h4 class="bold tracking-1">
                    <span class="cost-borderd-box roboto-condensed">1,045,000<small class="color-default bold">円</small></span>
                </h4>
            </div>
            <div class="col-sm-5 col-md-4 col-md-offset-1 hidden-xs">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img2.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img2@2x.jpg 2x">
            </div>
        </div><!-- /.row -->

        <hr class="hr-dot-black">

        <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
            <div class="col-sm-6 col-md-5 col-sm-offset-1">
                <h4 class="bold line-height-15">
                    見えやすい上の歯は裏側、<br>
                    見えにくい下の歯は表側（ハーフリンガル）
                </h4>
                <img class="img-responsive visible-xs" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img3.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img3@2x.jpg 2x">
                <p class="line-height-2">
                    みえるのはやっぱりちょっと…でも費用も抑えたい…という方はこちらがオススメです。歯並びにもよりますが、普段生活していて下の歯がしっかり見えることは実はそう多くありません（ご家族やご友人の歯をこっそり見てみて下さい）。なのでこの組み合わせは、リーズナブルといえます。
                </p>
                <br>
                <h4 class="bold tracking-1">
                    <span class="cost-borderd-box roboto-condensed">880,000<small class="color-default bold">円</small></span>
                </h4>
            </div>
            <div class="col-sm-5 col-md-4 col-md-offset-1 hidden-xs">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img3.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img3@2x.jpg 2x">
            </div>
        </div><!-- /.row -->

        <hr class="hr-dot-black">

        <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
            <div class="col-sm-6 col-md-5 col-sm-offset-1">
                <h4 class="bold line-height-15">
                    マウスピース型カスタムメイド矯正装置<br>
                    （インビザライン）
                </h4>
                <img class="img-responsive visible-xs" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img4.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img4@2x.jpg 2x">
                <p class="line-height-2">
                    透明な取り外し式の装置です。１日20時間以上装着する必要があります。非常に見えにくいのが一番のメリットでしょう。その他にもメリット・デメリット、この装置の得意な症例（歯並び）、苦手な症例（歯並び）がありますのでまずはご相談下さい。<br>
		    <small>* マウスピース型矯正装置（インビザライン）は医薬品医療機器等法（薬機法）の承認を受けていない未承認医薬品です。</small><br>
		    <small>* マウスピース型矯正装置（インビザライン）は米国アライン・テクノロジー社の製品であり、インビザライン・ジャパン株式会社を介して入手しています。</small><br>
		    <small>* 国内にもマウスピース型矯正装置として医療品医療機器等法（薬機法）の承認を受けているものは複数存在します。</small><br>
		    <small>* マウスピース型矯正装置（インビザライン）は1998年にFDA（米国食品医薬品局）により医療機器として認証を受けています。</small><br>
		    <small>* マウスピース型矯正装置（インビザライン）は完成物薬機法対象外の矯正装置であり、承認薬品を対象とする医薬品副作用被害救済制度の対象外となる場合があります。</small><br>
                </p>
                <br>
                <h4 class="bold tracking-1">
                    <span class="cost-borderd-box roboto-condensed">~&nbsp;935,000<small class="color-default bold">円</small></span>
                </h4>
            </div>
            <div class="col-sm-5 col-md-4 col-md-offset-1 hidden-xs">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img4.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img4@2x.jpg 2x">
            </div>
        </div><!-- /.row -->

        <hr class="hr-dot-black">

        <div class="row" style="margin-top: 60px; margin-bottom: 60px;">
            <div class="col-sm-6 col-md-5 col-sm-offset-1">
                <h4 class="bold line-height-15">
                    部分矯正
                </h4>
                <img class="img-responsive visible-xs" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img5.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img5@2x.jpg 2x">
                <p class="line-height-2">
                    とにかく費用を抑えてここだけ治したい、という方もお気軽にご相談下さい。医学的見地からご希望に添えないこともございますが、最善と思われる方法をご提案させていただきます。
                </p>
                <br>
                <h4 class="bold tracking-1">
                    <span class="cost-borderd-box roboto-condensed">110,000<small class="color-default bold">円</small>&nbsp;~</span>
                </h4>
            </div>
            <div class="col-sm-5 col-md-4 col-md-offset-1 hidden-xs">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/cost/img5.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/cost/img5@2x.jpg 2x">
            </div>
        </div><!-- /.row -->

        <div style="border: 2px solid #222; padding: 20px; margin-top: 80px;">
            <ul class="line-height-2">
                <li>各種クレジットカードでのお支払いが可能です。</li>
                <li>無金利での分割払いも承ります、お問い合わせ下さい。</li>
                <li>医療費控除の対象になる場合があります、診断時にご説明致します。</li>
            </ul>
        </div>

    </div><!-- /.container -->
</div><!-- /.rounded-bg -->



<?php get_footer(); ?>
