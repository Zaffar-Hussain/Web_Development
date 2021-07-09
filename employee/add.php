<?php
// include database and object files
include_once 'config/database.php';
include_once 'objects/employee.php';
include_once 'objects/dept.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// pass connection to objects
$employee = new Employee($db);
$dept = new Dept($db);



$page_title = "Add employee";
include_once "layout_header.php";
 

 
?>
<?php 
// if the form was submitted - PHP OOP CRUD Tutorial
if($_POST){
 
    // set product property values
 $employee->name = $_POST['name'];
    $employee->designation = $_POST['designation'];
     $employee->salary = $_POST['salary'];
    $employee->deptno = $_POST['deptno'];
 
    // create the product
    if($employee->create()){
        echo "<div class='alert alert-success'>Employee details added.</div>";
    }
 
    // if unable to create the product, tell the user
    else{
        echo "<div class='alert alert-danger'>Unable to add employee.</div>";
    }
}
?>
 
<!-- HTML form for creating a product -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
 
        <tr>
            <td>designation</td>
            <td><input type='text' name='designation' class='form-control' /></td>
        </tr>
        <tr>
            <td>salary</td>
            <td><input type='text' name='salary' class='form-control' /></td>
        </tr>
 
      
 
        <tr>
            <td>department</td>
            <td>
            <?php
// read the product categories from the database
$stmt = $dept->read();
 
// put them in a select drop-down
echo "<select class='form-control' name='deptno'>";
    echo "<option>Select category...</option>";
 
    while ($row_dept = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row_dept);

        echo "<option value='{$deptno}'>{$dname}</option>";
        //echo "$dname";
    }
echo "</select>";

?>
            </td>
        </tr>
 
        <tr>
            <td><button type="submit" class="btn btn-primary">submit</button></td>
            <td>
                <div class='right-button-margin'>
                <a href='index.php' class='btn btn-info left-margin'><span class='glyphicon-cancel'></span>cancel</a> </div>
            </td>
        </tr>
 
    </table>
</form>

<?php

 
// footer
include_once "layout_footer.php";
?>