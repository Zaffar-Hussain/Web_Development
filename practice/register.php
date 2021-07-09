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
    $user->uid = $_POST['uid'];
    $user->name = $_POST['name'];

    $pwd = $_POST['password'];
    $options = array('cost' => 4);
    $hashPassword = password_hash($pwd, PASSWORD_BCRYPT,$options);
    $user->password = $hashPassword;

    $cpassword = $_POST['cpassword'];
    $user->type = 'admin';
    $date = new DateTime();
    $user->date_of_creation=$date->format('Y-m-d H:i:s');

    if($pwd == $cpassword){
      if($user->create()){
        echo "<div class='alert alert-success'>user registration successful.</div>";
      }
 
      // if unable to create the product, tell the user
      else{
        echo "<div class='alert alert-danger'>user registration unsuccessful.</div>";
      }
    }
    else{
      echo "<div class='alert alert-danger'>password and confirm password does not match</div>";
    }
}
?>
<!-- HTML form for creating a product -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"> 
    <table class='table table-hover table-responsive table-bordered'>
 
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' required /></td>
        </tr>
 
        <tr>
            <td>User Id</td>
            <td><input type='text' name='uid' class='form-control' required /></td>
        </tr>
 
        <tr>
            <td>Password</td>
            <td><input type="password" name='password' class='form-control' required /></td>
        </tr>
        <tr>
            <td>Confirm Password</td>
            <td><input type="password" name='cpassword' class='form-control' required /></td>
        </tr>
        <tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary">Register</button>
            </td>
        </tr>
 
    </table>
</form>