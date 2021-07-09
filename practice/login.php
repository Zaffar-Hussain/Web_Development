<?php
  include_once 'config/database.php';
  include_once 'objects/user.php';

  // get database connection
  $database = new Database();
  $db = $database->getConnection();

  // pass connection to objects
  $user = new User($db);


?>
<?php 
if($_POST){
 
    // set product property values
    $user->uid = trim($_POST['uid']);

    $pwd = trim($_POST['password']);

    $user->check();
    if(password_verify($pwd, $user->password)){
      echo "Password Verified";
    }
    else {
      echo "Wrong Password";
    }
    
    

}
?>
<!-- HTML form for creating a product -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"> 
    <table class='table table-hover table-responsive table-bordered'>
      <tr>
        <td>User Id</td>
        <td><input type='text' name='uid' class='form-control' required /></td>
      </tr>
 
      <tr>
        <td>Password</td>
        <td><input type="password" name='password' class='form-control' required /></td>
      </tr>
      <tr>
        <td></td>
        <td>
          <button type="submit" class="btn btn-primary">Login</button>
        </td>
      </tr>
    </table>
</form>