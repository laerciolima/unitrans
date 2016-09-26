<?php

require_once (realpath(dirname(__FILE__)). "/../config/Database.class.php");
require_once (realpath(dirname(__FILE__)). "/../models/Boleto.class.php");

class BoletoDAO
{
    
    function listById($id)
    {
        $boleto=new Boleto();
        
        $query = ("SELECT * FROM boleto WHERE id_boleto = $id");
        
        $resultado = mysql_query($query, Database::connect());
        
        while ($linha = mysql_fetch_array($resultado))
        {            
            $boleto = new Boleto();
        
$boleto->setId($linha["id_boleto"]);
        $boleto->setId($linha["id"]);
        $boleto->setNome_Banco($linha["nome_banco"]);
        $boleto->setCedente($linha["cedente"]);
        $boleto->setSacado($linha["sacado"]);
        $boleto->setNro($linha["nro"]);
        $boleto->setAceite($linha["aceite"]);
        $boleto->setCarteira($linha["carteira"]);
        $boleto->setValor($linha["valor"]);
        $boleto->setVencimento($linha["vencimento"]);
        $boleto->setInstrucoes($linha["instrucoes"]);
        $boleto->setCod_Barras($linha["cod_barras"]);
   }
        return $boleto;
    }
    
    
    function listAll()
    {
        
        $boletos=array();
        
        $query = "SELECT * FROM boleto";
        
        $resultado = mysql_query($query, Database::connect());
        
        while ($linha = mysql_fetch_array($resultado))
        {
            $boleto = new Boleto();
        
$boleto->setId($linha["id_boleto"]);
        $boleto->setId($linha["id"]);
        $boleto->setNome_Banco($linha["nome_banco"]);
        $boleto->setCedente($linha["cedente"]);
        $boleto->setSacado($linha["sacado"]);
        $boleto->setNro($linha["nro"]);
        $boleto->setAceite($linha["aceite"]);
        $boleto->setCarteira($linha["carteira"]);
        $boleto->setValor($linha["valor"]);
        $boleto->setVencimento($linha["vencimento"]);
        $boleto->setInstrucoes($linha["instrucoes"]);
        $boleto->setCod_Barras($linha["cod_barras"]);
            $boletos[] = $boleto;
        }
        return $boletos;
    }
    
    function save($boleto)
    {
        $query="INSERT INTO boleto(id,nome_banco,cedente,sacado,nro,aceite,carteira,valor,vencimento,instrucoes,Cod_Barras) VALUES ('" . $boleto->getId() . "','" . $boleto->getNome_Banco() . "','" . $boleto->getCedente() . "','" . $boleto->getSacado() . "','" . $boleto->getNro() . "','" . $boleto->getAceite() . "','" . $boleto->getCarteira() . "','" . $boleto->getValor() . "','" . $boleto->getVencimento() . "','" . $boleto->getInstrucoes() . "','" . $boleto->getcod_barras() . "')";
        
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
    
    function edit($boleto)
    {
        $query = "UPDATE boleto SET id = '" . $boleto->getid() . "',nome_banco = '" . $boleto->getnome_banco() . "',cedente = '" . $boleto->getcedente() . "',sacado = '" . $boleto->getsacado() . "',nro = '" . $boleto->getnro() . "',aceite = '" . $boleto->getaceite() . "',carteira = '" . $boleto->getcarteira() . "',valor = '" . $boleto->getvalor() . "',vencimento = '" . $boleto->getvencimento() . "',instrucoes = '" . $boleto->getinstrucoes() . "',cod_barras = '" . $boleto->getcod_barras() . "' WHERE id_boleto =" . $boleto->getId();
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
        $query = "DELETE FROM boleto WHERE id_boleto=$id";
        
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
