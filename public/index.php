<?
$_ENV['root_folder'] = realpath(dirname(__FILE__).'/../').'/';
require $_ENV['root_folder'] . '/vendor/autoload.php';

use \Grithin\Route;

$route = new Route(['folder'=>$_ENV['root_folder'].'control/']);

try{
	$route->handle();
}catch(RouteException $e){
	\Grithin\Debug::quit(['Failed routing', $route]);
}

