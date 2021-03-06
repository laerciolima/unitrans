<?php
if (isset($_GET['metodo'])) {

     switch ($_GET['metodo']) {
      case 'list':
         $controller =  new PontoController();
         $controller->list_mobile();
         break;
     }
}
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
        if (isset($_POST['bairro'])) {


            $ponto = new Ponto();
        $ponto->setEndereco($_POST["endereco"]);
        $ponto->setBairro($_POST["bairro"]);
        $ponto->setCidade($_POST["cidade"]);


        $address = str_replace(" ", "+", $_POST["endereco"] . "," . $_POST["bairro"] . ",");
        $address .= str_replace(" ", "+", $_POST["cidade"]) . ",Brasil";

        $url = "https://maps.google.com/maps/api/geocode/json?address=" . $address . "&sensor=false&key=AIzaSyBWX65SWnShDhbin6V-87H4hroL8T_ks4s";
        $geocode = file_get_contents($url);

        $output = json_decode($geocode);

        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;

        $ponto->setLong($long);
        $ponto->setLat($lat);

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

        if (isset($_POST['bairro'])) {
            $ponto = new Ponto();
            $ponto->setId(base64_decode($_GET['id']));
        $ponto->setEndereco($_POST["endereco"]);
        $ponto->setBairro($_POST["bairro"]);
        $ponto->setCidade($_POST["cidade"]);

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


    public function list_mobile() {
      // we store all the posts in a variable
      @include_once '../connection.php';

      require '../models/Ponto.php';
      require '../models/PontoDAO.php';


      $pontos = PontoDAO::all();
      //print_r($pontos);
      echo json_encode($pontos);
   }

}

?>
