<?php

class UniversidadeController {

    public function index() {
        // we store all the posts in a variable

        $universidades = UniversidadeDAO::all();
        require_once('views/universidade/index.php');
    }

    public function delete() {
        // we store all the posts in a variable

        if (!UniversidadeDAO::delete(base64_decode($_GET['id']))) {
            $_SESSION['error'] = "Ocorreu um erro ao deletar o universidade!";
        } else {
            $_SESSION['success'] = "Universidade removido com sucesso!";
        }

        return call('universidade', 'index');
    }

    public function view() {
        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post
        $universidade = UniversidadeDAO::find($_GET['id']);
        require_once('views/universidade/view.php');
    }

    public function add() {

        if (isset($_POST['cidade'])) {


            $universidade = new Universidade();
            $universidade->setNome($_POST["nome"]);
            $universidade->setCidade($_POST["cidade"]);
            if (UniversidadeDAO::add($universidade)) {
                $_SESSION['success'] = "Universidade cadastrado com sucesso!";
                header("Location: ?controller=universidade&action=index");
                die();
            } else {
                $_SESSION['error'] = "Ocorreu um erro no cadastro!";
            }
        }
        require_once('views/universidade/add.php');
    }

    public function edit() {

        if (isset($_POST['cidade'])) {
            $universidade = new Universidade();
            $universidade->setId(base64_decode($_GET['id']));
            $universidade->setNome($_POST["nome"]);
            $universidade->setCidade($_POST["cidade"]);

            if (!UniversidadeDAO::edit($universidade)) {
                $_SESSION['error'] = "Ocorreu um erro ao editar!";
            } else {
                $_SESSION['success'] = "Universidade alterado com sucesso!";
                header("Location: ?controller=universidade&action=index");
                die();
            }
        }

        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post"

        $universidade = UniversidadeDAO::find(base64_decode($_GET['id']));
        require_once('views/universidade/edit.php');
    }

}

?>