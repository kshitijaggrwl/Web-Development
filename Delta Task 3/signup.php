<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delta 3 task</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
          <ul>
              <li><a href="index.php">Home</a></li>  
          </ul>
          <div class="nav-login">
            <?php
              if(isset($_SESSION['u_id'])){
                 echo '<form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="submit">Logout</button>
              </form>'; 
              }else{
                  echo '<form action="includes/login.inc.php" method="POST">
              <input type="text" name="uid" placeholder="Username/e-mail">
              <input type="password" name="pwd" placeholder="password">
              <button type="submit" name="submit">Login</button>
            </form>
            <a href="signup.php">Sign up</a>';
              }
              ?>
              
              
            </div>
        </div>
    </nav>
</header>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign up</h2>
            <form class="signup-form" action="includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="Firstname">
                <input type="text" name="last" placeholder="Lastname">
                <input type="text" name="email" placeholder="E-mail">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="submit">
                Sign up
                </button>
            </form>
        </div>
    </section>
    </body>
</html>