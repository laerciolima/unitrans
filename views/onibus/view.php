<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/OnibusController.class.php");


       $onibus = $onibusController->listById($_GET['id']);
       
       
    ?>
<div class="actions">
    <h2>Editar</h2>

        <ul>
            <li><a href="index.php">Listar onibus</a></li>
            <li><a href="edit.php?id=<?php echo $onibus->getId()?>">Editar onibus</a></li>
        </ul>

    </div>

<table cellspacing="1" cellpadding="0" class="view">
    
    <tr align="left">
        <th>Id</th>
        <td><?php echo $onibus->getId(); ?></td>
    </tr>
    <tr align="left">
        <th>Id</th>
        <td><?php echo $onibus->getId()?></td>
    </tr>
    <tr align="left">
        <th>Placa</th>
        <td><?php echo $onibus->getPlaca()?></td>
    </tr>
    <tr align="left">
        <th>Ano</th>
        <td><?php echo $onibus->getAno()?></td>
    </tr>
    <tr align="left">
        <th>Cor</th>
        <td><?php echo $onibus->getCor()?></td>
    </tr>
    <tr align="left">
        <th>Marca</th>
        <td><?php echo $onibus->getMarca()?></td>
    </tr>
    <tr align="left">
        <th>Horario</th>
        <td><?php echo $onibus->getHorario()?></td>
    </tr>
    <tr align="left">
        <th>Iti_End</th>
        <td><?php echo $onibus->getIti_End()?></td>
    </tr>
</table>

<?php
require_once("../../views/layout/rodape.php");
?>