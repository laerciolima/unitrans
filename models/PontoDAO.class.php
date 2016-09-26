<?php

require_once (realpath(dirname(__FILE__)). "/../config/Database.class.php");
require_once (realpath(dirname(__FILE__)). "/../models/Ponto.class.php");

class PontoDAO
{
    
    function listById($id)
    {
        $ponto=new Ponto();
        
        $query = ("SELECT * FROM ponto WHERE id_ponto = $id");
        
        $resultado = mysql_query($query, Database::connect());
        
        while ($linha = mysql_fetch_array($resultado))
        {            
            $ponto = new Ponto();
        
$ponto->setId($linha["id_ponto"]);
        $ponto->setId($linha["id"]);
        $ponto->setNome_Ponto($linha["nome_ponto"]);
        $ponto->setEndereco_Ponto($linha["endereco_ponto"]);
        $ponto->setQtd_Estudantes($linha["qtd_estudantes"]);
   }
        return $ponto;
    }
    
    
    function listAll()
    {
        
        $pontos=array();
        
        $query = "SELECT * FROM ponto";
        
        $resultado = mysql_query($query, Database::connect());
        
        while ($linha = mysql_fetch_array($resultado))
        {
            $ponto = new Ponto();
        
$ponto->setId($linha["id_ponto"]);
        $ponto->setId($linha["id"]);
        $ponto->setNome_Ponto($linha["nome_ponto"]);
        $ponto->setEndereco_Ponto($linha["endereco_ponto"]);
        $ponto->setQtd_Estudantes($linha["qtd_estudantes"]);
            $pontos[] = $ponto;
        }
        return $pontos;
    }
    
    function save($ponto)
    {
        $query="INSERT INTO ponto(id,nome_ponto,endereco_ponto,Qtd_Estudantes) VALUES ('" . $ponto->getId() . "','" . $ponto->getNome_Ponto() . "','" . $ponto->getEndereco_Ponto() . "','" . $ponto->getqtd_estudantes() . "')";
        
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
    
    function edit($ponto)
    {
        $query = "UPDATE ponto SET id = '" . $ponto->getid() . "',nome_ponto = '" . $ponto->getnome_ponto() . "',endereco_ponto = '" . $ponto->getendereco_ponto() . "',qtd_estudantes = '" . $ponto->getqtd_estudantes() . "' WHERE id_ponto =" . $ponto->getId();
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
        $query = "DELETE FROM ponto WHERE id_ponto=$id";
        
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
