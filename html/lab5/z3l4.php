
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
            
                echo $aa , $aaa, " ";
                echo $bb ," ";
                echo $a ," ";
                echo $cc, " ";
            function dodawanie($a,$b){
             $t=$a+$b;
             return $t;
            }
            echo dodawanie(5,4);
            

        ?>
        
    </body>
</html>