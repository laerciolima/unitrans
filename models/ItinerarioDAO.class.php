<?php

require_once (realpath(dirname(__FILE__)). "/../config/Database.class.php");
require_once (realpath(dirname(__FILE__)). "/../models/Itinerario.class.php");

class ItinerarioDAO
{
    
    function listById($id)
    {
        $itinerario=new Itinerario();
        
        $query = ("SELECT * FROM itinerario WHERE id_itinerario = $id");
        
        $resultado = mysql_query($query, Database::connect());
        
        while ($linha = mysql_fetch_array($resultado))
        {            
            $itinerario = new Itinerario();
        
$itinerario->setId($linha["id_itinerario"]);
        $itinerario->setId($linha["id"]);
        $itinerario->setEndereco($linha["endereco"]);
        $itinerario->setMotorista($linha["motorista"]);
        $itinerario->setOnibus($linha["onibus"]);
        $itinerario->setCheckpoint($linha["checkpoint"]);
        $itinerario->setMotorista_Itinerario($linha["motorista_itinerario"]);
   }
        return $itinerario;
    }
    
    
    function listAll()
    {
        
        $itinerarios=array();
        
        $query = "SELECT * FROM itinerario";
        
        $resultado = mysql_query($query, Database::connect());
        
        while ($linha = mysql_fetch_array($resultado))
        {
            $itinerario = new Itinerario();
        
$itinerario->setId($linha["id_itinerario"]);
        $itinerario->setId($linha["id"]);
        $itinerario->setEndereco($linha["endereco"]);
        $itinerario->setMotorista($linha["motorista"]);
        $itinerario->setOnibus($linha["onibus"]);
        $itinerario->setCheckpoint($linha["checkpoint"]);
        $itinerario->setMotorista_Itinerario($linha["motorista_itinerario"]);
            $itinerarios[] = $itinerario;
        }
        return $itinerarios;
    }
    
    function save($itinerario)
    {
        $query="INSERT INTO itinerario(id,endereco,motorista,onibus,checkpoint,Motorista_Itinerario) VALUES ('" . $itinerario->getId() . "','" . $itinerario->getEndereco() . "','" . $itinerario->getMotorista() . "','" . $itinerario->getOnibus() . "','" . $itinerario->getCheckpoint() . "','" . $itinerario->getmotorista_itinerario() . "')";
        
        if (mysql_query($query, Database::connect()))
        {          
            return true;
        }
        else
        {
            echo "Erro - Redirecionando ... </br>  </br> " .mysql_error() . "</br>  ERRO NA QUERY: $query";
            
            return false;
        }
    }
    
    function edit($itinerario)
    {
        $query = "UPDATE itinerario SET id = '" . $itinerario->getid() . "',endereco = '" . $itinerario->getendereco() . "',motorista = '" . $itinerario->getmotorista() . "',onibus = '" . $itinerario->getonibus() . "',checkpoint = '" . $itinerario->getcheckpoint() . "',motorista_itinerario = '" . $itinerario->getmotorista_itinerario() . "' WHERE id_itinerario =" . $itinerario->getId();
        if (mysql_query($query, Database::connect()))
        {          
            return true;
        }
        else
        {
            echo "Erro - Redirecionando ... </br>  </br> " .mysql_error() . "</br>  ERRO NA QUERY: $query";
            
            return false;
        }
    }
    
    function delete($id)
    {        
        $query = "DELETE FROM itinerario WHERE id_itinerario=$id";
        
        if (mysql_query($query, Database::connect()))
        {          
            return true;
        }
        else
        {
            echo "Erro - Redirecionando ... </br>  </br> " .mysql_error() . "</br>  ERRO NA QUERY: $query";
            
            return false;
        }
    }
}

?>
