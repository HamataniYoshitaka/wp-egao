<footer class="footer">
    <div style="position: absolute; top: -40px; left: 0; width: 100%;" class="text-center">
        <button type="button" class="scrollto btn-footer" data-anchor="#top">
            <img src="<? bloginfo('template_directory') ?>/compass/images/animation/5.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/5@2x.png 2x">
        </button>
    </div>

    <div class="text-center" style="margin-bottom: 50px;">
        <p class="roboto-condensed tracking-1" style="color: #ffffff;">Orthodontic Office</p>
        <img style="width: 150px;" src="<? bloginfo('template_directory') ?>/compass/images/top-logo.png" srcset="<? bloginfo('template_directory') ?>/compass/images/top-logo@2x.png 2x">
    </div>

    <p class="josefin text-center bold">Copyright <? echo date('Y') ?> 矯正歯科egao. All Rights Reserved.</p>
    <p class="josefin text-center">
        <a style="color: #ffffff;" href="http://landmark-design.net" target="_blank">Powerd by LANDMARK</a>
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
