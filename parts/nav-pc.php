<nav class="nav-fixed <? if (is_home() || is_front_page()) echo 'top up' ?> hidden-xs">
    <div class="container clearfix">
        <div class="pull-left tab">
            <a href="<? echo home_url(); ?>">
                <img src="<? bloginfo('template_directory') ?>/compass/images/nav-fixed-logo.png" srcset="<? bloginfo('template_directory') ?>/compass/images/nav-fixed-logo@2x.png 2x">
            </a>
        </div>
        <div class="menu">
            <a href="<? echo home_url(); ?>/news/">お知らせ</a>/
            <a href="<? echo home_url(); ?>/staff/">人のこと</a>/
            <a href="<? echo home_url(); ?>/introduction/">院内の紹介</a>/
            <a href="<? echo home_url(); ?>/treatment/">診療について</a>/
            <a href="<? echo home_url(); ?>/cost/">料金について</a>/
            <a href="<? echo home_url(); ?>/reservation/">ご予約</a>
        </div>
        <a class="facebook" href="https://www.facebook.com/sapporokyoseishikaegao/" target="_blank">
            <i class="fa fa-facebook fa-lg"></i>
        </a>
        <div class="tel roboto-condensed bold">
            T<span style="font-size: 75%;">EL</span> 011-616-1919
        </div>

    </div>
</nav>
