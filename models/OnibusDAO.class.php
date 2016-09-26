<?php

require_once (realpath(dirname(__FILE__)). "/../config/Database.class.php");
require_once (realpath(dirname(__FILE__)). "/../models/Onibus.class.php");

class OnibusDAO
{
    
    function listById($id)
    {
        $onibus=new Onibus();
        
        $query = ("SELECT * FROM onibus WHERE id_onibus = $id");
        
        $resultado = mysql_query($query, Database::connect());
        
        while ($linha = mysql_fetch_array($resultado))
        {            
            $onibus = new Onibus();
        
$onibus->setId($linha["id_onibus"]);
        $onibus->setId($linha["id"]);
        $onibus->setPlaca($linha["placa"]);
        $onibus->setAno($linha["ano"]);
        $onibus->setCor($linha["cor"]);
        $onibus->setMarca($linha["marca"]);
        $onibus->setHorario($linha["horario"]);
        $onibus->setIti_End($linha["iti_end"]);
   }
        return $onibus;
    }
    
    
    function listAll()
    {
        
        $onibus=array();
        
        $query = "SELECT * FROM onibus";
        
        $resultado = mysql_query($query, Database::connect());
        
        while ($linha = mysql_fetch_array($resultado))
        {
            $onibus = new Onibus();
        
$onibus->setId($linha["id_onibus"]);
        $onibus->setId($linha["id"]);
        $onibus->setPlaca($linha["placa"]);
        $onibus->setAno($linha["ano"]);
        $onibus->setCor($linha["cor"]);
        $onibus->setMarca($linha["marca"]);
        $onibus->setHorario($linha["horario"]);
        $onibus->setIti_End($linha["iti_end"]);
            $onibus[] = $onibus;
        }
        return $onibus;
    }
    
    function save($onibus)
    {
        $query="INSERT INTO onibus(id,placa,ano,cor,marca,horario,Iti_End) VALUES ('" . $onibus->getId() . "','" . $onibus->getPlaca() . "','" . $onibus->getAno() . "','" . $onibus->getCor() . "','" . $onibus->getMarca() . "','" . $onibus->getHorario() . "','" . $onibus->getiti_end() . "')";
        
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
    
    function edit($onibus)
    {
        $query = "UPDATE onibus SET id = '" . $onibus->getid() . "',placa = '" . $onibus->getplaca() . "',ano = '" . $onibus->getano() . "',cor = '" . $onibus->getcor() . "',marca = '" . $onibus->getmarca() . "',horario = '" . $onibus->gethorario() . "',iti_end = '" . $onibus->getiti_end() . "' WHERE id_onibus =" . $onibus->getId();
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
        $query = "DELETE FROM onibus WHERE id_onibus=$id";
        
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
