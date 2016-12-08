<button  onclick="location.href='?controller=comprovante&action=add'" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    Novo
                </button><h2>Lista de Comprovantes</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Estudante</th>
            <th>Data</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Estudante</th>
            <th>Data</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($comprovantes as $comprovante) { ?>
            <tr>
                <td><?php echo $comprovante->getId();?> </td>
                <td><?php echo EstudanteDAO::find($comprovante->getFk_id_estudante())->getNome(); ?></td>
                <td><?php echo date("d/m/Y",strtotime($comprovante->getData())); ?></td>
                <td><span class="comprovante_status<?php echo $comprovante->getStatus();?>"><?php if($comprovante->getStatus()==1){ echo "Aprovado"; } elseif ($comprovante->getStatus() == 0)  {echo "Pendente";} else {echo "Recusado";} ?></span></td>
                <td><button type="button" onclick="location.href='?controller=comprovante&action=view&id=<?php echo base64_encode($comprovante->getId());?>';" class="btn btn-primary btn-xs">Ver detalhes</button>
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>
