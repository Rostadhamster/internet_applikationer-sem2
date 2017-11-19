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
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
    <body class="body">
        
        <ul class="nav">
            <li><a href="index.php"> Hem </a></li>
            <li><a href="Recipe.php"> Recept </a></li>
            <li><a href="calendar.php"> Kalender </a></li>
            <li class ="active"><a href="registration.php"> Registrera konto </a></li>
            
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
        
    <h1> Registrera ditt konto!</h1>
  
    <div class ="reg">
        <p class ="reginfo">
            Fyll i dina uppgifter nedan, och välj ett användarnamn samt lösenord för att kunna ta del av Tasty Recepie!
        </p>
        
    <form action="signup.php" method="POST" class ="table">
        <ul>
        <li><input type= "text" name="first" placeholder="Namn"></li>
        <li><input type= "text" name="last" placeholder="Efternamn"></li>
        <li><input type="text" name="uid" placeholder="Användarnamn"></li>
        <li><input type="password" name="pwd" placeholder="Lösenord"></li>
        <li><button type="submit" >Registrera</button></li>
        </ul>
    </form>
    </div>
    
    </body>

</html>