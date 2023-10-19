<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Productos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php require '../../views/usuarios/nav.php' ?>

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
</body>
</html>
 <style>
    /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
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