<?php /* @var $this Controller */ ?>
<?php $this->beginContent('/layouts/main'); ?>
<div class="row">
	<div class="col-sm-2">
		<div style="border-right:1px solid #ddd;padding-bottom:200px;">
		<?php $this->renderPartial("/default/_sidenav");?>
		</div>
	</div>
	<div class="col-sm-10">
		<div id="content" >
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	</div>
<?php $this->endContent(); ?>