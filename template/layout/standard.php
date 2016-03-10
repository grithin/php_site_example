<?
$template->parent('layout/top');
?>
<div id="standard">
	<?= $template->inner ?>
</div>

<?	$template->section('header'); ?>

<?= ($template->title ? $template->title : 'Base Deployment Code') ?>

<?	$template->section('footer'); ?>

&copy;Grithin 2006-<?= date('Y') ?> | <a href="/bob">Don't Click This!</a>

<?	$template->section(); ?>