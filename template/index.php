<?
$template->parent('layout/standard');
?>

<?	if($result){?>
<div id="result" style="padding:50px;border:6px solid blue;">
	<pre><?= var_export($result, true) ?></pre>
</div>
<?	}?>

<form method="post" action="">
	Was this example helpful?
	<select name="helpfulness">
		<option>Choose Helpfulness Level</option>
		<option value="1">Wretched</option>
		<option value="2">Alright</option>
		<option value="3">Perfect</option>
		<option value="4">Better Than Perfect</option>
	</select>
	<input type="submit" value="PUSH ME" />
</form>
