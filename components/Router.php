<?php
class Router
{
	private $routes;
	private $main_directory;
	function getURI()
	{
		if(!empty($_SERVER['REQUEST_URI']))
		{
			$uri = trim($_SERVER['REQUEST_URI']);
			return $uri;
		}
	}
	
	function __construct()
	{
		$this->main_directory = "/home/u541089524/public_html";
		$routesPath = $this->main_directory.'/config/routes.php';
		$this->routes = include($routesPath);
	}
	function run()
	{
		$uri = $this->getURI();
		foreach($this->routes as $uriPattern => $path)
		{
			if(preg_match("~$uriPattern~", $uri))
			{
				$segments = explode('/', $path);
				$controllerName = array_shift($segments)."Controller";
			}
		}
	}
	
}