<?php
class Employees{
 
    // database connection and table name
    private $conn;
    private $table1_name = "employee";
    private $table2_name = "dept";
 
    // object properties
    public $empid;
    public $name;
    public $designation;
    public $salary;
    public $deptno;
 
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

    public function listEmployees(){
 
    $query = "SELECT
                empid, name, designation, dname
            FROM
                " . $this->table1_name . " as a, " . $this->table2_name . " as b WHERE a.deptno=b.deptno
            ORDER BY
                name ASC";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    return $stmt;
  }
 public function countAll(){
 
    $query = "SELECT empid FROM " . $this->table1_name . "";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    $num = $stmt->rowCount();
 
    return $num;
}
    
    
 
}
?>