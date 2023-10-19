<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Información de la Empresa</title>
</head>
<body>
<?php require '../../views/usuarios/nav.php' ?>
    
    <main>
        <section id="nosotros">
            <h2>Nosotros</h2>
            <p>Somos una empresa enfocada en el diseño grafico, ofrecemos variedad de productos personalizados</p>
        </section>
        
        <section id="servicios">
            <h2>Servicios</h2>
            <ul>
                <li>Servicio 1 en proceso</li>
                <li>Servicio 2 en proceso</li>
                <li>Servicio 3 en proceso</li>
            </ul>
           
        </section>
    </main>
    
    <?php require '../../views/usuarios/footer.php' ?>
</body>
</html>

<style> 
body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}

header {
    background-color: #4A5075;
    color: white;
    text-align: center;
    padding: 20px;
}

header h1 {
    font-size: 36px;
}

main {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

section {
    margin-bottom: 30px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

section h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

ul {
    list-style: none;
    padding: 0;
}

ul li {
    margin-bottom: 10px;
}

footer {
    text-align: center;
    background-color: #4A5075;
    color: white;
    padding: 10px 0;
}

/* Estilos adicionales pueden ser agregados para personalizar aún más el diseño */

</style>