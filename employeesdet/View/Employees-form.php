<?php

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $records_per_page = 5;
    $from_record_num = ($records_per_page * $page) - $records_per_page;

    include_once 'Objects/Database.php';
    include_once 'Objects/EmployeesOper.php';
    include_once 'Objects/DeptOper.php';

    $database = new Database();
    $db = $database->getConnection();
 
    $employees = new Employees($db);
    $dept = new Dept($db);

    $stmt = $product->listEmployees($from_record_num, $records_per_page);
    $num = $stmt->rowCount();

    $page_title = "Read Products";
    include_once "layout_header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Employee Details</title>
        <style type="text/css">
            table.employees {
                width: 100%;
            }
            
            table.employees thead {
                background-color: #eee;
                text-align: left;
            }
            
            table.employees thead th {
                border: solid 1px #fff;
                padding: 3px;
            }
            
            table.employees tbody td {
                border: solid 1px #eee;
                padding: 3px;
            }
            
            a, a:hover, a:active, a:visited {
                color: blue;
                text-decoration: underline;
            }
            
        </style>
       
    </head>
    <body>
        <div class='right-button-margin'>
        <a href='index.php?op=new' class='btn btn-default pull-right'>Add Employee</a>
        </div>
        <table class="employees" border="0" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Empid</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Department</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   if($num>0){
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        extract($row);
                        echo "<tr>";
                        echo "<td>{$empid}</td>";
                        echo "<td>{$name}</td>";
                        echo "<td>{$designation}</td>";
                        echo "<td>{$dname}</td>";
                        echo "<td><a href='index.php?op=edit' class='btn btn-primary left-margin'>
                            <span class='glyphicon glyphicon-list'></span> Read
                                </a></td>";
 
                        echo "<td><a delete-id='{$id}' class='btn btn-danger delete-object'>
                            <span class='glyphicon glyphicon-remove'></span> Delete
                            </a></td>";
 
                            echo "</tr>";
 
                        }
                ?>
            </tbody>
    </table><br><br>
    <?php
        $page_url = "index.php?";
        $total_rows = $product->countAll();
        include_once 'paging.php';
    ?>  
    </body>
</html>