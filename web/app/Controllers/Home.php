<?php namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
        $sql = "SELECT * FROM SELLER";
        $db = \Config\Database::connect();
        $test = $db->simpleQuery($sql);
        var_dump($test);
        return view('welcome_message');
	}

	//--------------------------------------------------------------------

}
