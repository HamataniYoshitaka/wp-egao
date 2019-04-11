<svg id="TOP_SVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
	<defs>
		<path id="TOP_SVGID_1" d="M1400.7,680 C1000,777 400,777 0,680 V0 H1400 L1400,680 z"/>
	</defs>
	<clipPath id="TOP_SVGID_2">
		<use xlink:href="#TOP_SVGID_1"  style="overflow:visible;"/>
	</clipPath>
	<image style="overflow:visible;clip-path:url(#TOP_SVGID_2);" class="hidden-xs" width="1400" height="756" xlink:href="<?php bloginfo('template_directory') ?>/compass/images/top-bg@2x.jpg" >
	</image>
	<image style="overflow:visible;clip-path:url(#TOP_SVGID_2);" class="visible-xs" width="1400" height="756" xlink:href="<?php bloginfo('template_directory') ?>/compass/images/top-bg.jpg" >
	</image>

</svg>

<script>
$(document).ready(function(){
	resizeSvg();
});

var timer = false;
$(window).resize(function() {
    if (timer !== false) {
        clearTimeout(timer);
    }
    timer = setTimeout(function() {
		resizeSvg();
    }, 200);
});

function resizeSvg() {
	// 1400*756基準
	var wW = $(window).width();
	var wH = $(window).height();
	var wAspect = wH / wW;
	if (wAspect > 756/1400) {
		// 縦長, 左右をつめる
		var ratio = 756 / wH;
		var nW = wW * ratio;
		// $('#TOP_SVG')[0].setAttribute('viewBox', '0 0 800 400')
		var lt = (1400 - nW)/2;
		var rt = lt + nW;
		$('#TOP_SVG')[0].setAttribute('viewBox', lt + ' 0 ' + nW + ' 756');
		ratio = wW / 1400.0;
		// M1400.7,680 C1000,777 400,777 0,680 V0 H1400 L1400,680 z
		var clipPath = 'M' + rt + ',' + 680 + ' C' + (rt - 400*ratio) + ',777' + ' ' + (lt + 400*ratio) + ',777 ' + lt + ',' + 680 + ' V0 H' + rt + ' L' + rt + ',680' + ' z';
		$('#TOP_SVGID_1').attr('d', clipPath);
		$('.p1').css('margin-top', '-76px');

	}
	else {
		// 横長, 天地を詰める
		var ratio = 1400 / wW;
		var nH = wH * ratio;
		var y1 = (756 - nH)/2;
		var y2 = y1 + nH;

		$('#TOP_SVG')[0].setAttribute('viewBox', '0 ' + y1 + ' 1400 ' + y2);
		ratio = wH / 756.0;
		// M1400.7,680 C1000,777 400,777 0,680 V0 H1400 L1400,680 z
		var clipPath = 'M1400,' + (y2-76*ratio) + ' C1000,' + (y2+21*ratio) + ' 400,'+ (y2+21*ratio)+' ' + '0,' + (y2-76*ratio) + ' V'+ y1 +' H1400' + ' L1400,' + y2 + ' z';
		$('#TOP_SVGID_1').attr('d', clipPath);
		$('.p1').css('margin-top', -76*ratio);
	}
}
</script>
