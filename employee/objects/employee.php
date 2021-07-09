<?php
class Employee{
 
    // database connection and table name
    private $conn;
    public $table1_name = "employee";
    public $table2_name = "dept";
 
    // object properties
    public $id;
    public $name;
    public $designation;
    public $salary;
    public $deptno;
    public $dname;
    public $location;
 
    public function __construct($db){
        $this->conn = $db;
    }

    function readAll($from_record_num, $records_per_page){
 
    $query = "SELECT
                empid, name, designation, dname
            FROM
                " . $this->table1_name . " as a, " . $this->table2_name . " 
            as b WHERE a.deptno = b.deptno  ORDER BY
                name ASC
                LIMIT $from_record_num, $records_per_page";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    return $stmt;
  }

  function readOne($empid){
 
    $query = "SELECT
                name, designation, dname
            FROM
                " . $this->table1_name . " as a, " . $this->table2_name . " as b
            WHERE
                a.empid =$empid and a.deptno = b.deptno";
    //echo "".$query;
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
    $this->name = $row['name'];
    $this->designation = $row['designation'];
    $this->dname = $row['dname'];
}

function update($empid,$name,$designation,$department){
 
    $query = "UPDATE
                " . $this->table1_name . " as a, " . $this->table2_name . " as b 
            SET
                a.name = '$name',
                a.designation = '$designation',
                b.dname = '$department'
            WHERE
                a.deptno = b.deptno and a.empid = '$empid'  ";
    //echo "".$query;
    $stmt = $this->conn->prepare($query);
 
    // execute the query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}

function delete($did){
 
    $query = "DELETE FROM " . $this->table1_name . " WHERE empid = '$did'";
     
    $stmt = $this->conn->prepare($query);
 
    if($result = $stmt->execute()){
        return true;
    }else{
        return false;
    }
}

public function countAll(){
 
    $query = "SELECT empid FROM " . $this->table1_name . "";
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    $num = $stmt->rowCount();
 
    return $num;
}

function create(){
 
        //write query
        $query = "INSERT INTO
                    " . $this->table1_name . "
                SET
                   name =:name,designation =:designation,salary=:salary,deptno=:deptno ";
 
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->designation=htmlspecialchars(strip_tags($this->designation));
         $this->salary=htmlspecialchars(strip_tags($this->salary));
        $this->deptno=htmlspecialchars(strip_tags($this->deptno));
        

 
        // bind values 
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":designation", $this->designation);
        $stmt->bindParam(":salary", $this->salary);
        $stmt->bindParam(":deptno", $this->deptno);

        //$stmt->bindParam(":created", $this->timestamp);
 
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
 
    }

    function readDesignation(){
        //select all data
        $query = "SELECT
                    distinct designation
                FROM
                    " . $this->table1_name . "";  
 
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }
 
}
?>