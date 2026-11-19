<?php
// Comprobar si el formulario fue enviado por el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recoger y limpiar los datos de texto para mayor seguridad
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $telefono = htmlspecialchars($_POST['telefono'] ?? '');
    $direccion = htmlspecialchars($_POST['direccion'] ?? '');
    $correo = htmlspecialchars($_POST['correo'] ?? '');
    $hora = htmlspecialchars($_POST['hora'] ?? 'Lo antes posible');
    $tamano = htmlspecialchars($_POST['tamano'] ?? 'No especificado');
    $pago = htmlspecialchars($_POST['pago'] ?? 'No especificado');
    $instrucciones = htmlspecialchars($_POST['instrucciones'] ?? 'Ninguna');

    // Comprobar los checkboxes de ingredientes (si están marcados o no)
    $queso = isset($_POST['queso']) ? 'Sí' : 'No';
    $pimiento = isset($_POST['pimiento']) ? 'Sí' : 'No';
    $cebolla = isset($_POST['cebolla']) ? 'Sí' : 'No';

    // Mostrar un resumen del pedido en la pantalla
    echo "<!DOCTYPE html>";
    echo "<html lang='es'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Resumen del Pedido</title>";
    echo "</head>";
    echo "<body>";
    
    echo "<h1>¡Gracias por tu pedido, $nombre!</h1>";
    echo "<p>Hemos recibido tu solicitud correctamente. Aquí tienes los detalles:</p>";
    
    echo "<h2>Detalles de la Pizza:</h2>";
    echo "<ul>";
    echo "<li><strong>Tamaño:</strong> " . ucfirst($tamano) . "</li>";
    echo "<li><strong>Ingredientes:</strong>";
    echo "<ul>";
    echo "<li>Queso: $queso</li>";
    echo "<li>Pimiento: $pimiento</li>";
    echo "<li>Cebolla: $cebolla</li>";
    echo "</ul>";
    echo "</li>";
    echo "</ul>";

    echo "<h2>Datos de Entrega:</h2>";
    echo "<ul>";
    echo "<li><strong>Dirección:</strong> $direccion</li>";
    echo "<li><strong>Teléfono:</strong> $telefono</li>";
    echo "<li><strong>E-mail:</strong> $correo</li>";
    echo "<li><strong>Hora de entrega:</strong> $hora</li>";
    echo "<li><strong>Instrucciones especiales:</strong> $instrucciones</li>";
    echo "</ul>";

    echo "<h2>Método de Pago:</h2>";
    echo "<p>Has seleccionado: <strong>" . ucfirst($pago) . "</strong></p>";

    echo "<br><a href='index.html'>Hacer otro pedido</a>";
    
    echo "</body>";
    echo "</html>";

} else {
    // Si alguien entra directamente a este archivo PHP sin enviar el formulario
    echo "<p>Acceso no autorizado.</p>";
}
?>