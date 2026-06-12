<?php 
/**
* インデックスページのテンプレート
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
require_once(dirname(__FILE__) . '/parts/nav-mobile.php');
?>
<div style="position: relative; z-index: 1; width: 100%; height: 100%;">
    <?php require_once(dirname(__FILE__) . '/compass/svg/top.php'); ?>
    <div class="hidden-xs" style="position: absolute; top: 50px; left: 50px; width: 300px;">
        <div class="text-center">
            <p class="roboto-condensed tracking-1" style="color: #ffffff;">Orthodontic Office</p>
            <img src="<?php bloginfo('template_directory') ?>/compass/images/top-logo.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-logo@2x.png 2x">
        </div>
    </div>
    <div class="text-center visible-xs" style="position: absolute; top: 12px; left: 0; width: 100%;">
        <p class="roboto-condensed tracking-1" style="color: #ffffff;">Orthodontic Office</p>
        <img src="<?php bloginfo('template_directory') ?>/compass/images/top-logo.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-logo@2x.png 2x">
    </div>

    <div class="hidden-xs" style="position: absolute; top: 50px; right: 50px; width: 300px;">
        <div class="text-center">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-white-l.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-white-l@2x.png 2x">
            <p class="tracking-1 bold line-height-2" style="color: #ffffff; font-size: 14px; margin-top: 10px;">えがおで暮らす、<br>仕組みをつくる。</p>
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-white-l.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-white-l@2x.png 2x">
            <h6 class="text-center tracking-2" style="color: #ffffff;"><i>from Hokkaido</i></h6>
        </div>
    </div>

</div>

<div class="p1" style="position: relative; width; 100%; height: 100%;">
    <?php require_once(dirname(__FILE__) . '/parts/nested.php'); ?>
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.3);">
    </div>
    <div style="position: absolute; top: 50%; left: 0; width: 100%;">
        <div class="text-center" style="margin-top: -100px;">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/top-title-concept.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-title-concept@2x.png 2x"><br>
            <img style="margin-top: 30px; margin-bottom: 30px;" src="<?php bloginfo('template_directory') ?>/compass/images/wave-white.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-white@2x.png 2x">
            <h4 class="bold tracking-1" style="color: #ffffff;">大切にしていること</h4>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 90px; padding-bottom: 60px;">
    <div class="hidden-xs">
        <p class="text-center" style="margin-bottom: 30px;">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-p2.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-p2@2x.png 2x">
        </p>
        <h2 class="text-center bold tracking-2">
            えがおで暮らす、仕組みをつくる。
        </h2>
        <h3 class="text-center tracking-2"><i>from Hokkaido</i></h3>
        <p class="text-center" style="margin-top: 30px;">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-p2.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-p2@2x.png 2x">
        </p>
    </div>
    <div class="visible-xs">
        <img class="img-responsive visible-xs" src="<?php bloginfo('template_directory') ?>/compass/images/wave-p2.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-p2@2x.png 2x">
        <h2 class="text-center bold tracking-2 line-height-15">
            えがおで暮らす<br>仕組みをつくる
        </h2>
        <h3 class="text-center tracking-2"><i>from Hokkaido</i></h3>
        <img class="img-responsive visible-xs" src="<?php bloginfo('template_directory') ?>/compass/images/wave-p2.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-p2@2x.png 2x">
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="col-p2 hidden-xs">
                <div class="p2-illust-20">
                    <img class="anim-20" src="<?php bloginfo('template_directory') ?>/compass/images/animation/20.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/20@2x.png 2x">
                </div>

<?php 
for ($i=1; $i<=6; $i++) :
    if (!($i == 9 || $i == 10 || $i == 13)) :
?>
                <div class="p2-illust-<?php echo $i ?>">
                    <img class="anim-<?php echo $i ?>" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>@2x.png 2x">
                </div>
<?php 
    else :
?>
                <div class="p2-illust-<?php echo $i ?>">
                    <img class="anim-<?php echo $i ?>-1" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-1.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-1@2x.png 2x">
                    <img class="anim-<?php echo $i ?>-2" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-2.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-2@2x.png 2x">
                </div>
<?php 
    endif;
endfor;
?>
            </div>
        </div><!-- /.col -->

        <div class="col-sm-6">
            <p class="bold text-center line-height-2" style="margin-top: 60px;">
                はじめまして。<br>
                2016年10月より北海道・札幌の桑園で「矯正歯科egao」を<br class="hidden-xs">開院しております、生野啓一郎と申します。<br>
                <br>
                わたしは矯正歯科治療を専門に行う歯科医師です。<br>
                矯正歯科治療は、幾度かの通院で終わるものではなく、<br class="hidden-xs">
                ある程度の長い期間通院していただく必要がございます。<br>
                これを面倒と感じる気持ちはわからないこともないのですが、<br class="hidden-xs">
                それこそが矯正歯科治療ならではの魅力と私は感じています。<br>
                長い期間通院するからこそ、お互いの信頼関係を築くことができ、<br class="hidden-xs">
                生涯における歯の健康を守るお手伝いができると思うのです。<br>
                <br>
                たくさんの皆様と矯正歯科治療を通して<br class="hidden-xs">
                温かい関係を築きたいという思いは開院以来変わりません。<br>
                ご兄弟、ご家族で来院していただける患者さまも増え、<br class="hidden-xs">
                その思いはますます強くなっています。<br>
                <br>
                矯正歯科egaoに来て頂く皆様には、<br class="hidden-xs">
                きれいで健康的になったという「結果」だけではなく、<br class="hidden-xs">
                その「過程」も、いつも笑顔で居て欲しいと思っています。<br>
                <br>
                1人1人が笑顔で暮らせる、その仕組みを、矯正治療でつくっていくこと。<br>
                それが矯正歯科egaoのコンセプトです。
            </p>
        </div><!-- /.col -->

        <div class="col-sm-3">
            <div class="col-p2 hidden-xs">

<?php 
for ($i=7; $i<=13; $i++) :
    if ($i == 12 || $i == 9) $i++;
    if (!($i == 9 || $i == 10 || $i == 13)) :
?>
                <div class="p2-illust-<?php echo $i ?>">
                    <img class="anim-<?php echo $i ?>" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>@2x.png 2x">
                </div>
<?php 
    else :
?>
                <div class="p2-illust-<?php echo $i ?>">
                    <img class="anim-<?php echo $i ?>-1" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-1.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-1@2x.png 2x">
                    <img class="anim-<?php echo $i ?>-2" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-2.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-2@2x.png 2x">
                </div>
<?php 
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
            <img src="<?php bloginfo('template_directory') ?>/compass/images/top-title-news.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-title-news@2x.png 2x"><br>
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <h4 class="text-center bold tracking-1">お知らせ</h4>

        <div class="row" style="margin-top: 80px; margin-bottom: 50px;">
<?php 
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
                    <a class="image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url ?>);">
                          <span class="category"><?php echo get_cat_name($cat->term_id); ?></span>
                    </a>
                    <div class="caption">
                        <h6><?php the_date('Y.m.d'); ?></h6>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div><!-- /.col -->
<?php endwhile; ?>
        </div><!-- /.row -->

        <h4 class="text-center">
            <a class="btn btn-egao" href="<?php echo home_url(); ?>/news/">MORE&emsp;<img class="more" src="<?php bloginfo('template_directory') ?>/compass/images/caret-right.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/caret-right@2x.png 2x"></a>
        </h4>
    </div><!-- /.container -->

</div><!-- /.bg-white -->

<div class="rounded-bg">
    <svg class="rounded-bg-top fixed" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1280 70" xml:space="preserve">
        <path style="fill: #f6f6f4;" d="M1280,0C910.8,88,392,90.2,0,0v70h1280V0z"/>
    </svg>
    <div class="container" style="padding-top: 80px; padding-bottom: 120px;">
        <h1 class="text-center line-height-15">
            <img class="hidden-xs" src="<?php bloginfo('template_directory') ?>/compass/images/top-title-information.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-title-information@2x.png 2x"><br>
            <img class="visible-xs" style="width: 290px;" src="<?php bloginfo('template_directory') ?>/compass/images/top-title-information.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-title-information@2x.png 2x"><br>
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <h4 class="text-center bold tracking-1">当院の情報</h4>
        <br>
        <br>
        <h4 class="text-center">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/top-title-timetable.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-title-timetable@2x.png 2x">
        </h4>

        <?php include_once(dirname(__FILE__) . '/parts/timetable.php'); ?>

        <h4 class="text-center">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/top-title-children.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-title-children@2x.png 2x">
        </h4>
        <br>
        <p class="text-center">週1程度 (9:30~17:00) / 曜日不定(診察カレンダーで確認できます)</p>
        <div class="text-center" style="padding-top: 20px; padding-bottom: 20px;">
            <a href="https://lin.ee/PFANo7c" target="_blank" rel="noopener">
                <img src="<?php bloginfo('template_directory') ?>/compass/images/line-banner.png" alt="LINE" style="width: 100%; max-width: 500px; height: auto;">
            </a>
        </div>
        <p class="text-center">※１週間以内の予約希望はお電話で</p>

        <h4 id="calendar" class="text-center bold tracking-1" style="margin-top: 100px;">診療カレンダー</h4>
        <h1 class="text-center">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>

    <?php require_once(dirname(__FILE__) . '/parts/calendar.php'); ?>
        <h4 class="text-center bold tracking-1" style="margin-top: 100px;">アクセス</h4>
        <h1 class="text-center line-height-15">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
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
            <img src="<?php bloginfo('template_directory') ?>/compass/images/wave-small.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/wave-small@2x.png 2x"><br>
        </h1>
        <h3 class="text-center">Tel 011-616-1919</h3>
        <br>
        <h4 class="text-center">
            <a class="btn btn-egao" href="mailto:info@egao-kyousei-sapporo.com">メールを送る&emsp;<img class="mail" src="<?php bloginfo('template_directory') ?>/compass/images/envelope.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/envelope@2x.png 2x"></a>
        </h4>
        <div class="text-center" style="margin-top:20px;">
            <button id="btn-certificate-modal" class="btn btn-egao" style="display:inline-flex;align-items:center;gap:10px;padding:13px 20px;background-color:#E8E7DB;">
              <div class="text-left">
                <div class="">当歯科医院の施設基準について</div>
                <small>厚生労働省北海道厚生局に届出を行っています</small>
              </div>
              <svg class="more" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.27 8.18" width="16" height="8">
                <polygon points="11.87 0 11.19 .73 14.26 3.59 0 3.59 0 4.59 14.26 4.59 11.19 7.45 11.87 8.18 16.27 4.09 11.87 0"/>
              </svg>
            </button>
        </div>

    </div><!-- /.container -->
</div>
<!-- Modal -->
<div class="modal fade" id="certificateModal" tabindex="-1" role="dialog" aria-labelledby="certificate">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border-radius:0;border:2px solid black; padding:16px;">
      <div style="display:flex;justify-content:end;">
          <button type="button" class="btn btn-link" data-dismiss="modal" style="">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 20" width="40" height="20">
              <line x1="1" y1="1" x2="39" y2="19" stroke="black" stroke-width="2"/>
              <line x1="1" y1="19" x2="39" y2="1" stroke="black" stroke-width="2"/>
            </svg>
          </button>
        </div>
      <h4 class="bold text-center" style="line-height:2;">
        当医院は、以下の施設基準等に適合している旨、<br class="hidden-xs" />
        厚生労働省北海道厚生局に届出を行っています。
      </h4>
      <br/>
      <p class="text-center"><img src="<?php bloginfo('template_directory') ?>/compass/images/half-balls.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/half-balls@2x.png 2x"></p>
      <br/>
      <br/>
      <div style="max-width:620px;margin-left:auto; margin-right:auto;">
        <h4 class="bold">
        歯科点数表の初診料の注1に規定する施設基準【歯初診】
        </h4>
        <p style="line-height:2;">
          当院では口腔内で使用する歯科医療機器等について、患者様ごとの交換、専用の機器を用いた洗浄・滅菌 処理の徹底等、十分な院内感染防止対策を行っています。<br/>
          当院には歯科外来診療の院内感染防止対策に係る標準予防策及び新興感染症に対する対策の研修を4年に1回以上、定期的に受講している常勤の歯科医師が1名以上配置されています。<br/>
          また、職員を対象とした院内感染防止対策にかかる標準予防策及び新興感染症に対する対策等の院内研修等を実施しています。
        </p>
        <br/>
      <br/>

        <h4 class="bold">
        医療情報取得加算
        </h4>
        <p style="line-height:2;">
        当院は、マイナ保険証で受診ができる「オンライン資格確認」を導入しています。<br/>
        マイナ保険証の利用や問診票などを通じて患者様の診療情報を取得・活用することにより、質の高い医療の提供に努めています。
        </p>
        <br/>
      <br/>

        <h4 class="bold">
        明細書発行体制
        </h4>
        <p style="line-height:2;">
        算定した診療報酬の区分、項目の名称及びその点数又は金額を記載した詳細な明細書の発行を無料で 行っています。<br/>
        公費医療の(自己負担のない)患者様にも無料で発行しています。なお、必要のない場合は事前に窓口にお伝えください。
        </p>
        <br/>
      <br/>

        <h4 class="bold">
        一般名処方加算
        </h4>
        <p style="line-height:2;">
        薬剤の一般的名称を記載する処方箋を交付する場合には、医薬品の供給状況等を踏まえつつ、一般名処方の趣旨を患者に十分に説明を実施しています。<br/>
        医薬品の供給状況等や、令和6年10月より長期収載品について医療上の必要性があると認められない場合に患者様の希望を踏まえ処方等した場合は選定療養となること等を踏まえつつ、一般名処方の趣旨を患者様に十分に説明します。
        </p>
        <br/>
      <br/>

        <h4 class="bold">
        医療DX推進体制整備加算【医療DX】
        </h4>
        <p style="line-height:2;">
        電子処方箋の発行及び電子カルテ情報共有サービスなどの医療DXにかかる取り組みを実施し、オンライン資格確認等システムで得た医療情報を活用し、質の高い医療を提供できるよう取り組んでいます。
        </p>
        <br/>
      <br/>

        <h4 class="bold">
        歯科外来診療感染対策加算【外感染1】
        </h4>
        <p style="line-height:2;">
        歯科外来診療における診療感染対策に十分な体制の整備、十分な機器を有し、研修を受けた者が常勤し、院内感染防止に努めています。
        </p>
        <br/>
      <br/>

        <h4 class="bold">
        クラウン・ブリッジ維持管理料【補管】
        </h4>
        <p style="line-height:2;">
        当院で装着した冠やブリッジにおいて、2年間の維持管理を行っています。異常があればそのままにせず、早めにお知らせください。
        </p>
        <br/>
      <br/>

        <h4 class="bold">
        歯科矯正診断料【矯診】
        </h4>
        <p style="line-height:2;">
        歯科矯正セファログラム(頭部エックス線規格写真)が行える機器を設置しています。 歯科矯正に関する医療を担当する病院歯科と連携しています。
        </p>
        <br/>
        <br/>

        <h4 class="bold">
        歯科外来・在宅ベースアップ評価料【歯外在ベI】
        </h4>
        <p style="line-height:2;">
        職員の賃金の改善を行い、働きやすい職場の環境づくりに努めています。
        </p>
        <br/>
        <div style="display:flex;justify-content:end;">
          <p>
            矯正歯科 egao<br/>
            011-616-1919<br/>
            2024年10月現在
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('#btn-certificate-modal').click(function(){
        $('#certificateModal').modal();
    });
});
</script>
<?php get_footer(); ?>
