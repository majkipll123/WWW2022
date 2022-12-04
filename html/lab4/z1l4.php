
<html >
    <head>
        <title>Hello world w php</title>
    </head>  
    <body>
        <?php
            
                echo "Hello world";
            
        ?>
        <form method="post" action="<?php $PHP_SELF; ?>">
            Podaj swoje dane:<input type="text" name="dane">
            <input type="submit" />
        </form>
    </body>
</html>