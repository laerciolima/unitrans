<?php

class ComprovanteController {

    public function __construct() {
        if (isset($_POST['metodo'])) {
            switch ($_POST['metodo']) {
                case 'save':
                    self::save();
                    break;
            }
        }
        if (isset($_GET['metodo'])) {
            switch ($_GET['metodo']) {

            }
        }
    }

    public function index() {
        // we store all the posts in a variable

        $comprovantes = ComprovanteDAO::all();
        require_once('views/comprovante/index.php');
    }

    public function delete() {
        // we store all the posts in a variable

        if (!ComprovanteDAO::delete(base64_decode($_GET['id']))) {
            $_SESSION['error'] = "Ocorreu um erro ao deletar o comprovante!";
        } else {
            $_SESSION['success'] = "Comprovante removido com sucesso!";
        }

        return call('comprovante', 'index');
    }

    public function view() {
        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post
        $comprovante = ComprovanteDAO::find($_GET['id']);
        require_once('views/comprovante/view.php');
    }

    public function save() {
        if (isset($_POST['fk_id_estudante'])) {
            @include_once '../connection.php';

            require '../models/Estudante.php';
            require '../models/Comprovante.php';
            require '../models/EstudanteDAO.php';
            require '../models/ComprovanteDAO.php';



            $comprovante = new Comprovante();
            $comprovante->setFk_id_estudante($_POST["fk_id_estudante"]);

            $comprovante->setStatus(0);

            $estudante = EstudanteDAO::find($_POST['fk_id_estudante']);


            $foto = $_FILES["imagem"];
            $error = [];
            $imagem_alterada = 0;



            if (!empty($foto["name"])) {
                $imagem_alterada = 1;
                // Largura máxima em pixels
                $largura = 5000;
                // Altura máxima em pixels
                $altura = 5000;
                // Tamanho máximo do arquivo em bytes
                $tamanho = 1000000;

                // Verifica se o arquivo é uma imagem
                if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])) {
                    $error[1] = "Isso não é uma imagem.";
                }

                // Pega as dimensões da imagem
                $dimensoes = getimagesize($foto["tmp_name"]);

                // Verifica se a largura da imagem é maior que a largura permitida
                if ($dimensoes[0] > $largura) {
                    $error[2] = "A largura da imagem não deve ultrapassar " . $largura . " pixels";
                }

                // Verifica se a altura da imagem é maior que a altura permitida
                if ($dimensoes[1] > $altura) {
                    $error[3] = "Altura da imagem não deve ultrapassar " . $altura . " pixels";
                }

                // Verifica se o tamanho da imagem é maior que o tamanho permitido

                if ($foto["size"] > $tamanho) {
                    $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
                }

                // Se não houver nenhum erro

                if (count($error) == 0) {
                    // Pega extensão da imagem
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

                    // Gera um nome único para a imagem
                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

                    // Caminho de onde ficará a imagem
                    $caminho_imagem = "../storage/user/" . $estudante->getCpf() . "/" . $nome_imagem;
                    
                    
                    // Faz o upload da imagem para seu respectivo caminho
                    move_uploaded_file($foto["tmp_name"], $caminho_imagem);

                    $comprovante->setImg($nome_imagem);
                }

                // Se houver mensagens de erro, exibe-as
                if (count($error) != 0) {
                    $retorno_erro = "";
                    foreach ($error as $erro) {
                        $retorno_erro .= $erro . "<br />";
                    }
                    echo $retorno_erro;
                    die();
                }
            }





            if (ComprovanteDAO::add($comprovante)) {
                echo "true";
                die();
            } else {
                echo "false";
            }
        }
        require_once('views/comprovante/add.php');
    }

    public function edit() {

        if (isset($_POST['data'])) {
            $comprovante = new Comprovante();
            $comprovante->setId(base64_decode($_GET['id']));
            $comprovante->setFk_id_estudante($_POST["fk_id_estudante"]);
            $comprovante->setData($_POST["data"]);
            $comprovante->setImg($_POST["img"]);
            $comprovante->setStatus($_POST["status"]);

            if (!ComprovanteDAO::edit($comprovante)) {
                $_SESSION['error'] = "Ocorreu um erro ao editar!";
            } else {
                $_SESSION['success'] = "Comprovante alterado com sucesso!";
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=comprovante&action=index\">";
                die();
            }
        }

        if (!isset($_GET['id']))
            return call('page', 'error');

        // we use the given id to get the right post"

        $comprovante = ComprovanteDAO::find(base64_decode($_GET['id']));
        require_once('views/comprovante/edit.php');
    }



}
$controller = new ComprovanteController();
?>
