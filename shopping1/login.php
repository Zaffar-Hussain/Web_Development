<?php
    require 'dbfunc.php';
    session_start();
    $msg="";
if(isset($_REQUEST['submit']))

{
    $id=$_REQUEST['id'];
    $pwd=$_REQUEST['pwd'];
    

    if(checkaccount($id,$pwd)=="user")
        {
            $_SESSION['id']=$id;
            header('location:products1.php');
        }
        else if(checkaccount($id,$pwd)=="admin")
        {
            $_SESSION['id']=$id;
            header('location: admin.php');
        }
    
    else
        $msg="<font color=red>invalid</font>";

}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Shopping World</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Login to make a purchase.</p>
                                <form method="post" action="login.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="id" placeholder="user id">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="pwd"
                                        placeholder="password" >
                                    </div>
                                    
                                        <input type=submit name=submit value="Log In"><br></br>
                    
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="adduser.php">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
           <
        </div>

    </body>
</html>
