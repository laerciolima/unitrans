<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/BoletoController.class.php");


       $boleto = $boletoController->listById($_GET['id']);
       
       
    ?>
<div class="actions">
    <h2>Editar</h2>

        <ul>
            <li><a href="index.php">Listar boleto</a></li>
            <li><a href="edit.php?id=<?php echo $boleto->getId()?>">Editar boleto</a></li>
        </ul>

    </div>

<table cellspacing="1" cellpadding="0" class="view">
    
    <tr align="left">
        <th>Id</th>
        <td><?php echo $boleto->getId(); ?></td>
    </tr>
    <tr align="left">
        <th>Id</th>
        <td><?php echo $boleto->getId()?></td>
    </tr>
    <tr align="left">
        <th>Nome_Banco</th>
        <td><?php echo $boleto->getNome_Banco()?></td>
    </tr>
    <tr align="left">
        <th>Cedente</th>
        <td><?php echo $boleto->getCedente()?></td>
    </tr>
    <tr align="left">
        <th>Sacado</th>
        <td><?php echo $boleto->getSacado()?></td>
    </tr>
    <tr align="left">
        <th>Nro</th>
        <td><?php echo $boleto->getNro()?></td>
    </tr>
    <tr align="left">
        <th>Aceite</th>
        <td><?php echo $boleto->getAceite()?></td>
    </tr>
    <tr align="left">
        <th>Carteira</th>
        <td><?php echo $boleto->getCarteira()?></td>
    </tr>
    <tr align="left">
        <th>Valor</th>
        <td><?php echo $boleto->getValor()?></td>
    </tr>
    <tr align="left">
        <th>Vencimento</th>
        <td><?php echo $boleto->getVencimento()?></td>
    </tr>
    <tr align="left">
        <th>Instrucoes</th>
        <td><?php echo $boleto->getInstrucoes()?></td>
    </tr>
    <tr align="left">
        <th>Cod_Barras</th>
        <td><?php echo $boleto->getCod_Barras()?></td>
    </tr>
</table>

<?php
require_once("../../views/layout/rodape.php");
?>