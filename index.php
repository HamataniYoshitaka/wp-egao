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
</div>

<div class="p2" style="position: relative; width: 100%; margin-top: -90px;">
    <img class="img-responsive" style="width:100%;" src="<? bloginfo('template_directory') ?>/compass/images/dummy/bg1-top.png">
    <img class="img-responsive" style="width:100%;" src="<? bloginfo('template_directory') ?>/compass/images/dummy/bg1-bottom.jpg">
</div>

<? get_footer(); ?>
