<?
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
            <img class="img-responsive" src="<? bloginfo('template_directory') ?>/compass/images/menu-xs-logo.png" srcset="<? bloginfo('template_directory') ?>/compass/images/menu-xs-logo@2x.png 2x">
        </div>
        <ul class="drawer-fullnav">
            <li role="presentation" class="active"><a href="<? echo home_url(); ?>">TOP</a></li>
            <li role="presentation"><a href="<? echo home_url(); ?>/news/">お知らせ</a></li>
        </ul>
        <div class="drawer-body">
            <p class="text-center">
                <a style="color: #515151;" href="https://www.facebook.com/sapporokyoseishikaegao/" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
            </p>
        </div>
        <div class="drawer-footer text-cener">
            <small>&copy; 矯正歯科egao</small>
        </div>
    </div>
</div>
