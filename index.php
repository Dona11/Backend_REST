<!DOCTYPE html>
<html>
<head> <title>Backend REST</title> </head>
<body>
    <?php

    $_metodoClient = $_SERVER['REQUEST_METHOD'];
    if($_metodoClient = "GET"){
        echo "è arrivata una richiesta GET";
    }else if($_metodoClient = "POST"){
        echo "è arrivata una richiesta POST";
    }else if($_metodoClient = "DELETE"){
        echo "è arrivata una richiesta DELETE";
    }else if($_metodoClient = "PUT"){
        echo "è arrivata una richiesta PUT";
    }

    ?>
</body>
</html>
