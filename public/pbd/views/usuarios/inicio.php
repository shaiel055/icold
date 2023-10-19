<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Tienda en Línea</title>
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


    <div class="container mt-5">
    <div id="informative-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#informative-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#informative-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#informative-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-13">
                            <div class="carousel-caption">
                                <h3>Imagenes creativas</h3>
                                <p>IC es una tienda de diseño grafico que ofrece productos personalizados, efocado a lo que el cliente solicite</p>
                            </div>
                        </div>
                        <div class="col-lg-13">
                            <img src="../../img/n.jpg" class="d-block w-100" alt="Imagen 1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-13">
                            <div class="carousel-caption">
                            <h2>Nuestra Historia</h2>
            <p>imagenes creativas es una microempresa de punto cerrado que quiere incrementar sus ventas por medio de una pagina y haciendo proyectos nuevos
                            </div>
                        </div>
                        <div class="col-lg-13">
                            <img src="../../img/am.jpg" class="d-block w-100" alt="Imagen 2">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-13">
                            <div class="carousel-caption">
                            <h3>Objetivos</h3>
                            <p>Imagenes creativas tiene como objetivo crear los sueños del cliente reflejando sus emociones atravéz de productos ofrecidos</p>
                            
                            </div>
                        </div>
                        <div class="col-lg-13">
                            <img src="../../img/Triangle-colors-rodrigo_l_alonso.png" class="d-block w-100" alt="Imagen 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#informative-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#informative-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </a>
    </div>
</div>

<!-- Incluye los archivos JavaScript de Bootstrap (jQuery es requerido) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    <script src="script.js"></script>
    <!-- Sección de productos relevantes c
    <section class="productos-relevantes">
        <!- Aquí puedes agregar imágenes y enlaces a los productos relevantes -->
        <main>
        <section class="product">
            <img src="../../img/img/MicrosoftTeams-image (39).png" alt="Producto 1">
            <h2>vasos</h2>
            <p>vasos del color que desee</p>
            <p class="price">$15.000</p>
            
        </section>
        <section class="product">
            <img src="../../img/img/J.png" alt="Producto 2">
            <h2>Cuadro decoración</h2>
            <p>Cuadro de decoración de Mario</p>
            <p class="price">$30.000</p>
            
        </section>
        <section class="product">
            <img src="../../img/img/a.jpg" alt="Producto 3">
            <h2>Dinosaurio</h2>
            <p>Esto es un borrador</p>
            <p class="price">$10.000</p>
            
        </section>
    </main>
  

    <?php require '../../views/usuarios/footer.php' ?>

    <!-- Sección de "Contáctanos" -->
  

</body>

</html>

<style>
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}


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

/* Sección de productos relevantes */
.productos-relevantes {
    background-color: #f5f5f5;
    padding: 20px;
    text-align: center;
}


        /* Estilos personalizados para el carrusel */
        .carousel-caption {
            text-align: left;
            background: rgba(5, 0, 0, 0.5);
            padding: 20px;
        }

        .carousel-caption h3 {
            color: #fff;
        }

        .carousel-caption p {
            color: #fff;
        }

/* Estilo personalizado para el logo */
.logo-img {
  width: 100px; /* Define el ancho deseado */
  height: auto; /* Mantiene la proporción original */
}

main {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 20px;
}

.product {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 20px;
    margin: 10px;
    width: 30%;
    text-align: center;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.product img {
    max-width: 100%;
    height: auto;
}

.product h2 {
    font-size: 1.5rem;
    margin-top: 10px;
}

.product p {
    font-size: 1rem;
}

.price {
    font-weight: bold;
    color: #e44d26;
    font-size: 1.25rem;
}

.buy-button {
    background-color: #e44d26;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.buy-button:hover {
    background-color: #d04023;
}

</style>