<?php
class Dept{
 
    // database connection and table name
    private $conn;
    private $table_name = "dept";
 
    // object properties
    public $deptno;
    public $dname;
    public $location;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    
    
 
}
?>