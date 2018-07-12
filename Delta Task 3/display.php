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
            <h2>YOUR APPOINMENTS</h2>
            <br><hr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "loginsystem");
            $temp = $_SESSION['u_uid'];
            $sql = "SELECT * FROM events WHERE event_user = '$temp'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){ 
            while($arr = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
               
               $title = $arr['event_title'];
               $des = $arr['event_des'];
               $startd = $arr['event_startd'];
               $endd = $arr['event_endd'];
               $startt = $arr['event_startt'];
               $endt = $arr['event_endt'];
                
               echo "<br>"."<b>TITLE: </b>".$title."<br>"."<b>Descrpition: </b>".$des."<br>"."<b>Starting Date: </b>".$startd."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<b>Ending Date: </b>".$endd."<br>"."<b>Starting Time: </b>".$startt."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<b>Ending Time: </b>".$endt."<br>";    
     
 
        
  }} 
?>
            </div>
    </section>
</body>
</html>