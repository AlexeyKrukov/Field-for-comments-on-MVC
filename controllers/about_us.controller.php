<?php
class about_us extends Controller
{
	function __construct()
	{
		
	}
	public function index_about_us()
	{
		$bool = require_once(ROOT.DS."controllers".DS."bootstrap_about_us.php");
		echo $bool;
		if($bool == 1)
			echo "About us";
	}
}
?>