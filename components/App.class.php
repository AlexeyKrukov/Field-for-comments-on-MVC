<?php
class App
{
	public static $router;
	
	public static function getRouter()
	{
		return self::$router;
	}
	
	public static function run()
	{
		self::$router = new Router();
		self::$router->run();
		if(self::$router->getController() != "user")
		{
		$controller_name = self::$router->getController().".controller";
		//$controller_name = self::$router->getController();
		echo $controller_name;
		echo "<br>";
		$action_name = self::$router->getAction();
		echo $action_name;
		echo "<br>";
		$bool = require_once("../".DS."controllers".DS.$controller_name.".php");
		echo $bool;
		unset($bool);
		echo "<br>";
		if($bool == 1)
			echo ROOT.DS."controllers".DS.$controller_name;
		$controller = self::$router->getController();
		$controller_object = new $controller();
		echo "<br>";
		$controller_object->index_about_us();
		}
		else require_once(ROOT."/components/bootstrap.php");
	}
}