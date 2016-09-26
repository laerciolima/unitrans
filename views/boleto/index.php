<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/BoletoController.class.php");


$boleto = $boletoController->listAll();
?>

<h2>Lista de Boletos</h2>

<div class="actions">
    <ul>
        <li><a href="add.php">Novo Boleto</a></li>
        <li></li>
    </ul>
</div>

<table cellspadding="0" cellspacing="0" border="0" class="display" id="pesquisar_tabelas">
    <thead>
        <tr>
        <th>Id </th>            <th>Id</th>
            <th>Nome_Banco</th>
            <th>Cedente</th>
            <th>Sacado</th>
            <th>Nro</th>
            <th>Aceite</th>
            <th>Carteira</th>
            <th>Valor</th>
            <th>Vencimento</th>
            <th>Instrucoes</th>
            <th>Cod_Barras</th>
            <th>Ações</th>        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($boleto); $i++) { ?>
            <tr>
                <td><?php echo $boleto[$i]->getId(); ?></td>
                <td><a href="view.php?id=<?php echo $boleto[$i]->getId(); ?>"><?php echo $boleto[$i]->getId(); ?></a></td>
                <td><?php echo $boleto[$i]->getNome_Banco(); ?></td>
                <td><?php echo $boleto[$i]->getCedente(); ?></td>
                <td><?php echo $boleto[$i]->getSacado(); ?></td>
                <td><?php echo $boleto[$i]->getNro(); ?></td>
                <td><?php echo $boleto[$i]->getAceite(); ?></td>
                <td><?php echo $boleto[$i]->getCarteira(); ?></td>
                <td><?php echo $boleto[$i]->getValor(); ?></td>
                <td><?php echo $boleto[$i]->getVencimento(); ?></td>
                <td><?php echo $boleto[$i]->getInstrucoes(); ?></td>
                <td><?php echo $boleto[$i]->getCod_Barras(); ?></td>
                <td><a href="edit.php?id=<?php echo $boleto[$i]->getId(); ?>">Editar</a>
                    <a href="../../controllers/BoletoController.class.php?metodo=delete&id=<?php echo $boleto[$i]->getId(); ?>">Excluir</a></td>
<?php } ?>
        </tr>
    </tbody>
    <tfoot>
        <tr>
        <th>Id </th>            <th>Id</th>
            <th>Nome_Banco</th>
            <th>Cedente</th>
            <th>Sacado</th>
            <th>Nro</th>
            <th>Aceite</th>
            <th>Carteira</th>
            <th>Valor</th>
            <th>Vencimento</th>
            <th>Instrucoes</th>
            <th>Cod_Barras</th>
            <th>Ações</th>        </tr>
    </tfoot>
</table>
<?php
require_once("../../views/layout/rodape.php");
?>
    