<button  onclick="location.href='?controller=ponto&action=add'" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    Novo
                </button><h2>Lista de Pontos</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Endereco</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Endereco</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($pontos as $ponto) { ?>
            <tr>
                <td><?php echo $ponto->getId();?> </td>                <td><a href="?controller=ponto&action=view&id=<?php echo $ponto->getId();?>"><?php echo $ponto->getEndereco(); ?></a></td>
                <td><?php echo $ponto->getBairro(); ?></td>
                <td><?php echo $ponto->getCidade(); ?></td>
                <td><button type="button" onclick="location.href='?controller=ponto&action=edit&id=<?php echo base64_encode($ponto->getId());?>';" class="btn btn-default btn-xs">Editar</button>
                    <button type="button" onclick="javascript:remover('?controller=ponto&action=delete&id=<?php echo base64_encode($ponto->getId());?>');" class="btn btn-danger btn-xs">Remover</button>
                    
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>