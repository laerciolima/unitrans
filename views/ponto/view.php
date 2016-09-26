<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/PontoController.class.php");


       $ponto = $pontoController->listById($_GET['id']);
       
       
    ?>
<div class="actions">
    <h2>Editar</h2>

        <ul>
            <li><a href="index.php">Listar ponto</a></li>
            <li><a href="edit.php?id=<?php echo $ponto->getId()?>">Editar ponto</a></li>
        </ul>

    </div>

<table cellspacing="1" cellpadding="0" class="view">
    
    <tr align="left">
        <th>Id</th>
        <td><?php echo $ponto->getId(); ?></td>
    </tr>
    <tr align="left">
        <th>Id</th>
        <td><?php echo $ponto->getId()?></td>
    </tr>
    <tr align="left">
        <th>Nome_Ponto</th>
        <td><?php echo $ponto->getNome_Ponto()?></td>
    </tr>
    <tr align="left">
        <th>Endereco_Ponto</th>
        <td><?php echo $ponto->getEndereco_Ponto()?></td>
    </tr>
    <tr align="left">
        <th>Qtd_Estudantes</th>
        <td><?php echo $ponto->getQtd_Estudantes()?></td>
    </tr>
</table>

<?php
require_once("../../views/layout/rodape.php");
?>