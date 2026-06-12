<footer class="footer">
    <div style="position: absolute; top: -40px; left: 0; width: 100%;" class="text-center">
        <button type="button" class="scrollto btn-footer" data-anchor="#top">
            <img src="<?php bloginfo('template_directory') ?>/compass/images/animation/5.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/5@2x.png 2x">
        </button>
    </div>

    <div class="text-center" style="margin-bottom: 50px;">
        <p class="roboto-condensed tracking-1" style="color: #ffffff;">Orthodontic Office</p>
        <img style="width: 150px;" src="<?php bloginfo('template_directory') ?>/compass/images/top-logo.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/top-logo@2x.png 2x">
    </div>

    <div class="text-center" style="padding-bottom: 50px;">
            <a href="https://lin.ee/PFANo7c" target="_blank" rel="noopener">
                <img src="<?php bloginfo('template_directory') ?>/compass/images/line-banner.png" alt="LINE" style="width: 90%; max-width: 500px; height: auto;">
            </a>
        </div>

    <p class="josefin text-center bold">Copyright <?php echo date('Y') ?> 矯正歯科egao. All Rights Reserved.</p>
    <p class="josefin text-center">
        <a style="color: #ffffff;" href="https://landmark-design.net" target="_blank">Powerd by LANDMARK</a>
    </p>
</footer>

<script>
$(document).ready(function(){
    $('.scrollto').click(function(){
    	var top = 0;
    	$('html, body').animate({scrollTop: top}, 'slow');
    	return false;
    });
});
</script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" type="text/javascript"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" type="text/javascript"></script>
<![endif]-->

<?php wp_footer(); ?>

</body>
</html>
