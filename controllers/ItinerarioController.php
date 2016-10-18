<?php

class ItinerarioController {

    public function index() {
        // we store all the posts in a variable
        
        $itinerarios = ItinerarioDAO::all();
        require_once('views/itinerario/index.php');
        
    }

    public function delete() {
        // we store all the posts in a variable

        if (!ItinerarioDAO::delete(base64_decode($_GET['id']))) {
            $_SESSION['error'] = "Ocorreu um erro ao deletar o itinerario!";
        }else{
            $_SESSION['success'] = "Itinerario removido com sucesso!"; 
        }

        return call('itinerario', 'index');
        
    }

    public function view() {
        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post
        $itinerario = ItinerarioDAO::find($_GET['id']);
        require_once('views/itinerario/view.php');
    }

    public function add() {
        if (isset($_POST['placa'])) {


            $itinerario = new Itinerario();
        $itinerario->setEndereco($_POST["endereco"]);
        $itinerario->setPlaca($_POST["placa"]);
        $itinerario->setCheckpoint($_POST["checkpoint"]);
            if(ItinerarioDAO::add($itinerario)){
                $_SESSION['success'] = "Itinerario cadastrado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=itinerario&action=index\">";
                die();            }else{
                $_SESSION['error'] = "Ocorreu um erro no cadastro!";
            }
            
        }
        require_once('views/itinerario/add.php');
    }

    public function edit() {

        if (isset($_POST['placa'])) {
            $itinerario = new Itinerario();
            $itinerario->setId(base64_decode($_GET['id']));
        $itinerario->setEndereco($_POST["endereco"]);
        $itinerario->setPlaca($_POST["placa"]);
        $itinerario->setCheckpoint($_POST["checkpoint"]);
            
            if (!ItinerarioDAO::edit($itinerario)) {
                $_SESSION['error'] = "Ocorreu um erro ao editar!";
            } else {
                $_SESSION['success'] = "Itinerario alterado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=itinerario&action=index\">";
                die();            }
            
        }

        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post"

        $itinerario = ItinerarioDAO::find(base64_decode($_GET['id']));
        require_once('views/itinerario/edit.php');
    }

}

?>