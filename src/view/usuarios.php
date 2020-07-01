<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <?php
    foreach ($usuarios as $user) {
     echo $user["nombre"].""." ",$user["contraseña"]."<br>";
    }
    
    
    ?>
    
</body>
</html>