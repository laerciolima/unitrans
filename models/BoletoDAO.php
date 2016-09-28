<?php

require_once 'models/Boleto.php';

class BoletoDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM boleto');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $boleto = new Boleto();

            $boleto->setId($linha['id']);
            $boleto->setCedente($linha["cedente"]);
            $boleto->setSacado($linha["sacado"]);
            $boleto->setNro($linha["nro"]);
            $boleto->setAceite($linha["aceite"]);
            $boleto->setCarteira($linha["carteira"]);
            $boleto->setValor($linha["valor"]);
            $boleto->setVencimento($linha["vencimento"]);
            $boleto->setInstrucoes($linha["instrucoes"]);
            $boleto->setCodigoDeBarras($linha["codigodebarras"]);

            $lista[] = $boleto;
        }

        return $lista;
    }

    public static function find($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $req = Db::getInstance()->prepare('SELECT * FROM boleto WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));

        return BoletoDAO::popular($req->fetch());
        
    }

    public static function delete($id) {
        // we make sure $id is an integer

        $id = intval($id);

        $req = Db::getInstance()->prepare('DELETE FROM boleto WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);

        return $req->execute();
    }

    public static function add(Boleto $boleto) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("INSERT INTO boleto (cedente,sacado,nro,aceite,carteira,valor,vencimento,instrucoes,codigodebarras) VALUES (:cedente,:sacado,:nro,:aceite,:carteira,:valor,:vencimento,:instrucoes,:codigodebarras)");
        $req->bindValue(":cedente", $boleto->getCedente());
        $req->bindValue(":sacado", $boleto->getSacado());
        $req->bindValue(":nro", $boleto->getNro());
        $req->bindValue(":aceite", $boleto->getAceite());
        $req->bindValue(":carteira", $boleto->getCarteira());
        $req->bindValue(":valor", $boleto->getValor());
        $req->bindValue(":vencimento", $boleto->getVencimento());
        $req->bindValue(":instrucoes", $boleto->getInstrucoes());
        $req->bindValue(":codigodebarras", $boleto->getCodigoDeBarras());
        return $req->execute();
    }

    public static function edit(Boleto $boleto) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE boleto SET cedente=:cedente,sacado=:sacado,nro=:nro,aceite=:aceite,carteira=:carteira,valor=:valor,vencimento=:vencimento,instrucoes=:instrucoes,codigodebarras=:codigodebarras WHERE id=:id");
        $req->bindValue(":id", $boleto->getId());
        $req->bindValue(":cedente", $boleto->getCedente());
        $req->bindValue(":sacado", $boleto->getSacado());
        $req->bindValue(":nro", $boleto->getNro());
        $req->bindValue(":aceite", $boleto->getAceite());
        $req->bindValue(":carteira", $boleto->getCarteira());
        $req->bindValue(":valor", $boleto->getValor());
        $req->bindValue(":vencimento", $boleto->getVencimento());
        $req->bindValue(":instrucoes", $boleto->getInstrucoes());
        $req->bindValue(":codigodebarras", $boleto->getCodigoDeBarras());
        return $req->execute();
    }

    public static function popular($linha) {
        $boleto = new Boleto();

        $boleto->setId($linha['id']);
        $boleto->setCedente($linha['cedente']);
        $boleto->setSacado($linha['sacado']);
        $boleto->setNro($linha['nro']);
        $boleto->setAceite($linha['aceite']);
        $boleto->setCarteira($linha['carteira']);
        $boleto->setValor($linha['valor']);
        $boleto->setVencimento($linha['vencimento']);
        $boleto->setInstrucoes($linha['instrucoes']);
        $boleto->setCodigoDeBarras($linha['codigodebarras']);

        return $boleto;
    }


}
