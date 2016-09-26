<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/PontoController.class.php");



?>

    <div class="formAll">
        <div class="formPonto">

    <h2>Novo Ponto</h2>


    <div class="actions">
        <ul>
            <li><a href="index.php">Listar Pontos</a></li>
        </ul>

    </div>
    <form id="formPonto" class="formPonto" method="post" action="../../controllers/PontoController.class.php">
        <fieldset>
            <legend>Incluir Ponto</legend>
            <input name="metodo" value="save" type="hidden"/>

            <label for="id">Id:</label>
            <input id="id" name="id" type="text"/><br/>
            <label for="nome_ponto">Nome_Ponto:</label>
            <input id="nome_ponto" name="nome_ponto" type="text"/><br/>
            <label for="endereco_ponto">Endereco_Ponto:</label>
            <input id="endereco_ponto" name="endereco_ponto" type="text"/><br/>
            <label for="qtd_estudantes">Qtd_Estudantes:</label>
            <input id="qtd_estudantes" name="qtd_estudantes" type="text"/><br/>

        </fieldset>
        <input id="enviar" type="submit" value="Enviar"/>
    </form>
    </div>
    </div>

<?php
require_once("../../views/layout/rodape.php");
?>

