<div class="icons-xs visible-xs">
    <div class="p2-illust-20" style="top: 0%; left: 5%">
        <img class="anim-20" src="<? bloginfo('template_directory') ?>/compass/images/animation/20.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/20@2x.png 2x">
    </div>

<?
	for ($i=1; $i<=13; $i++) :
        if ($i == 12 || $i == 9) $i++;
		if (!($i == 9 || $i == 10 || $i == 13)) :
?>
					<div class="p2-illust-<? echo $i ?>">
						<img class="anim-<? echo $i ?>" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>@2x.png 2x">
					</div>
<?
		else :
?>
				<div class="p2-illust-<? echo $i ?>">
					<img class="anim-<? echo $i ?>-1" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-1.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-1@2x.png 2x">
					<img class="anim-<? echo $i ?>-2" src="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-2.png" srcset="<? bloginfo('template_directory') ?>/compass/images/animation/<? echo $i ?>-2@2x.png 2x">
				</div>
<?
		endif;
	endfor;
?>
</div>
