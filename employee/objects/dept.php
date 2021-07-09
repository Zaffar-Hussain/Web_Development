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
 
   function read(){
        //select all data
        $query = "SELECT
                    deptno, dname
                FROM
                    " . $this->table_name . "";  
 
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }


}
?>