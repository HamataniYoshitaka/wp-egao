<div class="bg-nested">
    <div id="content-nested">
<?
$offset = rand(0, 5);
for($i=0; $i<40; $i++) :
    if (($i + $offset)%5 == 0) :
        // アニメ
?>
        <div class="box box-anim size11">
<?
        $animIndex = rand(1, 13);
        if ($animIndex == 12) $animIndex = rand(1, 11);
        if (!($animIndex == 9 || $animIndex == 10 || $animIndex == 13)) :
            // 1枚もの
?>
            <div class="top-illust-<? echo $animIndex ?>">
                <img class="anim-<? echo $animIndex ?>" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $animIndex ?>.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $animIndex ?>@2x.png 2x">
            </div>
<?
        else :
            // 2枚もの
?>
            <div class="top-illust-<? echo $animIndex ?>">
                <img class="anim-<? echo $animIndex ?>-1" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $animIndex ?>-1.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $animIndex ?>-1@2x.png 2x">
                <img class="anim-<? echo $animIndex ?>-2" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $animIndex ?>-2.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $animIndex ?>-2@2x.png 2x">
            </div>
<?
        endif;
?>
        </div>
<?
    else :
        // GIFアニメ
        if (rand(0,3) == 3) :
            // でかい
?>
        <div class="box box-img size22" style="background-image: url(<? bloginfo('template_directory') ?>/compass/images/gif/<? echo rand(1,27) ?>-md-03.gif);">
        </div>
<?
        else :
            // 小さい
?>
        <div class="box box-img size11" style="background-image: url(<? bloginfo('template_directory') ?>/compass/images/gif/<? echo rand(1,27) ?>-sm-03.gif);">
        </div>
<?
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
