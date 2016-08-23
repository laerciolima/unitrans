
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Estudante: <?php echo $estudante->getNome();?></h2>


<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $estudante->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Nome</th>
        <td><?php echo $estudante->getNome()?></td>
    </tr>
    <tr align="left">
        <th>Cpf</th>
        <td><?php echo $estudante->getCpf()?></td>
    </tr>
    <tr align="left">
        <th>Data de nascimento</th>
        <td><?php echo $estudante->getData_de_nascimento()?></td>
    </tr>
    <tr align="left">
        <th>Telefone</th>
        <td><?php echo $estudante->getTelefone()?></td>
    </tr>
    <tr align="left">
        <th>Rua</th>
        <td><?php echo $estudante->getRua()?></td>
    </tr>
    <tr align="left">
        <th>Numero</th>
        <td><?php echo $estudante->getNumero()?></td>
    </tr>
    <tr align="left">
        <th>Bairro</th>
        <td><?php echo $estudante->getBairro()?></td>
    </tr>
    <tr align="left">
        <th>Cidade</th>
        <td><?php echo $estudante->getCidade()?></td>
    </tr>
    <tr align="left">
        <th>Curso</th>
        <td><?php echo $estudante->getCurso()?></td>
    </tr>
    <tr align="left">
        <th>fk id univerisade</th>
        <td><?php echo $estudante->getfk_id_univerisade()?></td>
    </tr>
    <tr align="left">
        <th>Horario de ida</th>
        <td><?php echo $estudante->getHorario_de_ida()?></td>
    </tr>
    <tr align="left">
        <th> Horario de volta</th>
        <td><?php echo $estudante->getHorario_de_volta()?></td>
    </tr>
    <tr align="left">
        <th>Login</th>
        <td><?php echo $estudante->getLogin()?></td>
    </tr>
    <tr align="left">
        <th>Senha</th>
        <td><?php echo $estudante->getSenha()?></td>
    </tr>
    </tbody>
  </table>
