<?php

require_once 'model/CarsGateway.php';
require_once 'model/ValidationException.php';

class CarsService {
	private $carsGateway = NULL;
	private $con = NULL;
	private function openDb()
	{
		$this->con=mysqli_connect("localhost","root","","rental-cars");
		if (mysqli_connect_errno())
		{
			throw new Exception("Connection to the database server failed!");
		}
	}	

	private function closeDb() {
		mysqli_close($this->con);
	}

	public function __construct() {
        $this->carsGateway = new CarsGateway();
    }

    public function checkaccount($uid,$pwd) {
        try {
            $this->openDb();
            $res = $this->carsGateway->checkUser($uid,$pwd,$this->con);
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
            $res = $this->carsGateway->checkUserType($uid,$type,$this->con);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }

    public function get_car_id() {
        try {
            $this->openDb();
            $res = $this->carsGateway->get_id($this->con);
            $this->closeDb();
            return $res;
        } catch (Exception $e) {
            $this->closeDb();
            throw $e;
        }
    }
}

?>