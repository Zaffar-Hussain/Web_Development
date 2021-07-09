<?php
	require_once 'Objects/Database.php';
	class EmployeesController{

		private $database = NULL;   

    	public function __construct() {
        	$this->database = new Database();
    	}

    	public function redirect($location) {
        header('Location: '.$location);
    	}
    	public function handleRequest() {
    		$op = isset($_GET['op'])?$_GET['op']:NULL;
    		try {
            if ( !$op || $op == 'list' ) {
                $this->listEmployees();
            } elseif ( $op == 'new' ) {
                $this->addEmployees();
            } elseif ( $op == 'delete' ) {
                $this->deleteEmployee();
            } elseif ( $op == 'edit' ) {
                $this->modifyContact();
            } else {
                $this->showError("Page not found", "Page for operation ".$op." was not found!");
            }
        } catch ( Exception $e ) {
            // some unknown Exception got through here, use application error page to display it
            $this->showError("Application error", $e->getMessage());
        }
    	}
	}

?>