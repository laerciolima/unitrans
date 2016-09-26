<?php

require_once(realpath(dirname(__FILE__)) . "/../models/Onibus.class.php");
require_once(realpath(dirname(__FILE__)) . "/../models/OnibusDAO.class.php");


class OnibusController 
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
        $onibusDAO = new OnibusDAO();

        $onibus = $onibusDAO->listById($id);
        
        return $onibus;
    }
    
    function listAll()
    {
        $onibusDAO = new OnibusDAO();

        $onibus = $onibusDAO->listAll();
        
        return $onibus;
    }
    
    function save()
    {
        session_start();
        
        $onibus =new Onibus();
        
        $onibusDAO=new OnibusDAO();
        
        $onibus->setId($_POST["id"]);
        $onibus->setPlaca($_POST["placa"]);
        $onibus->setAno($_POST["ano"]);
        $onibus->setCor($_POST["cor"]);
        $onibus->setMarca($_POST["marca"]);
        $onibus->setHorario($_POST["horario"]);
        $onibus->setIti_End($_POST["iti_end"]);
        if($onibusDAO->save($onibus))
        {
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/onibus/';</script>";
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/onibus'>";
        }    
    }
    
    function edit() 
    {
        session_start();

        $onibus= new Onibus();
        $onibusDAO = new OnibusDAO();        
        
$onibus->setId($_POST["id"]);
        $onibus->setId($_POST["id"]);
        $onibus->setPlaca($_POST["placa"]);
        $onibus->setAno($_POST["ano"]);
        $onibus->setCor($_POST["cor"]);
        $onibus->setMarca($_POST["marca"]);
        $onibus->setHorario($_POST["horario"]);
        $onibus->setIti_End($_POST["iti_end"]);
        if($onibusDAO->edit($onibus))
        {
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/onibus/';</script>";            
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/onibus/'>";
        }  
    }
    
    function delete() 
    {
        session_start();
         
        $onibusDAO = new OnibusDAO();

        if($onibusDAO->delete($_GET['id']))
        {            
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/onibus/';</script>";
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/onibus'>";
        }  
    }
    
    
}

$onibusController = new OnibusController();

?>
