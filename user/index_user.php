<?php
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',dirname(dirname(__FILE__)));
	require_once(ROOT."/components/bootstrap.php");
	require_once(ROOT."/components/init.php");
	//require_once(ROOT."/components/Router.class.php");
	//echo ROOT;
	$a = new Router();
	$a->run();
	echo "Route: ".$a->getRoute()."<br>";
	echo "Controller: ".$a->getController()."<br>";
	echo "Action: ".$a->getAction()."<br>";
	echo "Language: ".$a->getLanguage()."<br>";
	echo "Params: "."<br>";
	print_r($a->getParams());