<?php

@include_once 'models/Ponto.php';

class PontoDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM ponto');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $ponto = new Ponto();

            $ponto->setId($linha['id']);
            $ponto->setEndereco($linha["endereco"]);
            $ponto->setBairro($linha["bairro"]);
            $ponto->setCidade($linha["cidade"]);
            $ponto->setLat($linha["latitude"]);
            $ponto->setLong($linha["longitude"]);

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

        $req = Db::getInstance()->prepare("INSERT INTO ponto (endereco,bairro,cidade, latitude, longitude) VALUES (:endereco,:bairro,:cidade, :lat, :long)");
        $req->bindValue(":endereco", $ponto->getEndereco());
        $req->bindValue(":bairro", $ponto->getBairro());
        $req->bindValue(":cidade", $ponto->getCidade());
        $req->bindValue(":lat", $ponto->getLat());
        $req->bindValue(":long", $ponto->getLong());

        return $req->execute();
    }

    public static function edit(Ponto $ponto) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE ponto SET endereco=:endereco,bairro=:bairro,cidade=:cidade WHERE id=:id");
        $req->bindValue(":id", $ponto->getId());
        $req->bindValue(":endereco", $ponto->getEndereco());
        $req->bindValue(":bairro", $ponto->getBairro());
        $req->bindValue(":cidade", $ponto->getCidade());
        return $req->execute();
    }

    public static function popular($linha) {
        $ponto = new Ponto();

        $ponto->setId($linha['id']);
        $ponto->setEndereco($linha['endereco']);
        $ponto->setBairro($linha['bairro']);
        $ponto->setCidade($linha['cidade']);
        $ponto->setLat($linha["latitude"]);
        $ponto->setLong($linha["longitude"]);

        return $ponto;
    }


}
