<?php
require_once(ROOT.DS.'config'.DS.'config.php');
function __autoload($class_name)
{
	$components_path = ROOT.DS.'components'.DS.$class_name.'.class.php';
	echo $components_path."<br>";
	$controllers_path = ROOT.DS.'controllers'.DS.str_replace('controller','',strtolower($class_name)).'.controller.php';
	echo $controllers_path."<br>";
	$model_path = ROOT.DS.'models'.DS.strtolower($class_name).'.php';
	echo $model_path."<br>";
	
	if(file_exists($components_path))
	{
		require_once($components_path);
	}
	elseif(file_exists($controllers_path))
	{
		require_once($controllers_path);
	}
	elseif(file_exists($model_path))
	{
		require_once($model_path);
	}
	else
	{
		throw new Exception('Failed to include class'.$class_name);
	}
}