<?php

@include_once 'models/Estudante.php';

class EstudanteDAO {

    public static function all() {
        $lista = [];

        $req = Db::getInstance()->query('SELECT * FROM estudante');

        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $linha) {
            $estudante = new Estudante();

            $estudante->setId($linha['id']);
            $estudante->setNome($linha["nome"]);
            $estudante->setCpf($linha["cpf"]);
            $estudante->setData_de_nascimento($linha["data_de_nascimento"]);
            $estudante->setTelefone($linha["telefone"]);
            $estudante->setRua($linha["rua"]);
            $estudante->setNumero($linha["numero"]);
            $estudante->setBairro($linha["bairro"]);
            $estudante->setCidade($linha["cidade"]);
            $estudante->setCurso($linha["curso"]);
            $estudante->setfk_id_universidade($linha["fk_id_universidade"]);
            $estudante->setHorario_de_ida($linha["horario_de_ida"]);
            $estudante->setHorario_de_volta($linha["horario_de_volta"]);
            $estudante->setLogin($linha["login"]);
            $estudante->setSenha($linha["senha"]);

            $lista[] = $estudante;
        }

        return $lista;
    }

    public static function find($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $req = Db::getInstance()->prepare('SELECT * FROM estudante WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));

        return EstudanteDAO::popular($req->fetch());

    }
    public static function findWithStatus($id) {
        // we make sure $id is an integer

        $id = intval($id);
        $mes = date("m");
        $req = Db::getInstance()->prepare('SELECT e.nome as nome_aluno, e.data_de_nascimento, e.horario_de_ida, e.horario_de_volta,  u.nome as universidade, e.foto, c.status FROM comprovante c INNER JOIN estudante e ON e.id =  c.fk_id_estudante INNER JOIN universidade u ON u.id = e.fk_id_universidade WHERE month(c.data) = :mes_atual and c.status = 1 AND e.id = :id;');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);
        $req->bindValue(":mes_atual", $mes);


        $req->execute();

        if($req->rowCount() == 0){
            return null;
        }else{
            return $req->fetch();
        }


    }

    public static function delete($id) {
        // we make sure $id is an integer

        $id = intval($id);

        $req = Db::getInstance()->prepare('DELETE FROM estudante WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->bindValue(":id", $id);

        return $req->execute();
    }

    public static function add(Estudante $estudante) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("INSERT INTO estudante (nome,cpf,data_de_nascimento,telefone,rua,numero,bairro,cidade,curso,fk_id_universidade,horario_de_ida,horario_de_volta,login,senha, foto) VALUES (:nome,:cpf,:data_de_nascimento,:telefone,:rua,:numero,:bairro,:cidade,:curso,:fk_id_universidade,:horario_de_ida,:horario_de_volta,:login,:senha ,:foto)");
        $req->bindValue(":nome", $estudante->getNome());
        $req->bindValue(":cpf", $estudante->getCpf());
        $req->bindValue(":data_de_nascimento", $estudante->getData_de_nascimento());
        $req->bindValue(":telefone", $estudante->getTelefone());
        $req->bindValue(":rua", $estudante->getRua());
        $req->bindValue(":numero", $estudante->getNumero());
        $req->bindValue(":bairro", $estudante->getBairro());
        $req->bindValue(":cidade", $estudante->getCidade());
        $req->bindValue(":curso", $estudante->getCurso());
        $req->bindValue(":fk_id_universidade", $estudante->getfk_id_universidade());
        $req->bindValue(":horario_de_ida", $estudante->getHorario_de_ida());
        $req->bindValue(":horario_de_volta", $estudante->getHorario_de_volta());
        $req->bindValue(":login", $estudante->getLogin());
        $req->bindValue(":senha", $estudante->getSenha());
        $req->bindValue(":foto", $estudante->getFoto());
        return $req->execute();
    }

    public static function edit(Estudante $estudante) {
        // we make sure $id is an integer

        $req = Db::getInstance()->prepare("UPDATE estudante SET nome=:nome,cpf=:cpf,data_de_nascimento=:data_de_nascimento,telefone=:telefone,rua=:rua,numero=:numero,bairro=:bairro,cidade=:cidade,curso=:curso,fk_id_universidade=:fk_id_universidade,horario_de_ida=:horario_de_ida,horario_de_volta=:horario_de_volta,login=:login,senha=:senha WHERE id=:id");
        $req->bindValue(":id", $estudante->getId());
        $req->bindValue(":nome", $estudante->getNome());
        $req->bindValue(":cpf", $estudante->getCpf());
        $req->bindValue(":data_de_nascimento", $estudante->getData_de_nascimento());
        $req->bindValue(":telefone", $estudante->getTelefone());
        $req->bindValue(":rua", $estudante->getRua());
        $req->bindValue(":numero", $estudante->getNumero());
        $req->bindValue(":bairro", $estudante->getBairro());
        $req->bindValue(":cidade", $estudante->getCidade());
        $req->bindValue(":curso", $estudante->getCurso());
        $req->bindValue(":fk_id_universidade", $estudante->getfk_id_universidade());
        $req->bindValue(":horario_de_ida", $estudante->getHorario_de_ida());
        $req->bindValue(":horario_de_volta", $estudante->getHorario_de_volta());
        $req->bindValue(":login", $estudante->getLogin());
        $req->bindValue(":senha", $estudante->getSenha());
        return $req->execute();
    }

    public static function popular($linha) {
        $estudante = new Estudante();

        $estudante->setId($linha['id']);
        $estudante->setNome($linha['nome']);
        $estudante->setCpf($linha['cpf']);
        $estudante->setData_de_nascimento($linha['data_de_nascimento']);
        $estudante->setTelefone($linha['telefone']);
        $estudante->setRua($linha['rua']);
        $estudante->setNumero($linha['numero']);
        $estudante->setBairro($linha['bairro']);
        $estudante->setCidade($linha['cidade']);
        $estudante->setCurso($linha['curso']);
        $estudante->setfk_id_universidade($linha['fk_id_universidade']);
        $estudante->setHorario_de_ida($linha['horario_de_ida']);
        $estudante->setHorario_de_volta($linha['horario_de_volta']);
        $estudante->setLogin($linha['login']);
        $estudante->setFoto($linha['foto']);

        return $estudante;
    }


}
