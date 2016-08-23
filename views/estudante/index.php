<button  onclick="location.href='?controller=estudante&action=add'" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    Novo
                </button><h2>Lista de Estudantes</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Data de nascimento</th>
            <th>Telefone</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Curso</th>
            <th>fk id univerisade</th>
            <th>Horario de ida</th>
            <th> Horario de volta</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Data de nascimento</th>
            <th>Telefone</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Curso</th>
            <th>fk id univerisade</th>
            <th>Horario de ida</th>
            <th> Horario de volta</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($estudantes as $estudante) { ?>
            <tr>
                <td><a href="?controller=estudante&action=view&id=<?php echo $estudante->getId();?>"><?php echo $estudante->getId(); ?></a></td>
                <td><?php echo $estudante->getCpf(); ?></td>
                <td><?php echo $estudante->getData_de_nascimento(); ?></td>
                <td><?php echo $estudante->getTelefone(); ?></td>
                <td><?php echo $estudante->getRua(); ?></td>
                <td><?php echo $estudante->getNumero(); ?></td>
                <td><?php echo $estudante->getBairro(); ?></td>
                <td><?php echo $estudante->getCidade(); ?></td>
                <td><?php echo $estudante->getCurso(); ?></td>
                <td><?php echo $estudante->getfk_id_univerisade(); ?></td>
                <td><?php echo $estudante->getHorario_de_ida(); ?></td>
                <td><?php echo $estudante->getHorario_de_volta(); ?></td>
                <td><?php echo $estudante->getLogin(); ?></td>
                <td><?php echo $estudante->getSenha(); ?></td>
                <td><button type="button" onclick="location.href='?controller=estudante&action=edit&id=<?php echo base64_encode($estudante->getId());?>';" class="btn btn-default btn-xs">Editar</button>
                    <button type="button" onclick="javascript:remover('?controller=estudante&action=delete&id=<?php echo base64_encode($estudante->getId());?>');" class="btn btn-danger btn-xs">Remover</button>
                    
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>