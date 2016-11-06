<?php
	define('ROOT','/home/u541089524/public_html');
	require_once(ROOT."/components/bootstrap.php");
	require_once(ROOT."/components/Router.php");
	$a = new Router();
	$a->run();