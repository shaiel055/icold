<?php
require_once("_db.php");

// Crear una instancia de la clase Database
$database = new Database();
$pdo = $database->pdo; // Ahora puedes acceder a la propiedad $pdo

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'eliminar_producto':
            eliminar_producto();
            break;
        case 'editar_producto':
            editar_producto();
            break;
        case 'insertar_productos':
            insertar_productos();
            break;
    }
}
function insertar_productos()
{

    extract($_POST);

    // variables donde se almacenan los valores de nuestra imagen
    $tamanoArchivo = $_FILES['foto']['size'];

    // se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);

    // se realiza la consulta correspondiente para guardar los datos
    $imagenFin = $binariosImagen;

    $sql = "INSERT INTO productos (nombre, descripcion, color, precio, cantidad, cantidad_min, categorias, imagen)
            VALUES (:nombre, :descripcion, :color, :precio, :cantidad, :cantidad_min, :categorias, :imagen)";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':cantidad', $cantidad);
    $stmt->bindParam(':cantidad_min', $cantidad_min);
    $stmt->bindParam(':categorias', $categorias);
    $stmt->bindParam(':imagen', $imagenFin, PDO::PARAM_LOB);

    if ($stmt->execute()) {
        header("Location: ../views/usuarios/");
    } else {
        echo "Error en la consulta: " . $stmt->errorInfo()[2];
    }
}

function editar_producto()
{
    global $pdo;
    extract($_POST);

    // variables donde se almacenan los valores de nuestra imagen
    $tamanoArchivo = $_FILES['foto']['size'];

    // se realiza la lectura de la imagen
    $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);

    // se realiza la consulta correspondiente para guardar los datos
    $imagenFin = $binariosImagen;

    $sql = "UPDATE productos SET nombre = :nombre, descripcion = :descripcion, color = :color, precio = :precio, cantidad = :cantidad, categorias = :categorias, imagen = :imagen WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':descripcion', $descripcion);
    $stmt->bindParam(':color', $color);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':cantidad', $cantidad);
    $stmt->bindParam(':categorias', $categorias);
    $stmt->bindParam(':imagen', $imagenFin, PDO::PARAM_LOB);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: ../views/usuarios/");
    } else {
        echo "Error en la consulta: " . $stmt->errorInfo()[2];
    }
}

function eliminar_producto()
{
    global $pdo;
    extract($_POST);

    $sql = "DELETE FROM productos WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: ../views/usuarios/");
    } else {
        echo "Error en la consulta: " . $stmt->errorInfo()[2];
    }
}
?>