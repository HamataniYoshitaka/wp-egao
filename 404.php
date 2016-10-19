<?
/**
* 404ページ
*/
get_header();
require_once(dirname(__FILE__) . '/parts/nav-pc.php');
require_once(dirname(__FILE__) . '/parts/nav-mobile.php');
?>
<div class="bg-white bg-pattern">

    <div class="container" style="padding-top: 180px; padding-bottom: 180px;">
        <h1 class="text-center josefin">PAGE NOT FOUND</h1>
        <br>
        <h5 class="text-center bold tracking-1">ページが見つかりませんでした</h5>
        <br>
        <br>
        <p class="text-center line-height-2">
            お探しの記事は見つかりませんでした。<br>
            URLが間違っているか、公開期間を終了した可能性があります。
        </p>
        <br>
        <br>

        <h4 class="text-center">
            <a class="btn btn-egao" href="<? echo home_url(); ?>">TOPへ&emsp;<img class="more" src="<? bloginfo('template_directory') ?>/compass/images/caret-right.png" srcset="<? bloginfo('template_directory') ?>/compass/images/caret-right@2x.png 2x"></a>
        </h4>

    </div><!-- /.container -->
</div><!-- /.bg-white -->
<? get_footer(); ?>
