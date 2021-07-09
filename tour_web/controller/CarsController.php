<?php

require_once 'model/CarsService.php';

class CarsController {

	private $carsService = NULL;
	public function __construct() {
		$this->carsService = new CarsService();
	}

	public function redirect($location) {
		header('Location: '.$location);
	}

	public function handleUserRequest() {
		$page = isset($_GET['page'])?$_GET['page']:NULL;
		try {
			if(!$page ||$page == 'home') {
				include 'userview/home.php';
			}
			else if($page == 'services') {
				include 'userview/services.php';
			}
			else if($page == 'cars') {
				include 'userview/cars.php';
			}
			else if($page == 'aboutus') {
				include 'userview/aboutus.php';
			}
			else if($page == 'reviews') {
				include 'userview/reviews.php';
			}
			else if($page == 'contactus') {
				include 'userview/contactus.php';
			}
			else {
				$this->showError("Page not found", "".$page."Page was not found!");
			}
		}
		catch ( Exception $e ) {
			$this->showError("Application error", $e->getMessage());
		}
	}

	public function handleAdminRequest() {
		$op = isset($_GET['op'])?$_GET['op']:NULL;
		try {
			if(!$op || $op == 'login') {
				$this->checkCredential();
			}
			else if($op == 'disp') {
				include 'adminview/disp.php';
			}
			else if($op == 'add') {
				$this->addcardetails();
			}
			else if($op == 'edit') {
				include 'adminview/edit.php';
			}
			else if($op == 'continfo') {
				include 'adminview/continfo.php';
			}
			else {
				$this->showError("Page not found", "".$op."Page was not found!");
			}
		}
		catch ( Exception $e ) {
			$this->showError("Application error", $e->getMessage());
		}
	}

	public function checkCredential() {

    $uid = '';
    $pwd = '';
    $type = '';

    $errors = array();
        
    if ( isset($_GET['submit']) ) {
            
    	$uid       = isset($_GET['uid']) ?   $_GET['uid']  :NULL;
    	$pwd      = isset($_GET['pwd'])?   $_GET['pwd'] :NULL;
    	$type      = isset($_GET['type'])?   $_GET['type'] :NULL;

    	try {
        	if($this->carsService->checkaccount($uid,$pwd) == true) {
        		if($this->carsService->checkaccounttype($uid,$type) == true) {
        			if($type == 'admin') {
        				$this->redirect("admin.php?op=disp");
                		return;
                	} else {
                		$this->redirect('user.php');
                		return;
                	}
        		}
        	} else {
        		Throw new Exception("Invalid Credentials!!!");
        	}

        } catch (ValidationException $e) {
            $errors = $e->getErrors();
        }
    }

    include 'adminview/login.php';
    }

    public function addcardetails() {

    	$flag = 1;
        $car_id = '';
        $car_name = '';
        $car_image = '';
       
        $errors = array();
        
        if ( isset($_POST['submit']) ) {
            
            $car_id       = $this->carsService->get_car_id();
            $car_name      = isset($_POST['car_name'])?   $_POST['car_name'] :NULL;
            $car_image      = isset($_POST['car_image'])?   $_POST['car_image'] :NULL;
            
            try {
                $this->carsService->addNewCar($car_id, $car_name, $car_image);
                $this->redirect('admn.php?op=add');
                return;
            } catch (ValidationException $e) {
                $errors = $e->getErrors();
            }
        }
        
        include 'adminview/add.php';
    }

}	

?>