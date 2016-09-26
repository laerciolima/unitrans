<?php

require_once(realpath(dirname(__FILE__)) . "/../models/Ponto.class.php");
require_once(realpath(dirname(__FILE__)) . "/../models/PontoDAO.class.php");


class PontoController 
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
        $pontoDAO = new PontoDAO();

        $ponto = $pontoDAO->listById($id);
        
        return $ponto;
    }
    
    function listAll()
    {
        $pontoDAO = new PontoDAO();

        $pontos = $pontoDAO->listAll();
        
        return $pontos;
    }
    
    function save()
    {
        session_start();
        
        $ponto =new Ponto();
        
        $pontoDAO=new PontoDAO();
        
        $ponto->setId($_POST["id"]);
        $ponto->setNome_Ponto($_POST["nome_ponto"]);
        $ponto->setEndereco_Ponto($_POST["endereco_ponto"]);
        $ponto->setQtd_Estudantes($_POST["qtd_estudantes"]);
        if($pontoDAO->save($ponto))
        {
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/ponto/';</script>";
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/ponto'>";
        }    
    }
    
    function edit() 
    {
        session_start();

        $ponto= new Ponto();
        $pontoDAO = new PontoDAO();        
        
$ponto->setId($_POST["id"]);
        $ponto->setId($_POST["id"]);
        $ponto->setNome_Ponto($_POST["nome_ponto"]);
        $ponto->setEndereco_Ponto($_POST["endereco_ponto"]);
        $ponto->setQtd_Estudantes($_POST["qtd_estudantes"]);
        if($pontoDAO->edit($ponto))
        {
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/ponto/';</script>";            
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/ponto/'>";
        }  
    }
    
    function delete() 
    {
        session_start();
         
        $pontoDAO = new PontoDAO();

        if($pontoDAO->delete($_GET['id']))
        {            
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/ponto/';</script>";
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/ponto'>";
        }  
    }
    
    
}

$pontoController = new PontoController();

?>
