<?php

require_once 'models/Itinerario.php';

class ItinerarioDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM itinerario');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $itinerario = new Itinerario();

            $itinerario->setId($linha['id']);
            $itinerario->setEndereco($linha["endereco"]);
            $itinerario->setPlaca($linha["placa"]);
            $itinerario->setCheckpoint($linha["checkpoint"]);

            $lista[] = $itinerario;
        }

        return $lista;
    }

    public static function find($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $req = Db::getInstance()->prepare('SELECT * FROM itinerario WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));

        return ItinerarioDAO::popular($req->fetch());
        
    }

    public static function delete($id) {
        // we make sure $id is an integer

        $id = intval($id);

        $req = Db::getInstance()->prepare('DELETE FROM itinerario WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);

        return $req->execute();
    }

    public static function add(Itinerario $itinerario) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("INSERT INTO itinerario (endereco,placa,checkpoint) VALUES (:endereco,:placa,:checkpoint)");
        $req->bindValue(":endereco", $itinerario->getEndereco());
        $req->bindValue(":placa", $itinerario->getPlaca());
        $req->bindValue(":checkpoint", $itinerario->getCheckpoint());
        return $req->execute();
    }

    public static function edit(Itinerario $itinerario) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE itinerario SET endereco=:endereco,placa=:placa,checkpoint=:checkpoint WHERE id=:id");
        $req->bindValue(":id", $itinerario->getId());
        $req->bindValue(":endereco", $itinerario->getEndereco());
        $req->bindValue(":placa", $itinerario->getPlaca());
        $req->bindValue(":checkpoint", $itinerario->getCheckpoint());
        return $req->execute();
    }

    public static function popular($linha) {
        $itinerario = new Itinerario();

        $itinerario->setId($linha['id']);
        $itinerario->setEndereco($linha['endereco']);
        $itinerario->setPlaca($linha['placa']);
        $itinerario->setCheckpoint($linha['checkpoint']);

        return $itinerario;
    }


}
