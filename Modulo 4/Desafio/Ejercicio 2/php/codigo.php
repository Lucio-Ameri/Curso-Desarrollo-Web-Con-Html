<?php
// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

<p>
    Hola tu nombre es <?php echo $usuario; ?>
</p>

<p>
    y tu contraseña es <?php echo $contra; ?>
</p>

</body>
</html>