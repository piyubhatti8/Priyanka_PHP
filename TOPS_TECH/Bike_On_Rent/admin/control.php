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
                if(isset($_REQUEST['submit'])){
                    $anm=$_REQUEST['anm'];
                    $apass=$_REQUEST['apass'];
                    $where=array("anm"=>$anm,"apass"=>$apass);
                    $run = $this->select_where('admin_tbl',$where);
                    $chk = $run->num_rows;
                    if ($chk == 1) {
                        $fetch = $run->fetch_object();
                        $_SESSION['admin_id'] = $fetch->admin_id;
                        $_SESSION['admin_name'] = $fetch->admin_name;
                        $_SESSION['anm'] = $fetch->anm;
                        echo "<script>
                            alert('Login Success');
                            window.location='dashboard';
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                        alert('Login Failed');
                        </script>";
                    }

                }
                include_once('index.php');
                break;
            case '/admin_logout':
                unset( $_SESSION['admin_id']);
                unset( $_SESSION['admin_name']);
                unset( $_SESSION['anm']);
                echo "<script>
				alert('Logout Success');
				window.location='admin';
				</script>";
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
                //$user_arr = $this->select('user');
               $user_arr = $this->select_join2('user','country_tbl','user.cid=country_tbl.cid');
                
                include_once('manage_user.php');
                break;

            case '/index':
                include_once('index.php');
                break;
        
                
            }
    }

}
$obj = new control;
?>