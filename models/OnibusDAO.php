<?php

require_once 'models/Onibus.php';

class OnibusDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM onibus');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $onibus = new Onibus();

            $onibus->setId($linha['id']);
            $onibus->setPlaca($linha["placa"]);
            $onibus->setMarca($linha["marca"]);
            $onibus->setAno($linha["ano"]);
            $onibus->setCor($linha["cor"]);
            $onibus->setHorario($linha["horario"]);

            $lista[] = $onibus;
        }

        return $lista;
    }

    public static function find($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $req = Db::getInstance()->prepare('SELECT * FROM onibus WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));

        return OnibusDAO::popular($req->fetch());
        
    }

    public static function delete($id) {
        // we make sure $id is an integer

        $id = intval($id);

        $req = Db::getInstance()->prepare('DELETE FROM onibus WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);

        return $req->execute();
    }

    public static function add(Onibus $onibus) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("INSERT INTO onibus (placa,marca,ano,cor,horario) VALUES (:placa,:marca,:ano,:cor,:horario)");
        $req->bindValue(":placa", $onibus->getPlaca());
        $req->bindValue(":marca", $onibus->getMarca());
        $req->bindValue(":ano", $onibus->getAno());
        $req->bindValue(":cor", $onibus->getCor());
        $req->bindValue(":horario", $onibus->getHorario());
        return $req->execute();
    }

    public static function edit(Onibus $onibus) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE onibus SET placa=:placa,marca=:marca,ano=:ano,cor=:cor,horario=:horario WHERE id=:id");
        $req->bindValue(":id", $onibus->getId());
        $req->bindValue(":placa", $onibus->getPlaca());
        $req->bindValue(":marca", $onibus->getMarca());
        $req->bindValue(":ano", $onibus->getAno());
        $req->bindValue(":cor", $onibus->getCor());
        $req->bindValue(":horario", $onibus->getHorario());
        return $req->execute();
    }

    public static function popular($linha) {
        $onibus = new Onibus();

        $onibus->setId($linha['id']);
        $onibus->setPlaca($linha['placa']);
        $onibus->setMarca($linha['marca']);
        $onibus->setAno($linha['ano']);
        $onibus->setCor($linha['cor']);
        $onibus->setHorario($linha['horario']);

        return $onibus;
    }


}
