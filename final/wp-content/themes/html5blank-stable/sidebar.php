<!-- sidebar -->
<aside class="sidebar">

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-0')) ?>
	</div>
    <?php /*
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
    */ ?>
</aside>
<!-- /sidebar -->