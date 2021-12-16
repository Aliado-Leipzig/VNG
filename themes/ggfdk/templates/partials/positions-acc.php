<?php $accHead1 = get_field('acc_head_1',$posId); ?>
<?php $accContent1 = get_field('acc_content_1',$posId); ?>
<?php if(!empty($accHead1) && !empty($accContent1)):?>
	<div class="acc-wrap acc-open">
		<h3 class="acc-trigger"><?php echo get_field('acc_head_1',$posId);?></h3>
                <div class="acc-content" style="display: block"><div class="acc-content-wrapper"><?php echo get_field('acc_content_1',$posId);?></div></div>
	</div>
<?php endif;?>
<?php $accHead2 = get_field('acc_head_2',$posId); ?>
<?php $accContent2 = get_field('acc_content_2',$posId); ?>
<?php if(!empty($accHead2) && !empty($accContent2)):?>
	<div class="acc-wrap">
		<h3 class="acc-trigger"><?php echo get_field('acc_head_2',$posId);?></h3>
                <div class="acc-content"><div class="acc-content-wrapper"><?php echo get_field('acc_content_2',$posId);?></div></div>
	</div>
<?php endif;?>
<?php $accHead3 = get_field('acc_head_3',$posId); ?>
<?php $accContent3 = get_field('acc_content_3',$posId); ?>
<?php if(!empty($accHead3) && !empty($accContent3)):?>
	<div class="acc-wrap">
		<h3 class="acc-trigger"><?php echo get_field('acc_head_3',$posId);?></h3>
                <div class="acc-content"><div class="acc-content-wrapper"><?php echo get_field('acc_content_3',$posId);?></div></div>
	</div>
<?php endif;?>