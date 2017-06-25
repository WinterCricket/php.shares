<?php
require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');

$bootstrap = new Bootstrap($_GET);
$controller = new $bootstrap->createController();
if($controller){
	$controller->executeAction();
}
?>