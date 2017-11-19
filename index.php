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
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
    <body class="body">
        
        <ul class="nav">
            <li class ="active"><a href="index.php"> Hem </a></li>
            <li><a href="Recipe.php"> Recept </a></li>
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
    
    <h1> Tasty recipes  </h1>

        
    <h2>Välkommen till Tasty recipes! </h2>
        
        <p>
            Saknar du matplan? Hoppa på min!<br> Kolla vilka rätter jag äter genom att klicka<a href="calendar.html"> här </a>eller genom att gå in på kalendern i menyn!.<br>
    
            Missnöjd med kalendern men nöjd med maten? Inga problem!
            Klicka på recept i menyn!
            
    </p>
    
    </body>

</html>