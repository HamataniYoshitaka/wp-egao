<?php
/**
* Template Name: 診療について
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
require_once(dirname(__FILE__) . '/parts/nav-mobile.php');
?>
<div class="fullscreen treatment">
    <div class="middle">
        <div class="text-center" style="margin-top: -100px; line-height: 5;">
            <img src="<? bloginfo('template_directory') ?>/compass/images/treatment-title.png" srcset="<? bloginfo('template_directory') ?>/compass/images/treatment-title@2x.png 2x"><br>
            <img src="<? bloginfo('template_directory') ?>/compass/images/wave-white.png" srcset="<? bloginfo('template_directory') ?>/compass/images/wave-white@2x.png 2x">
            <h4 class="bold tracking-1">診療について</h4>
        </div>
    </div>
    <div style="position: absolute; left: 0; bottom: -5px; width: 100%;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
            <path style="fill: #ffffff;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
        </svg>
    </div>
</div>

<div class="bg-white">
    <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
        <h1 class="text-center tracking-2 bold">TREATMENT CONTENT</h1>
        <br>
        <h5 class="text-center bold tracking-1">治療内容</h5>
        <br>
        <p class="text-center"><img src="<? bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<? bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>

        <div class="row" style="margin-top: 60px;">
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img1.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img1@2x.jpg">
                <br>
                <h3 class="text-center bold">矯正治療</h3>
                <br>
                <p class="line-height-2">
                    矯正治療は難しいと思います。少し勉強しただけ、少し経験しただけ、では一人一人違う歯並びの問題点を適切に改善させるのは、診断能力にしても技術的にもおそらく難しいでしょう。<br>
                    私は矯正歯科の専門医です。どうぞ安心してお任せ下さい。ですが、私はまだ発展途上でもあります。なぜなら矯正治療の考え方・矯正治療の装置も日々多くの勤勉な研究者の努力によって進化しているからです。(パソコンも携帯電話もどんどんアップデートされるのと同じです。)これまで学んできたことと経験してきたことに、これからの最新の考え方・目立ちにくい装置（これが患者さんにとっては一番重要な問題でしょうか？）を日々取り入れて診療を行っていきます。また、矯正治療中に虫歯ができるのは何としても避けなくてはなりませんので装置装着前に、唾液検査・歯磨き指導・全体クリーニングを全員に必ず行います。
                </p>
            </div>
            <div class="col-sm-6 col-md-5">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img2.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img2@2x.jpg">
                <br>

                <h3 class="text-center bold">小児予防歯科</h3>
                <br>
                <p class="line-height-2">
                    未来のある子どもたちの健康なお口をつくる小児予防歯科。むし歯にならないための予防はもちろん、お口の機能を間違って覚えてしまわないように、という予防も大切です。正しい離乳食の食べ方、呼吸のしかた、普段何気なくしている癖などもお口作りに関わっています。<br>
                    当院では来院したその時に、その子に必要なお話（食事指導、歯磨き指導、むし歯の予防のお話、舌やお口のトレーニングなど）も必ず行います。歯並びに関しては、矯正専門医と相談しながら、適切な時期に適切な治療を提供致します。私自身、息子のいる親ですが、親はしっかりしなきゃと思い詰めて何から何まで一人でやるというのは大変です。私は歯科医師として、大切なお子さんを育てていく親御さんの良きサポーターになりたいと思っています。親御さんもお子さんも、来院して良かった！とegaoになってくださると嬉しいです。
                </p>
            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /.bg-white -->

<div class="rounded-bg">
    <svg class="rounded-bg-top fixed" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
        <path style="fill: #f6f6f4;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
    </svg>

    <div class="container" style="padding-top: 60px; padding-bottom: 100px;">
        <h1 class="text-center tracking-2 bold">STEP</h1>
        <br>
        <h5 class="text-center bold tracking-1">矯正歯科egaoの治療の進め方</h5>
        <br>
        <p class="text-center"><img src="<? bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<? bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>

        <div class="row" style="margin-top: 120px;">
            <div class="col-sm-6 col-md-5">
                <h3><span class="round-border-title tracking-1">初診矯正相談</span></h3>
                <br>
                <h4 class="bold">一人一人にあった治療方法を探します。</h4>
                <p class="line-height-2">
                    あなたやお子様の気になっていることを聞き、<br>
                    放って置けば、どうなるのか？<br>
                    治療すると、どうなるのか？<br>
                    どんな装置で？期間は？痛いの？<br>
                    実際にお口の中を拝見しないとご説明できないことが<br>
                    たくさんありますので、まずはお気軽にご来院ください。
                </p>
                <p class="text-center" style="padding-top: 30px;">
                    <img style="width: 20px;" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/dots.svg">
                </p>
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-2">
                <div style="position: relative;">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img3.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img3@2x.jpg 2x">
                    <div style="position: absolute; top: -50px; width: 100%; left: 0; text-align: center">
                        <div class="treatment-step">
                            <h1 class="roboto-condensed">1</h1>
                            <h6 class="bold">STEP</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-6">
                <h3><span class="round-border-title tracking-1">精密検査</span></h3>
                <br>
                <h4 class="bold">丁寧に検査し、歯と顔立ちの現状を知ります</h4>
                <p class="line-height-2">
                    詳しい検査をします。<br>
                    レントゲン・歯型・口の中と顔の写真をとります。<br>
                    歯型をとるのが初めてのお子さんも多くいますが大丈夫です。<br>
                    誰もがすぐにできるわけではありませんが、<br>
                    たいてい何度か練習しながら最後にはできるようになります。<br>
                    しっかりと検査をすることが最適な治療方法を考える材料となります。
                </p>
                <p class="text-center" style="padding-top: 30px;">
                    <img style="width: 20px;" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/dots.svg">
                </p>
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <div style="position: relative;">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img4.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img4@2x.jpg 2x">
                    <div style="position: absolute; top: -50px; width: 100%; left: 0; text-align: center">
                        <div class="treatment-step">
                            <h1 class="roboto-condensed">2</h1>
                            <h6 class="bold">STEP</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-6">
                <h3><span class="round-border-title tracking-1">診断</span></h3>
                <br>
                <h4 class="bold">不安なことがあればどんな小さなことでもご相談ください</h4>
                <p class="line-height-2">
                    治療について具体的な説明をします。<br>
                    まずは専門的に最適と考えられる治療方法をご提案しますが、<br>
                    あなたのご希望も治療方針に反映されます。<br>
                    遠慮せずにおっしゃってください。<br>
                    あなたと私の双方が納得した段階ではじめて<br>
                    矯正治療開始の同意書にサインしていただきます。
                </p>
                <p class="text-center" style="padding-top: 30px;">
                    <img style="width: 20px;" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/dots.svg">
                </p>
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <div style="position: relative;">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img5.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img5@2x.jpg 2x">
                    <div style="position: absolute; top: -50px; width: 100%; left: 0; text-align: center">
                        <div class="treatment-step">
                            <h1 class="roboto-condensed">3</h1>
                            <h6 class="bold">STEP</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-6">
                <h3><span class="round-border-title tracking-1">装置セット・治療開始</span></h3>
                <br>
                <h4 class="bold">笑顔ので暮らす治療のはじまりです。</h4>
                <p class="line-height-2">
                    多くの方は緊張しながらも楽しみにして来られます。<br>
                    まずは少しだけ違和感を感じると思いますが、<br>
                    1〜２週間して歯が動き出すと<br>
                    「おおっー」と嬉しくなると思いますよ。<br>
                    ゴールはまだまだ先ですが「過程」も是非、楽しんでください。
                </p>
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <div style="position: relative;">
                    <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img6.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img6@2x.jpg 2x">
                    <div style="position: absolute; top: -50px; width: 100%; left: 0; text-align: center">
                        <div class="treatment-step">
                            <h1 class="roboto-condensed">4</h1>
                            <h6 class="bold">STEP</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /.rounded-bg -->

<div class="rounded-bg bg-white">
    <svg class="rounded-bg-top fixed" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
        <path style="fill: #ffffff;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
    </svg>

    <div class="container" style="padding-top: 60px; padding-bottom: 120px;">
        <h1 class="text-center bold">PEDIATRIC DENTISTRY</h1>
        <br>
        <h5 class="text-center bold tracking-1">小児予防歯科について</h5>
        <br>
        <p class="text-center"><img src="<? bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<? bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>

        <div class="row" style="margin-top: 120px;">
            <div class="col-sm-5">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img7.jpg" srcset="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img7@2x.jpg 2x">
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <h3><span class="round-border-title tracking-1">診察・診療</span></h3>
                <br>
                <h4 class="bold">お子さんのお口の現状を診察します</h4>
                <p class="line-height-2">
                    初めての歯医者さんで不安や緊張しているお子さんも大丈夫。パパやママと一緒に椅子に座ったり、練習しながらゆっくり進めます。今の歯の状態を確認して、歯の本数や、歯に汚れはついていないか、むし歯がないか、舌に異常はないか、等を確認します。フッ素を希望される方にはむし歯予防としてフッ素を塗ります。歯ならびに関しては矯正専門医である院長と相談の上、最適な時期に最適な治療を提案いたします。
                </p>
                <p class="text-center" style="padding-top: 30px;">
                    <img style="width: 20px;" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/dots.svg">
                </p>
            </div>
        </div><!-- /.row -->

        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-5">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/compass/images/treatment/img8.jpg">
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <h3><span class="round-border-title tracking-1">予防指導</span></h3>
                <br>
                <h4 class="bold">診察をした上で、一人一人にあった予防の指導を行います</h4>
                <p class="line-height-2">
                    むし歯予防の指導として、歯磨きの仕方、食事の取り方、歯ブラシの選び方等をお話します。その他の予防指導としては、歯ならびが悪くならないように、正しい呼吸の仕方を得られるように、といった、その時の状況によって必要と思われるお話も行います。また、離乳食の食べ方、お口の周りの筋肉のトレーニング、やってはいけない普段の癖のお話など、日常生活で取り入れられる事もアドバイスしていきます。予防はむし歯だけにはとどまりません。笑顔が素敵なお子さんのお口を一緒に作りましょう。
                </p>
            </div>
        </div><!-- /.row -->

    </div><!-- /.container -->
</div><!-- /.rounded-bg -->

<? get_footer(); ?>
