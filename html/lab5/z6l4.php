<?php declare(strict_types=1);?>
<html >
    <head>
        <title>Hello world w php</title>
    </head>  
    <body>
        <?php

            $a="hello world";
            $cc=17;
            $b=10;
            $c=20;
            $bb=$c+$b;
            $aaa="first";
            $aa="secound";
            $cc="czesc";
            $ludzie = array("karol", "andrzej", "ziutek");
            $array = ['Poland' => 'Warsaw', 'Italy' => 'Rome', 'United Kingdom' => 'London', 
            'Netherlands' => 'Amsterdam', 'Germany' => 'Berlin'];
            
                echo $aa , $aaa, " ";
                echo $bb ," ";
                echo $a ," ";
                echo $cc, " ";
            function dodawanie($a,$b){
             $t=$a+$b;
             return $t;
            }
            echo dodawanie(5,4);
            function odwroc($abc){
             $ggg=array_reverse($abc,true);
             return $ggg;
            }
            print_r(odwroc($ludzie));
            function przecinek($abc){
                foreach($abc as $czlowiek){
                    echo $czlowiek . ", ";
                }
            }
            przecinek($ludzie);
           
            foreach($array as $key => $value){

                 echo $key . " : " . $value . " " ; 

            }
             
$file_to_read = fopen('hurricanes.csv', 'r');
 
if($file_to_read !== FALSE){
     
    echo "<table>\n";
    while(($data = fgetcsv($file_to_read, 100, ',')) !== FALSE){
        echo "<tr>";
        for($i = 0; $i < count($data); $i++) {
            echo "<td>".$data[$i]."</td>";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
 
    fclose($file_to_read);
}
        ?>
        
    </body>
</html>