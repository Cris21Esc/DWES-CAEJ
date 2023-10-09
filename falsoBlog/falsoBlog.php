<?php
// Inicializar la variable de texto
$textoCompleto = '';

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevoTexto = $_POST["texto"];
    
    // Obtener el texto existente del campo oculto (si existe)
    $textoExistente = isset($_POST["texto_completo"]) ? $_POST["texto_completo"] : '';
    
    // Concatenar el nuevo texto con el texto existente
    $textoCompleto = $textoExistente . "\n" . $nuevoTexto;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo PHP</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="texto">Ingrese un texto:</label>
        <input type="text" name="texto" id="texto">
        <input type="hidden" name="texto_completo" value="<?php echo $textoCompleto; ?>">
        <input type="submit" value="Enviar">
    </form>

    <hr>
    
    <label for="resultado">Texto ingresado:</label>
    <textarea width="10000px" name="resultado" id="resultado" readonly>
        <?php echo $textoCompleto; ?>
    </textarea>
</body>
</html>