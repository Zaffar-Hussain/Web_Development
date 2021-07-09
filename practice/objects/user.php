<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "user";
 
    // object properties
    public $uid;
    public $name;
    public $password;
    public $type;
    public $date_of_creation;
 
    public function __construct($db){
        $this->conn = $db;
    }

    function create(){
 
   // insert query
        $query = "INSERT INTO " . $this->table_name . "
        SET uid=:uid, name=:name, password=:password,type=:type, date_of_creation=:date_of_creation";
 
        $stmt = $this->conn->prepare($query);
 
        // posted values
        $this->uid=htmlspecialchars(strip_tags($this->uid));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->password=htmlspecialchars(strip_tags($this->password));
        $this->type=htmlspecialchars(strip_tags($this->type));
        $this->date_of_creation=htmlspecialchars(strip_tags($this->date_of_creation));
 
        // bind values 
        $stmt->bindParam(":uid", $this->uid);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":date_of_creation", $this->date_of_creation);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    function check(){
        $query = "SELECT password FROM " . $this->table_name . " WHERE uid = ? ";
        $stmt = $this->conn->prepare( $query );
        $stmt->bindParam(1, $this->uid);
        $stmt->execute();
 
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->password = $row['password'];

    }
 
}
?>