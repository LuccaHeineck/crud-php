<!DOCTYPE HTML>
<html>
<?php include("../view/head.php") ?>

<body>
    <?php include("../view/menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>

    <h1>Editar filme</h1>

    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" return false;" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="titulo" name="titulo" value="<?php echo $editar->getTitulo(); ?>" required autofocus>
                <input class="form-control" type="number" id="ano" name="ano" value="<?php echo $editar->getAno(); ?>" required>
                <input class="form-control" type="text" id="diretor" name="diretor" value="<?php echo $editar->getDiretor(); ?>" required>
                <input class="form-control" type="number" id="duracao" name="duracao" value="<?php echo $editar->getDuracao(); ?>" required>
                <input class="form-control" type="text" id="genero" name="genero" value="<?php echo $editar->getGenero(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getTitulo();?>">
                <button type="submit" class="cadastrar1" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>
     
</body>

</html>
