<button  onclick="location.href='?controller=boleto&action=add'" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    Novo
                </button><h2>Lista de Boletos</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cedente</th>
            <th>Sacado</th>
            <th>Nro</th>
            <th>Aceite</th>
            <th>Carteira</th>
            <th>Valor</th>
            <th>Vencimento</th>
            <th>Instrucoes</th>
            <th>CodigoDeBarras</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Cedente</th>
            <th>Sacado</th>
            <th>Nro</th>
            <th>Aceite</th>
            <th>Carteira</th>
            <th>Valor</th>
            <th>Vencimento</th>
            <th>Instrucoes</th>
            <th>CodigoDeBarras</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($boletos as $boleto) { ?>
            <tr>
                <td><?php echo $boleto->getId();?> </td>                <td><a href="?controller=boleto&action=view&id=<?php echo $boleto->getId();?>"><?php echo $boleto->getCedente(); ?></a></td>
                <td><?php echo $boleto->getSacado(); ?></td>
                <td><?php echo $boleto->getNro(); ?></td>
                <td><?php echo $boleto->getAceite(); ?></td>
                <td><?php echo $boleto->getCarteira(); ?></td>
                <td><?php echo $boleto->getValor(); ?></td>
                <td><?php echo $boleto->getVencimento(); ?></td>
                <td><?php echo $boleto->getInstrucoes(); ?></td>
                <td><?php echo $boleto->getCodigoDeBarras(); ?></td>
                <td><button type="button" onclick="location.href='?controller=boleto&action=edit&id=<?php echo base64_encode($boleto->getId());?>';" class="btn btn-default btn-xs">Editar</button>
                    <button type="button" onclick="javascript:remover('?controller=boleto&action=delete&id=<?php echo base64_encode($boleto->getId());?>');" class="btn btn-danger btn-xs">Remover</button>
                    
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>