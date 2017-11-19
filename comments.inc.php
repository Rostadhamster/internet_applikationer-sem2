<?php
//------------meatballs---------------//

function setComments($conn) {
    if(isset($_POST['commentSubmit'])){
        
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments(uid, date, message) 
        VAlUES('$uid', '$date', '$message')";
        
        $result = mysqli_query($conn, $sql);
    }
    
}

function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn, $sql);    
    
    while($row = $result->fetch_assoc()){
    $id = $row['uid'];   
    $sql2  = "SELECT * FROM user WHERE id='$id'";
    $result2 =  mysqli_query($conn, $sql2);
        if($row2 = $result2->fetch_assoc()){
           echo"<div class='comment-box'><p>"; 
            echo $row2['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        echo "</p>";
        
            if(isset($_SESSION['id'])){
                if($_SESSION['id'] == $row2['id']){
                    echo "<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <button type='submit' name='commentDelete'> Delete </button>
                    </form>";
                }
            }

       echo" </div>";   
            
        }
        
    }
}

function deleteComments($conn){

            if(isset($_POST['commentDelete'])){
                $cid = $_POST['cid'];
        
                $sql = "DELETE FROM comments WHERE cid='$cid'";

                $result = mysqli_query($conn, $sql);
                
            }
}

//------------PANCKAES---------------//

function setComments2($conn) {
    if(isset($_POST['commentSubmit'])){
        
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO pancakescomments(uid, date, message) 
        VAlUES('$uid', '$date', '$message')";
        
        $result = mysqli_query($conn, $sql);
    }
    
}

function getComments2($conn){
    $sql = "SELECT * FROM pancakescomments";
    $result = mysqli_query($conn, $sql);    
    
    while($row = $result->fetch_assoc()){
    $id = $row['uid'];   
    $sql2  = "SELECT * FROM user WHERE id='$id'";
    $result2 =  mysqli_query($conn, $sql2);
        if($row2 = $result2->fetch_assoc()){
           echo"<div class='comment-box'><p>"; 
            echo $row2['uid']."<br>";
            echo $row['date']."<br>";
            echo nl2br($row['message']);
        echo "</p>";
        
            if(isset($_SESSION['id'])){
                if($_SESSION['id'] == $row2['id']){
                    echo "<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <button type='submit' name='commentDelete'> Delete </button>
                    </form>";
                }
            }

       echo" </div>";   
            
        }
        
    }
}

function deleteComments2($conn){

            if(isset($_POST['commentDelete'])){
                $cid = $_POST['cid'];
        
                $sql = "DELETE FROM pancakescomments WHERE cid='$cid'";

                $result = mysqli_query($conn, $sql);
                
            }
}