<?php

$conn = mysqli_connect("localhost", "root", "root", "logintasty");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());    
}