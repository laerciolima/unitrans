<?php

require_once 'models/Ponto.php';

class PontoDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM ponto');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $ponto = new Ponto();

            $ponto->setId($linha['id']);
            $ponto->setEndereco($linha["endereco"]);
            $ponto->setQtdEstudantes($linha["qtdestudantes"]);

            $lista[] = $ponto;
        }

        return $lista;
    }

    public static function find($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $req = Db::getInstance()->prepare('SELECT * FROM ponto WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));

        return PontoDAO::popular($req->fetch());
        
    }

    public static function delete($id) {
        // we make sure $id is an integer

        $id = intval($id);

        $req = Db::getInstance()->prepare('DELETE FROM ponto WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);

        return $req->execute();
    }

    public static function add(Ponto $ponto) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("INSERT INTO ponto (endereco,qtdestudantes) VALUES (:endereco,:qtdestudantes)");
        $req->bindValue(":endereco", $ponto->getEndereco());
        $req->bindValue(":qtdestudantes", $ponto->getQtdEstudantes());
        return $req->execute();
    }

    public static function edit(Ponto $ponto) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE ponto SET endereco=:endereco,qtdestudantes=:qtdestudantes WHERE id=:id");
        $req->bindValue(":id", $ponto->getId());
        $req->bindValue(":endereco", $ponto->getEndereco());
        $req->bindValue(":qtdestudantes", $ponto->getQtdEstudantes());
        return $req->execute();
    }

    public static function popular($linha) {
        $ponto = new Ponto();

        $ponto->setId($linha['id']);
        $ponto->setEndereco($linha['endereco']);
        $ponto->setQtdEstudantes($linha['qtdestudantes']);

        return $ponto;
    }


}
