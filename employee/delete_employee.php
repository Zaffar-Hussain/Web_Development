<?php
    echo "<script type='text/javascript'>confirm('Are sure, you want to delete' );
     </script>";
    $did=$_REQUEST['did'];
    
     $confirm='r';
    if($confirm==true)
    {
        if($employee->delete($did)){
            echo "deleted successfully";
        }
        else{
            echo "Unable to delete ";
        }
        header('Location: index.php');
    }
?>