<button  onclick="location.href='?controller=comprovante&action=add'" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    Novo
                </button><h2>Lista de Comprovantes</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fk id estudante</th>
            <th>Data</th>
            <th>Img</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Fk id estudante</th>
            <th>Data</th>
            <th>Img</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($comprovantes as $comprovante) { ?>
            <tr>
                <td><?php echo $comprovante->getId();?> </td>                <td><a href="?controller=comprovante&action=view&id=<?php echo $comprovante->getId();?>"><?php echo $comprovante->getFk_id_estudante(); ?></a></td>
                <td><?php echo $comprovante->getData(); ?></td>
                <td><?php echo $comprovante->getImg(); ?></td>
                <td><?php echo $comprovante->getStatus(); ?></td>
                <td><button type="button" onclick="location.href='?controller=comprovante&action=edit&id=<?php echo base64_encode($comprovante->getId());?>';" class="btn btn-default btn-xs">Editar</button>
                    <button type="button" onclick="javascript:remover('?controller=comprovante&action=delete&id=<?php echo base64_encode($comprovante->getId());?>');" class="btn btn-danger btn-xs">Remover</button>
                    
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>