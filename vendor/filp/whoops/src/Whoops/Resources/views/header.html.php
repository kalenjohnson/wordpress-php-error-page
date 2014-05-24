<div class="exception">
	<img class="exc-logo" src="<?php echo plugins_url('/php-error-page/img/wp-header-logo.png'); ?>" alt="Wordpress Logo" />
	<h3 class="exc-title">
		<?php foreach($name as $i => $nameSection): ?>
			<?php if($i == count($name) - 1): ?>
				<span class="exc-title-primary"><?php echo $tpl->escape($nameSection) ?></span>
			<?php else: ?>
				<?php echo $tpl->escape($nameSection) . ' \\' ?>
			<?php endif ?>
		<?php endforeach ?>
	</h3>
	<p class="exc-message">
		<?php echo $tpl->escape($message) ?>
	</p>
</div>
