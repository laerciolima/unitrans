<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/PontoController.class.php");

$ponto = $pontoController->listById($_GET['id']);
?>
<div class="formAll">
    <div class="formPonto">

        <h2>Editar Ponto</h2>

        <div class="actions">
            <ul>
                <li><a href="index.php">Listar Pontos</a></li>
                <li></li>
            </ul> 
        </div>
        <form id="formPonto" class="formPonto" method="post" action="../../controllers/PontoController.class.php">
            <fieldset>
                <legend>Incluir Ponto</legend>

                <input id="metodo" name="metodo" value="edit" type="hidden"/>

                <input name="id" value="<?php echo $ponto->getId(); ?>" type="hidden"/>

            <label for="id">Id:</label>
            <input value="<?php echo $ponto->getId(); ?>" id="id" name="id" type="text"/><br/>
            <label for="nome_ponto">Nome_Ponto:</label>
            <input value="<?php echo $ponto->getNome_Ponto(); ?>" id="nome_ponto" name="nome_ponto" type="text"/><br/>
            <label for="endereco_ponto">Endereco_Ponto:</label>
            <input value="<?php echo $ponto->getEndereco_Ponto(); ?>" id="endereco_ponto" name="endereco_ponto" type="text"/><br/>
            <label for="qtd_estudantes">Qtd_Estudantes:</label>
            <input value="<?php echo $ponto->getQtd_Estudantes(); ?>" id="qtd_estudantes" name="qtd_estudantes" type="text"/><br/>

            </fieldset>


            <input id="enviar" type="submit" value="Enviar"/>
        </form>
    </div>
</div>

<?php
require_once("../../views/layout/rodape.php");
?>