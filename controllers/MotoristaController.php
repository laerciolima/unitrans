<?php

class MotoristaController {

    public function index() {
        // we store all the posts in a variable
        
        $motoristas = MotoristaDAO::all();
        require_once('views/motorista/index.php');
        
    }

    public function delete() {
        // we store all the posts in a variable

        if (!MotoristaDAO::delete(base64_decode($_GET['id']))) {
            $_SESSION['error'] = "Ocorreu um erro ao deletar o motorista!";
        }else{
            $_SESSION['success'] = "Motorista removido com sucesso!"; 
        }

        return call('motorista', 'index');
        
    }

    public function view() {
        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post
        $motorista = MotoristaDAO::find($_GET['id']);
        require_once('views/motorista/view.php');
    }

    public function add() {
        if (isset($_POST['iditinerario'])) {


            $motorista = new Motorista();
        $motorista->setIdonibus($_POST["idonibus"]);
        $motorista->setIditinerario($_POST["iditinerario"]);
        $motorista->setNome($_POST["nome"]);
            if(MotoristaDAO::add($motorista)){
                $_SESSION['success'] = "Motorista cadastrado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=motorista&action=index\">";
                die();            }else{
                $_SESSION['error'] = "Ocorreu um erro no cadastro!";
            }
            
        }
        require_once('views/motorista/add.php');
    }

    public function edit() {

        if (isset($_POST['iditinerario'])) {
            $motorista = new Motorista();
            $motorista->setId(base64_decode($_GET['id']));
        $motorista->setIdonibus($_POST["idonibus"]);
        $motorista->setIditinerario($_POST["iditinerario"]);
        $motorista->setNome($_POST["nome"]);
            
            if (!MotoristaDAO::edit($motorista)) {
                $_SESSION['error'] = "Ocorreu um erro ao editar!";
            } else {
                $_SESSION['success'] = "Motorista alterado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=motorista&action=index\">";
                die();            }
            
        }

        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post"

        $motorista = MotoristaDAO::find(base64_decode($_GET['id']));
        require_once('views/motorista/edit.php');
    }

}

?>