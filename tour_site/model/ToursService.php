<?php

require_once 'model/ToursGateway.php';
require_once 'model/ValidationException.php';

class ToursService {
    
	private $toursGateway = NULL;
	private $con = NULL;

	private function openDb()
	{
		$this->con=mysqli_connect("localhost","root","","tour_site");
		if (mysqli_connect_errno())
		{
			throw new Exception("Connection to the database server failed!");
		}
	}	

	private function closeDb() {
		mysqli_close($this->con);
	}

	public function __construct() {
        $this->toursGateway = new ToursGateway();
    }

    public function checkaccount($uid,$pwd) {
        try {
            $this->openDb();
            $res = $this->toursGateway->checkUser($uid,$pwd,$this->con);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }

    public function checkaccounttype($uid,$type) {
    	try {
            $this->openDb();
            $res = $this->toursGateway->checkUserType($uid,$type,$this->con);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }


    public function addContactDetails( $detail_id, $name, $phoneNumber, $email, $message ) {
        try {
            $this->openDb();
            $res = $this->toursGateway->insert($detail_id, $name, $phoneNumber, $email, $message, $this->con);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }

    public function get_det_id() {
        try {
            $this->openDb();
            $res = $this->toursGateway->get_id($this->con);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }


    public function getContactDetails() {
        try {
            $this->openDb();
            $res = $this->toursGateway->selectAll($this->con);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }

}

?>