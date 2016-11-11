<?php
class Router
{
	protected $routes;
	protected $main_directory;
	protected $controller;
	protected $action;
	protected $language;
	protected $route;
	protected $params;
	protected function getURI()
	{
		if(!empty($_SERVER['REQUEST_URI']))
		{
			$uri = trim($_SERVER['REQUEST_URI']);
			return $uri;
		}
	}
	
	function __construct()
	{
		$this->main_directory = ROOT;
		$routesPath = $this->main_directory.'/config/routes.php';
		$this->routes = include($routesPath);
		$this->route = Config::getStatus("default_route");
		$this->language = Config::getStatus("default_language");
		$this->controller = Config::getStatus("default_controller");
		$this->action = Config::getStatus("default_action");
	}
	function run()
	{
		$uri = $this->getURI();
		$segments = explode('/', $uri);
		array_shift($segments);
		if(count($segments) == 2)
			array_pop($segments);
		//print_r($segments);
		//print_r($this->routes);
		
		//Get route - first element of URI
		if(in_array(current($segments),array_keys($this->routes)))
		{
			$this->route = current($segments);
			array_shift($segments);
		}
		//Get language
		if(in_array(current($segments),Config::getStatus("languages")))
		{
			$this->language = array_shift($segments);
		}
		else $this->language = Config::getStatus("default_language");
		//Get controller
		if(current($segments))
		{
			$this->controller = current($segments);
			array_shift($segments);
		}
		//Get action
		if(current($segments))
		{
			$this->action = current($segments);
			array_shift($segments);
		}
		//Get params
		$this->params = $segments;
	}
	
	public function getController()
	{
		return $this->controller;
	}
	
	public function getAction()
	{
		return $this->action;
	}
	
	public function getLanguage()
	{
		return $this->language;
	}
	
	public function getRoute()
	{
		return $this->route;
	}
	
	public function getParams()
	{
		return $this->params;
	}
	
}