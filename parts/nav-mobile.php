<?php
/**
* スマホ用メニュー
*/
?>
<div id="drawerEgao" class="visible-xs drawer dw-xs-10 dw-sm-6 dw-md-4 fold" aria-labelledby="drawerEgao">
    <div class="drawer-controls">
        <a href="#drawerEgao" data-toggle="drawer" aria-foldedopen="false" aria-controls="drawerEgao">
            <i class="fa fa-bars fa-2x"></i>
        </a>
    </div>
    <div class="drawer-contents">
        <div class="drawer-heading" style="background-color: #ffffff;">
            <img class="img-responsive" src="<?php bloginfo('template_directory') ?>/compass/images/menu-xs-logo.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/menu-xs-logo@2x.png 2x">
        </div>
        <ul class="drawer-fullnav">
            <li role="presentation" class="active"><a href="<?php echo home_url(); ?>">TOP</a></li>
            <li role="presentation"><a href="<?php echo home_url(); ?>/news/">お知らせ</a></li>
            <li role="presentation"><a href="<?php echo home_url(); ?>/staff/">人のこと</a></li>
            <li role="presentation"><a href="<?php echo home_url(); ?>/introduction/">院内の紹介</a></li>
            <li role="presentation"><a href="<?php echo home_url(); ?>/treatment/">診療について</a></li>
            <li role="presentation"><a href="<?php echo home_url(); ?>/cost/">料金について</a></li>
            <li role="presentation"><a href="<?php echo home_url(); ?>/reservation/">ご予約</a></li>
        </ul>
        <div class="drawer-body">
            <p class="text-center">
                <a style="color: #515151; margin-right: 3rem;" href="https://www.facebook.com/sapporokyoseishikaegao/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                
                <a style="color: #515151;" href="https://www.instagram.com/orthodontic_office_egao/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
            </p>
        </div>
        <div class="drawer-footer text-cener">
            <small>&copy; 矯正歯科egao</small>
        </div>
    </div>
</div>

<a class="btn-tel-xs visible-xs" href="tel:011-616-1919"><i class="fa fa-phone"></i></a>
<a class="btn-line-xs visible-xs" href="https://lin.ee/PFANo7c" target="_blank" rel="noopener">
    <img src="<?php bloginfo('template_directory') ?>/compass/images/line-icon.png" alt="LINE">
</a>
