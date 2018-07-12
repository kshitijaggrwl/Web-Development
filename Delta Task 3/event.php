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
            <h2>Create an Appointment</h2><br><br><br>
            <?php
                if(isset($_SESSION['u_id'])){
                 echo '<form action="includes/event.inc.php" method="POST">
                <center>
                <input id="title" type="text" placeholder="TITLE OF THE EVENT..." name="title" maxlength="50" required >
                <!--    insert minimum date and time using php    -->
                <br><br>
                <h5>STARTING DATE AND TIME</h5>
                <br>
                <b>DATE: </b> 
                <input type="date" id="startD" name="startD" required>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <b>TIME: </b> 
                <input type="time" id="startT" name="startT"  required>
                <br><br>
                <h5>ENDING DATE AND TIME</h5>
                <br>
                <b>DATE:  </b>
                <input type="date" id="endD" name="endD" required>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <b>TIME:  </b>
                <input type="time" id="endT" name="endT"   required>
                <br><br><br>
                <textarea name="des" placeholder=" ADD A DESCRIPTION FOR THE EVENT " required></textarea>
                <br><br>                     
                <button type="submit" name="submit">Submit</button>
                </center>
                </form>';   
                }
            
            ?>
        </div>
    </section>
</body>
</html>