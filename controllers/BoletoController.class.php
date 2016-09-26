<?php

require_once(realpath(dirname(__FILE__)) . "/../models/Boleto.class.php");
require_once(realpath(dirname(__FILE__)) . "/../models/BoletoDAO.class.php");


class BoletoController 
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
        $boletoDAO = new BoletoDAO();

        $boleto = $boletoDAO->listById($id);
        
        return $boleto;
    }
    
    function listAll()
    {
        $boletoDAO = new BoletoDAO();

        $boletos = $boletoDAO->listAll();
        
        return $boletos;
    }
    
    function save()
    {
        session_start();
        
        $boleto =new Boleto();
        
        $boletoDAO=new BoletoDAO();
        
        $boleto->setId($_POST["id"]);
        $boleto->setNome_Banco($_POST["nome_banco"]);
        $boleto->setCedente($_POST["cedente"]);
        $boleto->setSacado($_POST["sacado"]);
        $boleto->setNro($_POST["nro"]);
        $boleto->setAceite($_POST["aceite"]);
        $boleto->setCarteira($_POST["carteira"]);
        $boleto->setValor($_POST["valor"]);
        $boleto->setVencimento($_POST["vencimento"]);
        $boleto->setInstrucoes($_POST["instrucoes"]);
        $boleto->setCod_Barras($_POST["cod_barras"]);
        if($boletoDAO->save($boleto))
        {
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/boleto/';</script>";
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/boleto'>";
        }    
    }
    
    function edit() 
    {
        session_start();

        $boleto= new Boleto();
        $boletoDAO = new BoletoDAO();        
        
$boleto->setId($_POST["id"]);
        $boleto->setId($_POST["id"]);
        $boleto->setNome_Banco($_POST["nome_banco"]);
        $boleto->setCedente($_POST["cedente"]);
        $boleto->setSacado($_POST["sacado"]);
        $boleto->setNro($_POST["nro"]);
        $boleto->setAceite($_POST["aceite"]);
        $boleto->setCarteira($_POST["carteira"]);
        $boleto->setValor($_POST["valor"]);
        $boleto->setVencimento($_POST["vencimento"]);
        $boleto->setInstrucoes($_POST["instrucoes"]);
        $boleto->setCod_Barras($_POST["cod_barras"]);
        if($boletoDAO->edit($boleto))
        {
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/boleto/';</script>";            
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/boleto/'>";
        }  
    }
    
    function delete() 
    {
        session_start();
         
        $boletoDAO = new BoletoDAO();

        if($boletoDAO->delete($_GET['id']))
        {            
            $_SESSION['success'] = "Ação realizada com sucesso.";
            
            echo "<script>location.href = '../views/boleto/';</script>";
        }
        else
        {
            $_SESSION['error'] = "Não foi possivel realizar a ação.";
            
            echo "<meta HTTP-EQUIV='Refresh' CONTENT='4; URL=../views/boleto'>";
        }  
    }
    
    
}

$boletoController = new BoletoController();

?>
