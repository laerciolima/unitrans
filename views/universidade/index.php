<h2>Lista de Universidades</h2>
<table id="example" class="display compact" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Ações</th>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($universidades as $universidade) { ?>
            <tr>
                <td><?php echo $universidade->getId();?></td>
                <td><a href="?controller=universidade&action=view&id=<?php echo $universidade->getId();?>"><?php echo $universidade->getNome(); ?></a></td>
                <td><?php echo $universidade->getCidade(); ?></td>
                <td><button type="button" onclick="location.href='?controller=universidade&action=edit&id=<?php echo base64_encode($universidade->getId());?>';" class="btn btn-default btn-xs">Editar</button>
                    <button type="button" onclick="javascript:remover('?controller=universidade&action=delete&id=<?php echo base64_encode($universidade->getId());?>');" class="btn btn-danger btn-xs">Remover</button>
                    
                </td>

            </tr>
        <?php } ?>

    </tbody>
</table>