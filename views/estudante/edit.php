
<h2>Editar Estudante</h2>




<form method="post" action="?controller=estudante&action=edit&id=<?php echo $_GET['id'];?> " class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="nome">Nome:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getNome(); ?>" name="nome" id="nome" placeholder="Digite o nome">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="cpf">Cpf:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getCpf(); ?>" name="cpf" id="cpf" placeholder="Digite o cpf">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="data_de_nascimento">Data_de_nascimento:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getData_de_nascimento(); ?>" name="data_de_nascimento" id="data_de_nascimento" placeholder="Digite o data_de_nascimento">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="telefone">Telefone:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getTelefone(); ?>" name="telefone" id="telefone" placeholder="Digite o telefone">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="rua">Rua:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getRua(); ?>" name="rua" id="rua" placeholder="Digite o rua">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="numero">Numero:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getNumero(); ?>" name="numero" id="numero" placeholder="Digite o numero">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="bairro">Bairro:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getBairro(); ?>" name="bairro" id="bairro" placeholder="Digite o bairro">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="cidade">Cidade:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getCidade(); ?>" name="cidade" id="cidade" placeholder="Digite o cidade">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="curso">Curso:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getCurso(); ?>" name="curso" id="curso" placeholder="Digite o curso">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="fk_id_universidade">fk_id_universidade:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getfk_id_universidade(); ?>" name="fk_id_universidade" id="fk_id_universidade" placeholder="Digite o fk_id_universidade">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="horario_de_ida">Horario_de_ida:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getHorario_de_ida(); ?>" name="horario_de_ida" id="horario_de_ida" placeholder="Digite o horario_de_ida">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="horario_de_volta">Horario_de_volta:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getHorario_de_volta(); ?>" name="horario_de_volta" id="horario_de_volta" placeholder="Digite o horario_de_volta">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="login">Login:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getLogin(); ?>" name="login" id="login" placeholder="Digite o login">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="senha">Senha:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $estudante->getSenha(); ?>" name="senha" id="senha" placeholder="Digite o senha">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>