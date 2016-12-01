<?php

if(isset($_GET['metodo'])){
    @include_once '../connection.php';
        require '../models/Estudante.php';
        require '../models/EstudanteDAO.php';
        require '../models/Universidade.php';
        require '../models/UniversidadeDAO.php';
    EstudanteController::find();
}

class EstudanteController {

    public function index() {

        $estudantes = EstudanteDAO::all();
        require_once('views/estudante/index.php');
    }


    public function mapa() {

        $estudantes = EstudanteDAO::all();
        require_once('views/estudante/mapa.php');
    }

    public function delete() {
        if (!EstudanteDAO::delete(base64_decode($_GET['id']))) {
            $_SESSION['error'] = "Ocorreu um erro ao deletar o estudante!";
        } else {
            $_SESSION['success'] = "Estudante removido com sucesso!";
        }

        return call('estudante', 'index');
    }

    public function view() {
        if (!isset($_GET['id']))
            return call('page', 'error');

        $estudante = EstudanteDAO::find($_GET['id']);
        require_once('views/estudante/view.php');
    }

     public static function find() {



        if (!isset($_GET['id']))
            return call('page', 'error');

        $estudante = EstudanteDAO::findWithStatus($_GET['id']);

        if(isset($estudante)){
            for($i = 0; $i < count($estudante); $i++){
                unset($estudante[$i]);
            }
            echo json_encode($estudante);
        }else{

            $estudante = EstudanteDAO::find($_GET['id']);

            $array['nome_aluno'] = $estudante->getNome();
            $array['data_de_nascimento'] = $estudante->getData_de_nascimento();
            $array['horario_de_ida'] = $estudante->getHorario_de_ida();
            $array['horario_de_volta'] = $estudante->getHorario_de_volta();

            $universidade = UniversidadeDAO::find($estudante->getFk_id_universidade());

            $array['universidade'] = $universidade->getNome();
            $array['foto'] = "unitrans/storage/user/".$estudante->getCpf()."/".$estudante->getFoto();
            $array['status'] = 0;

            echo json_encode($array);
        }
    }

    public function add() {
        if (isset($_POST['cpf'])) {


            $estudante = new Estudante();
            $estudante->setNome($_POST["nome"]);
            $estudante->setCpf($_POST["cpf"]);
            $estudante->setData_de_nascimento($_POST["data_de_nascimento"]);
            $estudante->setTelefone($_POST["telefone"]);
            $estudante->setRua($_POST["rua"]);
            $estudante->setNumero($_POST["numero"]);
            $estudante->setBairro($_POST["bairro"]);
            $estudante->setCidade($_POST["cidade"]);
            $estudante->setCurso($_POST["curso"]);
            $estudante->setfk_id_universidade($_POST["fk_id_universidade"]);
            $estudante->setHorario_de_ida($_POST["horario_de_ida"]);
            $estudante->setHorario_de_volta($_POST["horario_de_volta"]);
            $estudante->setLogin($_POST["login"]);
            $estudante->setSenha($_POST["senha"]);


            $foto = $_FILES["foto"];
            $error = [];
            $imagem_alterada = 0;




            $address = str_replace(" ", "+", $estudante->getRua()) . "," . $estudante->getNumero() . ",";
            $address .= str_replace(" ", "+", $estudante->getCidade()) . ",Brasil";

            echo $address . "-<br/>";

            $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address=' . $address . '&sensor=false');

            $output = json_decode($geocode);

            $lat = $output->results[0]->geometry->location->lat;
            $long = $output->results[0]->geometry->location->lng;

            $estudante->setLong($long);
            $estudante->setLat($lat);
            print_r($estudante);
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
                    $caminho_imagem = "storage/user/" . $estudante->getCpf() . "/" . $nome_imagem;

                    //upload mais embaixo

                    $estudante->setFoto($nome_imagem);
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







            return;


            if (EstudanteDAO::add($estudante)) {
                $_SESSION['success'] = "Estudante cadastrado com sucesso!";
                mkdir("storage/user/".$estudante->getCpf());
                move_uploaded_file($foto["tmp_name"], $caminho_imagem);
                echo "<meta http-equiv=\"Refresh\" content=\"0; url=?controller=estudante&action=index\">";
                die();
            } else {
                $_SESSION['error'] = "Ocorreu um erro no cadastro!";
            }
        }
        $universidades = UniversidadeDAO::all();
        require_once('views/estudante/add.php');
    }

    public function edit() {

        if (isset($_POST['cpf'])) {
            $estudante = new Estudante();
            $estudante->setId(base64_decode($_GET['id']));
            $estudante->setNome($_POST["nome"]);
            $estudante->setCpf($_POST["cpf"]);
            $estudante->setData_de_nascimento($_POST["data_de_nascimento"]);
            $estudante->setTelefone($_POST["telefone"]);
            $estudante->setRua($_POST["rua"]);
            $estudante->setNumero($_POST["numero"]);
            $estudante->setBairro($_POST["bairro"]);
            $estudante->setCidade($_POST["cidade"]);
            $estudante->setCurso($_POST["curso"]);
            $estudante->setfk_id_universidade($_POST["fk_id_universidade"]);
            $estudante->setHorario_de_ida($_POST["horario_de_ida"]);
            $estudante->setHorario_de_volta($_POST["horario_de_volta"]);
            $estudante->setLogin($_POST["login"]);
            $estudante->setSenha($_POST["senha"]);

            if (!EstudanteDAO::edit($estudante)) {
                $_SESSION['error'] = "Ocorreu um erro ao editar!";
            } else {
                $_SESSION['success'] = "Estudante alterado com sucesso!";
                header("Location: ?controller=estudante&action=index");
                die();
            }
        }

        if (!isset($_GET['id']))
            return call('page', 'error');


        $estudante = EstudanteDAO::find(base64_decode($_GET['id']));
        require_once('views/estudante/edit.php');
    }

}

?>
