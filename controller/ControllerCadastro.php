<?php
require_once("../model/Filme.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Filme();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setTitulo($_POST['titulo']);
        $this->cadastro->setAno($_POST['ano']);
        $this->cadastro->setDiretor($_POST['diretor']);
        $this->cadastro->setDuracao($_POST['duracao']);
        $this->cadastro->setGenero($_POST['genero']);
        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o filme não está duplicado');history.back()</script>";
        }
    }
}
new cadastroController();
