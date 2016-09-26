<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/ItinerarioController.class.php");


$itinerario = $itinerarioController->listAll();
?>

<h2>Lista de Itinerarios</h2>

<div class="actions">
    <ul>
        <li><a href="add.php">Novo Itinerario</a></li>
        <li></li>
    </ul>
</div>

<table cellspadding="0" cellspacing="0" border="0" class="display" id="pesquisar_tabelas">
    <thead>
        <tr>
        <th>Id </th>            <th>Id</th>
            <th>Endereco</th>
            <th>Motorista</th>
            <th>Onibus</th>
            <th>Checkpoint</th>
            <th>Motorista_Itinerario</th>
            <th>Ações</th>        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($itinerario); $i++) { ?>
            <tr>
                <td><?php echo $itinerario[$i]->getId(); ?></td>
                <td><a href="view.php?id=<?php echo $itinerario[$i]->getId(); ?>"><?php echo $itinerario[$i]->getId(); ?></a></td>
                <td><?php echo $itinerario[$i]->getEndereco(); ?></td>
                <td><?php echo $itinerario[$i]->getMotorista(); ?></td>
                <td><?php echo $itinerario[$i]->getOnibus(); ?></td>
                <td><?php echo $itinerario[$i]->getCheckpoint(); ?></td>
                <td><?php echo $itinerario[$i]->getMotorista_Itinerario(); ?></td>
                <td><a href="edit.php?id=<?php echo $itinerario[$i]->getId(); ?>">Editar</a>
                    <a href="../../controllers/ItinerarioController.class.php?metodo=delete&id=<?php echo $itinerario[$i]->getId(); ?>">Excluir</a></td>
<?php } ?>
        </tr>
    </tbody>
    <tfoot>
        <tr>
        <th>Id </th>            <th>Id</th>
            <th>Endereco</th>
            <th>Motorista</th>
            <th>Onibus</th>
            <th>Checkpoint</th>
            <th>Motorista_Itinerario</th>
            <th>Ações</th>        </tr>
    </tfoot>
</table>
<?php
require_once("../../views/layout/rodape.php");
?>
    