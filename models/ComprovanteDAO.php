<?php

@include_once 'models/Comprovante.php';

class ComprovanteDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM comprovante');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $comprovante = new Comprovante();

            $comprovante->setId($linha['id']);
            $comprovante->setFk_id_estudante($linha["fk_id_estudante"]);
            $comprovante->setData($linha["data"]);
            $comprovante->setImg($linha["img"]);
            $comprovante->setStatus($linha["status"]);

            $lista[] = $comprovante;
        }

        return $lista;
    }

    public static function find($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $req = Db::getInstance()->prepare('SELECT * FROM comprovante WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));

        return ComprovanteDAO::popular($req->fetch());

    }

    public static function delete($id) {
        // we make sure $id is an integer

        $id = intval($id);

        $req = Db::getInstance()->prepare('DELETE FROM comprovante WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);

        return $req->execute();
    }

    public static function add(Comprovante $comprovante) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("INSERT INTO comprovante (fk_id_estudante,data,img,status) VALUES (:fk_id_estudante,NOW(),:img,0)");
        $req->bindValue(":fk_id_estudante", $comprovante->getFk_id_estudante());
        $req->bindValue(":img", $comprovante->getImg());
        return $req->execute();
    }

    public static function edit(Comprovante $comprovante) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE comprovante SET fk_id_estudante=:fk_id_estudante,data=:data,img=:img,status=:status WHERE id=:id");
        $req->bindValue(":id", $comprovante->getId());
        $req->bindValue(":fk_id_estudante", $comprovante->getFk_id_estudante());
        $req->bindValue(":data", $comprovante->getData());
        $req->bindValue(":img", $comprovante->getImg());
        $req->bindValue(":status", $comprovante->getStatus());
        return $req->execute();
    }

    public static function popular($linha) {
        $comprovante = new Comprovante();

        $comprovante->setId($linha['id']);
        $comprovante->setFk_id_estudante($linha['fk_id_estudante']);
        $comprovante->setData($linha['data']);
        $comprovante->setImg($linha['img']);
        $comprovante->setStatus($linha['status']);

        return $comprovante;
    }


}
