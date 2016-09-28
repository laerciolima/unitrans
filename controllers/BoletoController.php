<?php

class BoletoController {

    public function index() {
        // we store all the posts in a variable
        
        $boletos = BoletoDAO::all();
        require_once('views/boleto/index.php');
        
    }

    public function delete() {
        // we store all the posts in a variable

        if (!BoletoDAO::delete(base64_decode($_GET['id']))) {
            $_SESSION['error'] = "Ocorreu um erro ao deletar o boleto!";
        }else{
            $_SESSION['success'] = "Boleto removido com sucesso!"; 
        }

        return call('boleto', 'index');
        
    }

    public function view() {
        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post
        $boleto = BoletoDAO::find($_GET['id']);
        require_once('views/boleto/view.php');
    }

    public function add() {
        if (isset($_POST['sacado'])) {


            $boleto = new Boleto();
        $boleto->setCedente($_POST["cedente"]);
        $boleto->setSacado($_POST["sacado"]);
        $boleto->setNro($_POST["nro"]);
        $boleto->setAceite($_POST["aceite"]);
        $boleto->setCarteira($_POST["carteira"]);
        $boleto->setValor($_POST["valor"]);
        $boleto->setVencimento($_POST["vencimento"]);
        $boleto->setInstrucoes($_POST["instrucoes"]);
        $boleto->setCodigoDeBarras($_POST["codigodebarras"]);
            if(BoletoDAO::add($boleto)){
                $_SESSION['success'] = "Boleto cadastrado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=boleto&action=index\">";
                die();            }else{
                $_SESSION['error'] = "Ocorreu um erro no cadastro!";
            }
            
        }
        require_once('views/boleto/add.php');
    }

    public function edit() {

        if (isset($_POST['sacado'])) {
            $boleto = new Boleto();
            $boleto->setId(base64_decode($_GET['id']));
        $boleto->setCedente($_POST["cedente"]);
        $boleto->setSacado($_POST["sacado"]);
        $boleto->setNro($_POST["nro"]);
        $boleto->setAceite($_POST["aceite"]);
        $boleto->setCarteira($_POST["carteira"]);
        $boleto->setValor($_POST["valor"]);
        $boleto->setVencimento($_POST["vencimento"]);
        $boleto->setInstrucoes($_POST["instrucoes"]);
        $boleto->setCodigoDeBarras($_POST["codigodebarras"]);
            
            if (!BoletoDAO::edit($boleto)) {
                $_SESSION['error'] = "Ocorreu um erro ao editar!";
            } else {
                $_SESSION['success'] = "Boleto alterado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=boleto&action=index\">";
                die();            }
            
        }

        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post"

        $boleto = BoletoDAO::find(base64_decode($_GET['id']));
        require_once('views/boleto/edit.php');
    }

}

?>