<?php
session_start();
if(isset($_POST['submit'])){
  
    include_once 'dbh.inc.php';
    
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $startD = mysqli_real_escape_string($conn, $_POST['startD']);
    $startT = mysqli_real_escape_string($conn, $_POST['startT']);
    $endD = mysqli_real_escape_string($conn, $_POST['endD']);
    $endT = mysqli_real_escape_string($conn, $_POST['endT']);
    $des = mysqli_real_escape_string($conn, $_POST['des']);
    $user = $_SESSION['u_uid']; 
    
    //Error handlers
    //Check for empty fields
    if(empty($title) || empty($startD) || empty($startT) || empty($endD) || empty($endT) || empty($des)) {
        header("Location: ../signup.php?signup=empty");
        exit();
        }else{
        //Insert the user into the database
                    $sql = "INSERT INTO events (event_title, event_startd, event_startt, event_endd, event_endt, event_des, event_user) VALUES ('$title', '$startD', '$startT', '$endD', '$endT', '$des', '$user');";
                    mysqli_query($conn, $sql);
                    header("Location: ../index.php");
                    exit();
    }
}else{
    header("Location: ../signup.php");
    exit();
}