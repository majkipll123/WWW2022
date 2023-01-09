<?php declare(strict_types=1);?>
<html >
    <head>
        <title>Hello world w php</title>
    </head>  
    <body>
        <?php
    echo "<form action='strona.php' method='get'> <input type='text' name='imie'> Imie <br>";
    echo "<input type='text' name='nazwisko'> Nazwisko <br>";
    echo "<input type='email' name='mail'> Email <br>";
    echo "Zainteresowania
    <br><select name='wybor'>
    <option value='1'>gry</option>
    <option value='2'>ksiazki</option>
    <option value='3'>muzyka</option>
    <option value='4'>film</option>
    <option value='5'>sztuka</option>
    </select><br>";
    echo "<br><input type='submit' name='sub' value ='Subskrybuj'> <br>";
    echo "</form>";
    echo "Imie - ".$_GET['imie']."<br> Nazwisko - ".$_GET['nazwisko']."<br> Adres Email - ".$_GET["mail"]."<br> Zainsteresowanie - ".$_GET["wybor"];
?>