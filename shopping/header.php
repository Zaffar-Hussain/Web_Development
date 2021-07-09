<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="login.php" class="navbar-brand">Shopping World</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['id'])){
                           ?>
                           <li><a href="products.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shop</a></li>
                           <li><a href="forgetpwd.php"><span class="glyphicon glyphicon-cog"></span>Forgot Password</a></li>
                          
                           <?php
                           }else{
                            ?>
                            <li><a href="adduser.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>