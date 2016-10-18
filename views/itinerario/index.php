<button  onclick="location.href='?controller=itinerario&action=add'" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    Novo
                </button><h2>Lista de Itinerarios</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Endereco</th>
            <th>Placa</th>
            <th>Checkpoint</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Endereco</th>
            <th>Placa</th>
            <th>Checkpoint</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($itinerarios as $itinerario) { ?>
            <tr>
                <td><?php echo $itinerario->getId();?> </td>                <td><a href="?controller=itinerario&action=view&id=<?php echo $itinerario->getId();?>"><?php echo $itinerario->getEndereco(); ?></a></td>
                <td><?php echo $itinerario->getPlaca(); ?></td>
                <td><?php echo $itinerario->getCheckpoint(); ?></td>
                <td><button type="button" onclick="location.href='?controller=itinerario&action=edit&id=<?php echo base64_encode($itinerario->getId());?>';" class="btn btn-default btn-xs">Editar</button>
                    <button type="button" onclick="javascript:remover('?controller=itinerario&action=delete&id=<?php echo base64_encode($itinerario->getId());?>');" class="btn btn-danger btn-xs">Remover</button>
                    
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>