<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?= ($template->title ? $template->title : 'Base Deployment Code') ?></title>
	<link href="/css/app.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="wrapper">
	<div id="head">
		<?= $template->get_section('header') ?>
	</div>
	<div id="body">
		<?= $template->inner ?>
	</div>
	<footer id="footer">
		<?= $template->get_section('footer') ?>
	</footer>
</div>


</body>
</html>