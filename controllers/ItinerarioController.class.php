<?php

require_once(realpath(dirname(__FILE__)) . "/../models/Itinerario.class.php");
require_once(realpath(dirname(__FILE__)) . "/../models/ItinerarioDAO.class.php");


class ItinerarioController 
{

    public function __construct() 
    {
        //A função isset verifica se a variavel foi definida, isso evita que haja 
        //um erro caso a classe não seja chamada por um formulario.
        if (isset($_POST['metodo'])) 
        {
            switch ($_POST['metodo']) 
            {
                case 'save':
                    self::save();

                    break;
                
                case 'edit':
                    //echo "Editar";
                    self::edit();

                    break;
            }
        }

        if (isset($_GET['metodo'])) 
        {
            switch ($_GET['metodo']) 
            {
                case 'delete':
                    self::delete();

                    break;
            }
        }
    }
    
    
    function listById($id)
    {
        $itinerarioDAO = new ItinerarioDAO();

        $itinerario = $itinerarioDAO->listById($id);
        
        return $itinerario;
    }
    
    function listAll()
    {
        $itinerarioDAO = new ItinerarioDAO();

        $itinerarios = $itinerarioDAO->listAll();
        
        return $itinerarios;
    }
    
    function save()
    {
        session_start();
        
        $itinerario =new Itinerario();
        
        $itinerarioDAO=new ItinerarioDAO();
        
        $itinerario->setId($_POST["id"]);
        $itinerario->setEndereco($_POST["endereco"]);
        $itinerario->setMotorista($_POST["motorista"]);
        $itinerario->setOnibus($_POST["onibus"]);
        $itinerario->setCheckpoint($_POST["checkpoint"]);
        $itinerario->setMotorista_Itinerario($_POST["motorista_itinerario"]);
        if($itinerarioDAO->save($itinerario))
        {
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/itinerario/';</script>";
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/itinerario'>";
        }    
    }
    
    function edit() 
    {
        session_start();

        $itinerario= new Itinerario();
        $itinerarioDAO = new ItinerarioDAO();        
        
$itinerario->setId($_POST["id"]);
        $itinerario->setId($_POST["id"]);
        $itinerario->setEndereco($_POST["endereco"]);
        $itinerario->setMotorista($_POST["motorista"]);
        $itinerario->setOnibus($_POST["onibus"]);
        $itinerario->setCheckpoint($_POST["checkpoint"]);
        $itinerario->setMotorista_Itinerario($_POST["motorista_itinerario"]);
        if($itinerarioDAO->edit($itinerario))
        {
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/itinerario/';</script>";            
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/itinerario/'>";
        }  
    }
    
    function delete() 
    {
        session_start();
         
        $itinerarioDAO = new ItinerarioDAO();

        if($itinerarioDAO->delete($_GET['id']))
        {            
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/itinerario/';</script>";
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/itinerario'>";
        }  
    }
    
    
}

$itinerarioController = new ItinerarioController();

?>
