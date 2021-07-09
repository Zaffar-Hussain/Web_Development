<?php

$empid = isset($_GET['id']) ? $_GET['id'] :die('ERROR: missing ID......');
include_once 'config/database.php';
include_once 'objects/employee.php';
include_once 'objects/dept.php';

$database = new Database();
$db = $database->getConnection();

$employee = new Employee($db);
$dept = new Dept($db);

//$employee->empid = $empid;

$employee->readOne($empid);

echo "<h3>Update Employee Details</h3>";



?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$empid}");?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
      <tr>
            <td>Name</td>
            <td><input type='text' name='name' value='<?php echo $employee->name; ?>' class='form-control' /></td>
        </tr>
         <tr>
            <td>Designation</td>
            <td><input type='text' name='designation' value='<?php echo $employee->designation; ?>' class='form-control' /></td>
        </tr>
         <tr>
            <td>Department</td>
            <td><input type='text' name='department' value='<?php echo $employee->dname; ?>' class='form-control' /></td>
        </tr>
 
        <tr>
            <td></td>
            <td>
                <button type="submit" name='update' class="btn btn-primary" >Update</button>
            </td>
        </tr>
 
    </table>
 </form>
 <?php 
 if(isset($_REQUEST['update'])){
 
 	$name=$_REQUEST['name'];
 	$designation=$_REQUEST['designation'];
 	$department=$_REQUEST['department'];

    // update the product
    if($employee->update($empid,$name,$designation,$department)){
        echo "<div class='alert alert-success alert-dismissable'>";
            echo "Employee details was updated.";
        echo "</div>";
    }
 
    // if unable to update the product, tell the user
    else{
        echo "<div class='alert alert-danger alert-dismissable'>";
            echo "Unable to update Employee details.";
        echo "</div>";
    }
    header('Location: index.php');
}
// set page footer
include_once "layout_footer.php";

?>