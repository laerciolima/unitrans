<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/OnibusController.class.php");


$onibus = $onibusController->listAll();
?>

<h2>Lista de Onibus</h2>

<div class="actions">
    <ul>
        <li><a href="add.php">Novo Onibus</a></li>
        <li></li>
    </ul>
</div>

<table cellspadding="0" cellspacing="0" border="0" class="display" id="pesquisar_tabelas">
    <thead>
        <tr>
        <th>Id </th>            <th>Id</th>
            <th>Placa</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Marca</th>
            <th>Horario</th>
            <th>Iti_End</th>
            <th>Ações</th>        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($onibus); $i++) { ?>
            <tr>
                <td><?php echo $onibus[$i]->getId(); ?></td>
                <td><a href="view.php?id=<?php echo $onibus[$i]->getId(); ?>"><?php echo $onibus[$i]->getId(); ?></a></td>
                <td><?php echo $onibus[$i]->getPlaca(); ?></td>
                <td><?php echo $onibus[$i]->getAno(); ?></td>
                <td><?php echo $onibus[$i]->getCor(); ?></td>
                <td><?php echo $onibus[$i]->getMarca(); ?></td>
                <td><?php echo $onibus[$i]->getHorario(); ?></td>
                <td><?php echo $onibus[$i]->getIti_End(); ?></td>
                <td><a href="edit.php?id=<?php echo $onibus[$i]->getId(); ?>">Editar</a>
                    <a href="../../controllers/OnibusController.class.php?metodo=delete&id=<?php echo $onibus[$i]->getId(); ?>">Excluir</a></td>
<?php } ?>
        </tr>
    </tbody>
    <tfoot>
        <tr>
        <th>Id </th>            <th>Id</th>
            <th>Placa</th>
            <th>Ano</th>
            <th>Cor</th>
            <th>Marca</th>
            <th>Horario</th>
            <th>Iti_End</th>
            <th>Ações</th>        </tr>
    </tfoot>
</table>
<?php
require_once("../../views/layout/rodape.php");
?>
    