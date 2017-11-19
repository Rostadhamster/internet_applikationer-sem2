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
    <link rel="stylesheet" href="calendar.css">
    <meta charset="UTF-8">
     
 </head>
 <body class="body">
     
        <ul class="nav">
            <li><a href="index.php"> Hem </a></li>
            <li><a href="Recipe.php"> Recept </a></li>
            <li class ="active"><a href="calendar.php"> Kalender </a></li>
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
     
     <div class="maincontent">
            <article class="topcontent">
                <header>
                    <h1>November</h1>
                </header>
                    <div id="calendar">
                        <ul class="weekdays">
                            <li>Må</li>
                            <li>Ti</li>
                            <li>On</li>
                            <li>To</li>
                            <li>Fr</li>
                            <li>Lö</li>
                            <li>Sö</li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">1</div>
                            </li>
                            <li class="day">
                                <div class="date">2</div>
                            </li>
                            <li class="day">
                                <div class="date">3</div>
                            </li>
                            <li class="day">
                                <div class="date">4</div>
                            </li>
                            <li class="day">
                                <div class="date">5</div>
                            </li>
                            <li class="day">
                                <div class="date">6</div>
                            </li>
                            <li class="day">
                                <div class="date">7</div>
                            </li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">8</div>
                            </li>
                            <li class="day">
                                <div class="date">9</div>
                            </li>
                            <li class="day">
                                <div class="date">10</div>
                            </li>
                            <li class="day">
                                <div class="date">11</div>
                                <a href="pancakes.php"><img src="art/pancakes.jpg" alt="Pancakes"></a>
                            </li>
                            <li class="day">
                                <div class="date">12</div>
                            </li>
                            <li class="day">
                                <div class="date">13</div>
                            </li>
                            <li class="day">
                                <div class="date">14</div>
                            </li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">15</div>
                            </li>
                            <li class="day">
                                <div class="date">16</div>
                            </li>
                            <li class="day">
                                <div class="date">17</div>
                            </li>
                            <li class="day">
                                <div class="date">18</div>
                            </li>
                            <li class="day">
                                <div class="date">19</div>
                            </li>
                            <li class="day">
                                <div class="date">20</div>
                            </li>
                            <li class="day">
                                <div class="date">21</div>
                            </li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">22</div>
                            </li>
                            <li class="day">
                                <div class="date">23</div>
                                <a href="meatballs.php"><img src="art/meatballs.jpg" alt="Meatballs"></a>
                            </li>
                            <li class="day">
                                <div class="date">24</div>
                            </li>
                            <li class="day">
                                <div class="date">25</div>
                            </li>
                            <li class="day">
                                <div class="date">26</div>
                            </li>
                            <li class="day">
                                <div class="date">27</div>
                            </li>
                            <li class="day">
                                <div class="date">28</div>
                            </li>
                        </ul>
                        <ul class="days">
                            <li class="day">
                                <div class="date">29</div>
                            </li>
                            <li class="day">
                                <div class="date">30</div>
                            </li>
                            <li class="day">
                                <div class="date">1</div>
                            </li>
                            <li class="day">
                                <div class="date">2</div>
                            </li>
                            <li class="day">
                                <div class="date">3</div>
                            </li>
                            <li class="day">
                                <div class="date">4</div>
                            </li>
                            <li class="day">
                                <div class="date">5</div>
                            </li>
                        </ul>
                    </div>
            </article> 
     </div>
     
 </body>
</html>