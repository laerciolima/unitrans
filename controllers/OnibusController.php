<?php

class OnibusController {

    public function index() {
        // we store all the posts in a variable
        
        $onibus = OnibusDAO::all();
        require_once('views/onibus/index.php');
        
    }

    public function delete() {
        // we store all the posts in a variable

        if (!OnibusDAO::delete(base64_decode($_GET['id']))) {
            $_SESSION['error'] = "Ocorreu um erro ao deletar o onibus!";
        }else{
            $_SESSION['success'] = "Onibus removido com sucesso!"; 
        }

        return call('onibus', 'index');
        
    }

    public function view() {
        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post
        $onibus = OnibusDAO::find($_GET['id']);
        require_once('views/onibus/view.php');
    }

    public function add() {
        if (isset($_POST['marca'])) {


            $onibus = new Onibus();
        $onibus->setPlaca($_POST["placa"]);
        $onibus->setMarca($_POST["marca"]);
        $onibus->setAno($_POST["ano"]);
        $onibus->setCor($_POST["cor"]);
        $onibus->setHorario($_POST["horario"]);
            if(OnibusDAO::add($onibus)){
                $_SESSION['success'] = "Onibus cadastrado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=onibus&action=index\">";
                die();            }else{
                $_SESSION['error'] = "Ocorreu um erro no cadastro!";
            }
            
        }
        require_once('views/onibus/add.php');
    }

    public function edit() {

        if (isset($_POST['marca'])) {
            $onibus = new Onibus();
            $onibus->setId(base64_decode($_GET['id']));
        $onibus->setPlaca($_POST["placa"]);
        $onibus->setMarca($_POST["marca"]);
        $onibus->setAno($_POST["ano"]);
        $onibus->setCor($_POST["cor"]);
        $onibus->setHorario($_POST["horario"]);
            
            if (!OnibusDAO::edit($onibus)) {
                $_SESSION['error'] = "Ocorreu um erro ao editar!";
            } else {
                $_SESSION['success'] = "Onibus alterado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=onibus&action=index\">";
                die();            }
            
        }

        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post"

        $onibus = OnibusDAO::find(base64_decode($_GET['id']));
        require_once('views/onibus/edit.php');
    }

}

?>