<?php
//----------------- Set comments--------------//

    session_start();
    include 'dbh.php';

    if(isset($_POST['commentSubmit'])){
        
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments(uid, date, message) 
        VAlUES('$uid', '$date', '$message')";
        
        $result = mysqli_query($conn, $sql);
        header("Location: meatballs.php");
    }

    if(isset($_POST['commentSubmit2'])){
        
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO pancakescomments(uid, date, message) 
        VAlUES('$uid', '$date', '$message')";
        
        $result = mysqli_query($conn, $sql);
        header("Location: pancakes.php");
    }


