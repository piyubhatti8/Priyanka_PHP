<?php

include_once('model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
		
        switch($url)
        {
            case '/admin':
                include_once('index.php');
                break;
            case '/dashboard':
                include_once('dashboard.php');
                break;
            case '/add_admin':
                include_once('add_admin.php');
                break;
            case '/add_area':
                include_once('add_area.php');
                break;
            case '/add_category':
                include_once('add_category.php');
                break;
                case '/add_city':
                include_once('add_city.php');
                break;
            case '/add_employee':
                include_once('add_employee.php');
                break;
            case '/add_user':
                include_once('add_user.php');
                break;

            case '/manage_admin':
                $admin_arr=$this->select('admin_tbl');
                
                include_once('manage_admin.php');
                break;
            case '/manage_area':
                include_once('manage_area.php');
                break;
            case '/manage_category':
                include_once('manage_category.php');
                break;
                case '/manage_city':
                include_once('manage_city.php');
                break;
            case '/manage_employee':
                include_once('manage_employee.php');
                break;
            case '/manage_user':
                include_once('manage_user.php');
                break;
           
                
            }
    }

}
$obj = new control;
?>