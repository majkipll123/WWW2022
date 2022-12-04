<?php declare(strict_types=1);?>
<html >
    <head>
        <title>Hello world w php</title>
    </head>  
    <body>
        <?php
    class Vehicle
    {
       public  $name="Andrzej";
       public  $weight="1000kg";
       public  $color = "red";
       public function getinfo($abcd)
       {
        echo $chevy->name; 
        echo $chevy->weight; 
        echo $chevy->color; 
       }   
    }
    class Car extends Vehicle
    {

        public $brand="chevy";
        public $wheels="18c";
        public function getinfo($chevy)
       {
        echo $chevy->brand; 
        echo $chevy->name; 
        echo $chevy->weight; 
        echo $chevy->color; 
        echo $chevy->wheels; 
       }   
    }
    $abcd = new Vehicle();
    getinfo($abcd);
        
        ?>
        
    </body>
</html>