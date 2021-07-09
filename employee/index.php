
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}     
</style>
</head>
<body>

<?php
$page = intval(isset($_GET['page']) ? $_GET['page'] : 1);
$records_per_page = 5;
$from_record_num = ($records_per_page * $page) - $records_per_page;
/*$limit = 5; 
if (isset($_GET["page"])) 
{  
    $pn  = intval($_GET["page"]);  
}  
else 
{  
    $pn=1;  
}
$start_from = ($pn-1) * $limit;*/


include_once 'config/database.php';
include_once 'objects/employee.php';
include_once 'objects/dept.php';

$database = new Database();
$db = $database->getConnection();

$employee = new Employee($db);
$dept = new Dept($db);

$stmt = $employee->readAll($from_record_num, $records_per_page);
$num = $stmt->rowCount();

$page_title = "Employee details";
include_once "layout_header.php";

if($num>0){
echo "<form action='' method='post' >";
echo "<table class='table table-hover table-responsive table-bordered'>";
        echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Name</th>";
            echo "<th>Designation</th>";
            echo "<th>Department</th>";
            echo "<th>Edit</th>";
            echo "<th>Delete</th>";
            echo "<th>change designation</th>";
        echo "</tr>";
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        	extract($row);
        	echo "<tr>";
                echo "<td>{$empid}</td>";
                echo "<td>{$name}</td>";
                //echo "<td>{$designation}</td>";
                if(isset($_REQUEST['ceid']))
                {
                  $e_btn_nm = $_REQUEST['ceid'];
                  if($e_btn_nm == "e{$empid}"){
                $stmtt = $employee->readDesignation();
                
                // put them in a select drop-down
                echo "<td><select class='form-control' name='design'>";
                echo "<option>{$designation}</option>";
 
                while ($row_dept = $stmtt->fetch(PDO::FETCH_ASSOC)){
                extract($row_dept);

                echo "<option value='{$designation}'>{$designation}</option>";
                //echo "$dname";
                }
                echo "</select></td>";
                }
                else
                    echo "<td>{$designation}</td>";
                }
                elseif (isset($_REQUEST['cdid'])) {
                  if($_REQUEST['cdid'] == "d{$empid}"){
                    echo "<td>{$designation}</td>";
                  }
                  else
                    echo "<td>{$designation}</td>";
                }
                else
                    echo "<td>{$designation}</td>";


                echo "<td>{$dname}</td>";





                echo "<td><a href='index.php?page=$page?update.php&id={$empid}' class='btn btn-info left-margin'>
                    <span class='glyphicon glyphicon-edit'></span> Edit
                        </a></td>";
				echo "<td><a href='index.php?page=$page?did={$empid}' class='btn btn-danger delete-object'>
                    <span class='glyphicon glyphicon-remove'></span> Delete
                        </a></td>";
                echo "<td><a href='index.php?ceid=e{$empid}' class='btn btn-info left-margin'>
                    <span class='glyphicon glyphicon-add'></span> Enable
                        </a>
                        <a href='index.php?cdid=d{$empid}' class='btn btn-info left-margin'>
                    <span class='glyphicon glyphicon-add'></span> Disable
                        </a>
                        </td>";
                echo "</tr>";
        }


echo "</table>";
}
else{
    echo "<div class='alert alert-info'>No Employees Details found.</div>";
}
echo "<div class='right-button-margin'>
    <a href='index.php?add.php&aid' class='btn btn-info left-margin'><span class='glyphicon glyphicon-add'></span>Add Employee</a>
  

</div>";
if(isset($_REQUEST['aid']))
{
  include_once "add.php";

}
echo "</form>";

if(isset($_REQUEST['id']))
{
    include_once "update.php";
}
if(isset($_REQUEST['did']))
{
    include_once "delete_employee.php";
}

$page_url = "index.php?";
$total_rows = $employee->countAll();
//$page_url = "index.php?";
//$total_rows = $employee->countAll();
include_once 'paging.php';
include_once "layout_footer.php";

?>
</body>
</html>