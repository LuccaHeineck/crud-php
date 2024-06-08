<!DOCTYPE HTML>
<html>
<?php include("../view/head.php") ?>

<body>
    <?php include("../view/menu.php") ?>

    <h1>Novo filme</h1>

    <div class="row">
        <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Título" required autofocus>
                <input class="form-control" type="number" id="ano" name="ano" placeholder="Ano de lançamento" required>
                <input class="form-control" type="text" id="diretor" name="diretor" placeholder="Diretor" required>
                <input class="form-control" type="number" id="duracao" name="duracao" placeholder="Duração" required>
                <input class="form-control" type="text" id="genero" name="genero" placeholder="Gênero" required>
            </div>
            <div class="form-group">
                <button type="submit" class="cadastrar1" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>

    
</body>

</html>
