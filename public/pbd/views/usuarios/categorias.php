<!--vista-->
<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<body>
    <div class="row">
        <div class="col-sm-4">
<a class="catvestimenta" href="productosCategoria.php?categoria=<?php echo 'vestimenta'?>">
Vestimenta
</a>
        </div>
<div class="col-sm-4">
<a class="cathogar" href="productosCategoria.php?categoria=<?php echo 'Hogar'?>">
Hogar
</a>
</div>  
<div class="col-sm-4">
<a class="catpublicidad" href="productosCategoria.php?categoria=<?php echo 'Publicidad'?>">
Publicidad
</a>
</div>  
</div>
<div class="row">
</div>

</body>
<?php require '../../includes/_footer.php' ?>
</html>