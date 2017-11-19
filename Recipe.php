<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tasty Recipes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" type="text/css" href="Recipe.css">
</head>
    <body class = "body">
    
        <ul class="nav">
            <li><a href="index.php"> Hem </a></li>
            <li class ="active"><a href="Recipe.php"> Recept </a></li>
            <li><a href="calendar.php"> Kalender </a></li>
            <li><a href="registration.php"> Registrera konto </a></li>
        
                <form action="Logout.php">
            <button type="submit" >Logga ut</button>
        </form>
            
        <form action="login.php" method="POST">
            <input type="text" name="uid" placeholder="Användarnamn">
            <input type="password" name="pwd" placeholder="Lösenord">
            <button type="submit" >Logga in</button>
        </form>    
            
        </ul>
        
        <?php
   echo"<div class='welcome'>";
        if (isset($_SESSION['id'])){
            echo "Du är inloggad! ";
        }
        else {
            echo "Du är inte inloggad!";
        }
    echo" </div>"; 
    ?>
    
    <h1> Välj ditt recept!  </h1>
        
 <ol type="1">
  <li><a href="meatballs.php">Köttbullar</a></li>
  <li><a href="pancakes.php">Pannkakor</a></li>
</ol> 
    
    
    </body>

</html>