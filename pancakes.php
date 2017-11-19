<?php
    session_start();
    date_default_timezone_set('Europe/Stockholm');
    include'dbh.inc.php.';
    include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tasty Recipes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="Stylesheet.css">
    <link rel="stylesheet" type="text/css" href="Foods.css">
   
    
</head>
    <body class="body">
    
        <ul class ="nav">
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
    
    <h1> Pannkakor  </h1>
        
<img src="art/pancakes.jpg" alt="meatballs"> 
<div class="ingredients">    
    <h2> Ingredienser</h2>
        <p> Recept för 8st</p>
        <ul style="list-style-type:square">
            <li>   3 dl vetemjöl </li>
            <li>   6 dl mjölk</li>
            <li>   3 ägg </li>
            <li>   3/4 teaspoon kosher salt</li>
            <li>   ½ tsk salt </li>
            <li>   1 large egg</li>
            <li>   2 msk smör</li>
        </ul>
    </div>
    <div class="HowTo">
    <h2> Börja med att:</h2>
        <ol type="1">
            <li>1.   Vispa ut mjölet i hälften av mjölken till en slät smet.</li>
            <li>2.  Vispa i resterande mjölk, ägg och salt.</li> 
            <li>3.  Låt smeten svälla ca 10 min.</li> 
            <li>4.  Smält smör i en stekpanna och häll ner i smeten</li> 
            <li>5.  Grädda tunna pannkakor</li>
            <li>6.  Servera!</li>
        </ol>
        </div>

        <div class="comments" id="myComments">
            <h2>Kommentarer</h2>
            <?php
        if(isset($_SESSION['id'])){
           echo "<form method='POST' action='".setComments2($conn)."'>
                <input type='hidden' name='uid' value='".$_SESSION['id']."'>
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                <textarea name='message'></textarea><br>
                <button type='submit' name='commentSubmit'>Comment</button>
            </form>";
            }
            else{
                echo"Logga in för att kommentera!";
            }
            
            getComments2($conn);
        ?>
        </div>

    </body>

</html>