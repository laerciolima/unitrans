<button  onclick="location.href='?controller=onibus&action=add'" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    Novo
                </button><h2>Lista de Onibus</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Horario</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Horario</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($onibus as $onibus) { ?>
            <tr>
                <td><?php echo $onibus->getId();?> </td>                <td><a href="?controller=onibus&action=view&id=<?php echo $onibus->getId();?>"><?php echo $onibus->getPlaca(); ?></a></td>
                <td><?php echo $onibus->getMarca(); ?></td>
                <td><?php echo $onibus->getAno(); ?></td>
                <td><?php echo $onibus->getCor(); ?></td>
                <td><?php echo $onibus->getHorario(); ?></td>
                <td><button type="button" onclick="location.href='?controller=onibus&action=edit&id=<?php echo base64_encode($onibus->getId());?>';" class="btn btn-default btn-xs">Editar</button>
                    <button type="button" onclick="javascript:remover('?controller=onibus&action=delete&id=<?php echo base64_encode($onibus->getId());?>');" class="btn btn-danger btn-xs">Remover</button>
                    
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>