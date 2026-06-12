<nav class="nav-fixed <?php if (is_home() || is_front_page()) echo 'top up' ?> hidden-xs">
    <div class="container clearfix">
        <div class="pull-left tab">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_directory') ?>/compass/images/nav-fixed-logo.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/nav-fixed-logo@2x.png 2x">
            </a>
        </div>
        <div class="menu">
            <a href="<?php echo home_url(); ?>/news/">お知らせ</a>/
            <a href="<?php echo home_url(); ?>/staff/">人のこと</a>/
            <a href="<?php echo home_url(); ?>/introduction/">院内の紹介</a>/
            <a href="<?php echo home_url(); ?>/treatment/">診療について</a>/
            <a href="<?php echo home_url(); ?>/cost/">料金について</a>/
            <a href="<?php echo home_url(); ?>/reservation/">ご予約</a>
        </div>
        <a class="facebook" href="https://www.facebook.com/sapporokyoseishikaegao/" target="_blank">
            <i class="fa fa-facebook fa-lg"></i>
        </a>
        <a class="instagram" href="https://www.instagram.com/orthodontic_office_egao/" target="_blank">
            <i class="fa fa-instagram fa-lg"></i>
        </a>
            <div class="tel roboto-condensed bold">
                T<span style="font-size: 75%;">EL</span> 011-616-1919
            </div>
            <a class="line" href="https://lin.ee/PFANo7c" target="_blank" rel="noopener">
                <img src="<?php bloginfo('template_directory') ?>/compass/images/line-icon.png" alt="LINE" style="width: 100px; height: auto;">
            </a>
    </div>
</nav>
