<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navegación -->
    
    <nav>
        <ul>
        <a class="navbar-brand" href="../../views/usuarios/inicio.php"><img class="logo-img" src="../../img/logo.png" alt="Logo"></a>
            <li><a href="../../views/usuarios/about.php">Sobre Nosotros</a></li>
            <li><a href="../../includes/_sesion/login.php">Inicio de Sesión</a></li>
            <li><a href="../../includes/_sesion/registros.php">Registro</a></li>
            <li><a href="../../views/usuarios/productos.php">Productos</a></li>
        </ul>
    </nav>
</body>

</html>

<style>
/* Navegación */
nav {
    background-color: #4A5075;
    color: white;
    text-align: center;
    padding: 30px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 40px;
}

nav ul li a {
    text-decoration: none;
    color: white;
}

/* Estilo personalizado para el logo */
.logo-img {
  width: 100px; /* Define el ancho deseado */
  height: auto; /* Mantiene la proporción original */
}
</style>