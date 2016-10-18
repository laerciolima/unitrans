<?php

require_once 'models/Motorista.php';

class MotoristaDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM motorista');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $motorista = new Motorista();

            $motorista->setId($linha['id']);
            $motorista->setIdonibus($linha["idonibus"]);
            $motorista->setIditinerario($linha["iditinerario"]);
            $motorista->setNome($linha["nome"]);

            $lista[] = $motorista;
        }

        return $lista;
    }

    public static function find($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $req = Db::getInstance()->prepare('SELECT * FROM motorista WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));

        return MotoristaDAO::popular($req->fetch());
        
    }

    public static function delete($id) {
        // we make sure $id is an integer

        $id = intval($id);

        $req = Db::getInstance()->prepare('DELETE FROM motorista WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);

        return $req->execute();
    }

    public static function add(Motorista $motorista) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("INSERT INTO motorista (idonibus,iditinerario,nome) VALUES (:idonibus,:iditinerario,:nome)");
        $req->bindValue(":idonibus", $motorista->getIdonibus());
        $req->bindValue(":iditinerario", $motorista->getIditinerario());
        $req->bindValue(":nome", $motorista->getNome());
        return $req->execute();
    }

    public static function edit(Motorista $motorista) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE motorista SET idonibus=:idonibus,iditinerario=:iditinerario,nome=:nome WHERE id=:id");
        $req->bindValue(":id", $motorista->getId());
        $req->bindValue(":idonibus", $motorista->getIdonibus());
        $req->bindValue(":iditinerario", $motorista->getIditinerario());
        $req->bindValue(":nome", $motorista->getNome());
        return $req->execute();
    }

    public static function popular($linha) {
        $motorista = new Motorista();

        $motorista->setId($linha['id']);
        $motorista->setIdonibus($linha['idonibus']);
        $motorista->setIditinerario($linha['iditinerario']);
        $motorista->setNome($linha['nome']);

        return $motorista;
    }


}
