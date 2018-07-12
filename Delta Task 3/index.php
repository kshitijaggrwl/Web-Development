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
            <h2>HOME</h2>
            <?php
                if(isset($_SESSION['u_id'])){
                    echo "Welcome, ".$_SESSION['u_first']."<br><br>";
                    echo '<br><a href="event.php">Create an Appointment </a><br><br>';
                    echo '<br><a href="display.php">Display Appointments </a><br><br>';
                    
                    
                }
            ?>
        </div>
    </section>
</body>
</html>