<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/ItinerarioController.class.php");


       $itinerario = $itinerarioController->listById($_GET['id']);
       
       
    ?>
<div class="actions">
    <h2>Editar</h2>

        <ul>
            <li><a href="index.php">Listar itinerario</a></li>
            <li><a href="edit.php?id=<?php echo $itinerario->getId()?>">Editar itinerario</a></li>
        </ul>

    </div>

<table cellspacing="1" cellpadding="0" class="view">
    
    <tr align="left">
        <th>Id</th>
        <td><?php echo $itinerario->getId(); ?></td>
    </tr>
    <tr align="left">
        <th>Id</th>
        <td><?php echo $itinerario->getId()?></td>
    </tr>
    <tr align="left">
        <th>Endereco</th>
        <td><?php echo $itinerario->getEndereco()?></td>
    </tr>
    <tr align="left">
        <th>Motorista</th>
        <td><?php echo $itinerario->getMotorista()?></td>
    </tr>
    <tr align="left">
        <th>Onibus</th>
        <td><?php echo $itinerario->getOnibus()?></td>
    </tr>
    <tr align="left">
        <th>Checkpoint</th>
        <td><?php echo $itinerario->getCheckpoint()?></td>
    </tr>
    <tr align="left">
        <th>Motorista_Itinerario</th>
        <td><?php echo $itinerario->getMotorista_Itinerario()?></td>
    </tr>
</table>

<?php
require_once("../../views/layout/rodape.php");
?>