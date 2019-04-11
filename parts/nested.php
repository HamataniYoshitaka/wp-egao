<div class="bg-nested">
    <div id="content-nested">
<?php 
$offset = rand(0, 5);
for($i=0; $i<40; $i++) :
    if (($i + $offset)%5 == 0) :
        // アニメ
?>
        <div class="box box-anim size11">
<?php 
        $animIndex = rand(1, 13);
        if ($animIndex == 12) $animIndex = rand(1, 11);
        if (!($animIndex == 9 || $animIndex == 10 || $animIndex == 13)) :
            // 1枚もの
?>
            <div class="top-illust-<?php echo $animIndex ?>">
                <img class="anim-<?php echo $animIndex ?>" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $animIndex ?>.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $animIndex ?>@2x.png 2x">
            </div>
<?php 
        else :
            // 2枚もの
            if ($animIndex == 9) {
                $animIndex == 10;    // カプセルは不採用
            }
?>
            <div class="top-illust-<?php echo $animIndex ?>">
                <img class="anim-<?php echo $animIndex ?>-1" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $animIndex ?>-1.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $animIndex ?>-1@2x.png 2x">
                <img class="anim-<?php echo $animIndex ?>-2" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $animIndex ?>-2.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $animIndex ?>-2@2x.png 2x">
            </div>
<?php 
        endif;
?>
        </div>
<?php 
    else :
        // GIFアニメ
        if (rand(0,3) == 3) :
            // でかい
?>
        <div class="box box-img size22" style="background-image: url(<?php bloginfo('template_directory') ?>/compass/images/gif/<?php echo rand(1,27) ?>-md-03.gif);">
        </div>
<?php 
        else :
            // 小さい
?>
        <div class="box box-img size11" style="background-image: url(<?php bloginfo('template_directory') ?>/compass/images/gif/<?php echo rand(1,27) ?>-sm-03.gif);">
        </div>
<?php 
        endif;
    endif;
endfor;
?>
    </div>
</div>

<script>
$(document).ready(function(){
    var cellWidth = 140;
    var winWidth = $(window).width();
    if (winWidth < 768) cellWidth = winWidth / 4.0;
    // alert('ho');
    $("#content-nested").nested(
        {
            selector: '.box',
            gutter: 0,
            minWidth: cellWidth,
            animate: false,
        }
    );
});
</script>
