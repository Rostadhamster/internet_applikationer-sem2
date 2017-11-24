<?php

//----------Delete comments ------------//
session_start();
include 'dbh.php';

if(isset($_POST['commentDelete'])){
     $cid = $_POST['cid'];
        
     $sql = "DELETE FROM comments WHERE cid='$cid'";

     $result = mysqli_query($conn, $sql);
    header("Location: meatballs.php");
                
}


if(isset($_POST['commentDelete2'])){
     $cid = $_POST['cid'];
        
     $sql = "DELETE FROM pancakescomments WHERE cid='$cid'";

     $result = mysqli_query($conn, $sql);
    header("Location: pancakes.php");
                
}

