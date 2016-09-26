<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/PontoController.class.php");


$ponto = $pontoController->listAll();
?>

<h2>Lista de Pontos</h2>

<div class="actions">
    <ul>
        <li><a href="add.php">Novo Ponto</a></li>
        <li></li>
    </ul>
</div>

<table cellspadding="0" cellspacing="0" border="0" class="display" id="pesquisar_tabelas">
    <thead>
        <tr>
        <th>Id </th>            <th>Id</th>
            <th>Nome_Ponto</th>
            <th>Endereco_Ponto</th>
            <th>Qtd_Estudantes</th>
            <th>Ações</th>        </tr>
    </thead>
    <tbody>
        <?php for ($i = 0; $i < count($ponto); $i++) { ?>
            <tr>
                <td><?php echo $ponto[$i]->getId(); ?></td>
                <td><a href="view.php?id=<?php echo $ponto[$i]->getId(); ?>"><?php echo $ponto[$i]->getId(); ?></a></td>
                <td><?php echo $ponto[$i]->getNome_Ponto(); ?></td>
                <td><?php echo $ponto[$i]->getEndereco_Ponto(); ?></td>
                <td><?php echo $ponto[$i]->getQtd_Estudantes(); ?></td>
                <td><a href="edit.php?id=<?php echo $ponto[$i]->getId(); ?>">Editar</a>
                    <a href="../../controllers/PontoController.class.php?metodo=delete&id=<?php echo $ponto[$i]->getId(); ?>">Excluir</a></td>
<?php } ?>
        </tr>
    </tbody>
    <tfoot>
        <tr>
        <th>Id </th>            <th>Id</th>
            <th>Nome_Ponto</th>
            <th>Endereco_Ponto</th>
            <th>Qtd_Estudantes</th>
            <th>Ações</th>        </tr>
    </tfoot>
</table>
<?php
require_once("../../views/layout/rodape.php");
?>
    