<?
# restrict web access to control/cli folder
if($_SERVER['HTTP_HOST']){
	die('cli restricted');
}