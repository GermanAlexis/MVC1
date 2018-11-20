<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MVC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="views/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <header> 
        <h1> "Work #1 " </h1>
    </header>
    <?php include "modules/navegador.php"; ?>
    <section>   
    <?php 
        
        $MVC = new MVCControlador();
        $MVC -> EnlacesPaginasControl();       
    ?>
    </section>s
</body>
</html>
