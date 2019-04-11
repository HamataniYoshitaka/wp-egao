<div class="icons-xs visible-xs">
    <div class="p2-illust-20" style="top: 0%; left: 5%">
        <img class="anim-20" src="<?php bloginfo('template_directory') ?>/compass/images/animation/20.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/20@2x.png 2x">
    </div>

<?php 
	for ($i=1; $i<=13; $i++) :
        if ($i == 12 || $i == 9) $i++;
		if (!($i == 9 || $i == 10 || $i == 13)) :
?>
					<div class="p2-illust-<?php echo $i ?>">
						<img class="anim-<?php echo $i ?>" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>@2x.png 2x">
					</div>
<?php 
		else :
?>
				<div class="p2-illust-<?php echo $i ?>">
					<img class="anim-<?php echo $i ?>-1" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-1.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-1@2x.png 2x">
					<img class="anim-<?php echo $i ?>-2" src="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-2.png" srcset="<?php bloginfo('template_directory') ?>/compass/images/animation/<?php echo $i ?>-2@2x.png 2x">
				</div>
<?php 
		endif;
	endfor;
?>
</div>
