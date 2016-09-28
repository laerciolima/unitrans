<?php

class PontoController {

    public function index() {
        // we store all the posts in a variable
        
        $pontos = PontoDAO::all();
        require_once('views/ponto/index.php');
        
    }

    public function delete() {
        // we store all the posts in a variable

        if (!PontoDAO::delete(base64_decode($_GET['id']))) {
            $_SESSION['error'] = "Ocorreu um erro ao deletar o ponto!";
        }else{
            $_SESSION['success'] = "Ponto removido com sucesso!"; 
        }

        return call('ponto', 'index');
        
    }

    public function view() {
        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post
        $ponto = PontoDAO::find($_GET['id']);
        require_once('views/ponto/view.php');
    }

    public function add() {
        if (isset($_POST['qtdestudantes'])) {


            $ponto = new Ponto();
        $ponto->setEndereco($_POST["endereco"]);
        $ponto->setQtdEstudantes($_POST["qtdestudantes"]);
            if(PontoDAO::add($ponto)){
                $_SESSION['success'] = "Ponto cadastrado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=ponto&action=index\">";
                die();            }else{
                $_SESSION['error'] = "Ocorreu um erro no cadastro!";
            }
            
        }
        require_once('views/ponto/add.php');
    }

    public function edit() {

        if (isset($_POST['qtdestudantes'])) {
            $ponto = new Ponto();
            $ponto->setId(base64_decode($_GET['id']));
        $ponto->setEndereco($_POST["endereco"]);
        $ponto->setQtdEstudantes($_POST["qtdestudantes"]);
            
            if (!PontoDAO::edit($ponto)) {
                $_SESSION['error'] = "Ocorreu um erro ao editar!";
            } else {
                $_SESSION['success'] = "Ponto alterado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=ponto&action=index\">";
                die();            }
            
        }

        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post"

        $ponto = PontoDAO::find(base64_decode($_GET['id']));
        require_once('views/ponto/edit.php');
    }

}

?>