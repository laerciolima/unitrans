<?php

require_once 'models/Universidade.php';

class UniversidadeDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM universidade');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $universidade = new Universidade();

            $universidade->setId($linha['id']);
            $universidade->setNome($linha["nome"]);
            $universidade->setCidade($linha["cidade"]);

            $lista[] = $universidade;
        }

        return $lista;
    }

    public static function find($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $req = Db::getInstance()->prepare('SELECT * FROM universidade WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));

        return UniversidadeDAO::popular($req->fetch());
        
    }

    public static function delete($id) {
        // we make sure $id is an integer

        $id = intval($id);

        $req = Db::getInstance()->prepare('DELETE FROM universidade WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);

        return $req->execute();
    }

    public static function add(Universidade $universidade) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("INSERT INTO universidade (nome,cidade) VALUES (:nome,:cidade)");
        $req->bindValue(":nome", $universidade->getNome());
        $req->bindValue(":cidade", $universidade->getCidade());
        return $req->execute();
    }

    public static function edit(Universidade $universidade) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE universidade SET nome=:nome,cidade=:cidade WHERE id=:id");
        $req->bindValue(":id", $universidade->getId());
        $req->bindValue(":nome", $universidade->getNome());
        $req->bindValue(":cidade", $universidade->getCidade());
        return $req->execute();
    }

    public static function popular($linha) {
        $universidade = new Universidade();

        $universidade->setId($linha['id']);
        $universidade->setNome($linha['nome']);
        $universidade->setCidade($linha['cidade']);

        return $universidade;
    }


}
