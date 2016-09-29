<button  onclick="location.href='?controller=motorista&action=add'" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    Novo
                </button><h2>Lista de Motoristas</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Idonibus</th>
            <th>Iditinerario</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Idonibus</th>
            <th>Iditinerario</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($motoristas as $motorista) { ?>
            <tr>
                <td><?php echo $motorista->getId();?> </td>                <td><a href="?controller=motorista&action=view&id=<?php echo $motorista->getId();?>"><?php echo $motorista->getIdonibus(); ?></a></td>
                <td><?php echo $motorista->getIditinerario(); ?></td>
                <td><?php echo $motorista->getNome(); ?></td>
                <td><button type="button" onclick="location.href='?controller=motorista&action=edit&id=<?php echo base64_encode($motorista->getId());?>';" class="btn btn-default btn-xs">Editar</button>
                    <button type="button" onclick="javascript:remover('?controller=motorista&action=delete&id=<?php echo base64_encode($motorista->getId());?>');" class="btn btn-danger btn-xs">Remover</button>
                    
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>