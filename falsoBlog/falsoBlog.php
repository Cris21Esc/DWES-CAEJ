<head>
    <title>Blog de Cris</title>
</head>

<body>
<?php
$mensaje = "Texto Vacío";
 if(! isset($_REQUEST["enviar"])){  
    if($mensaje == "Texto Vacio"){
        $mensaje=$_REQUEST["texto"];
    }
?>
        <form action="falsoBlog.php" method="post">
            <label type="" name="blog"><?php echo $mensaje?></input><br>
            <input type="text" name="texto"/>   
            <input type="submit" name="enviar" value="Enviar"/>
        </form>
        <?php 
        }else{
        ?>
        <form action="falsoBlog.php" method="post">
            <label type="" name="blog"><?php echo $mensaje?></input><br>
            <input type="text" name="texto"/>   
            <input type="submit" name="enviar" value="Enviar"/>
        </form>
        <?
        }
    ?>
        
</body>
</html>
</body>
</html>