<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/OnibusController.class.php");



?>

    <div class="formAll">
        <div class="formOnibus">

    <h2>Novo Onibus</h2>


    <div class="actions">
        <ul>
            <li><a href="index.php">Listar Onibus</a></li>
        </ul>

    </div>
    <form id="formOnibus" class="formOnibus" method="post" action="../../controllers/OnibusController.class.php">
        <fieldset>
            <legend>Incluir Onibus</legend>
            <input name="metodo" value="save" type="hidden"/>

            <label for="id">Id:</label>
            <input id="id" name="id" type="text"/><br/>
            <label for="placa">Placa:</label>
            <input id="placa" name="placa" type="text"/><br/>
            <label for="ano">Ano:</label>
            <input id="ano" name="ano" type="text"/><br/>
            <label for="cor">Cor:</label>
            <input id="cor" name="cor" type="text"/><br/>
            <label for="marca">Marca:</label>
            <input id="marca" name="marca" type="text"/><br/>
            <label for="horario">Horario:</label>
            <input id="horario" name="horario" type="text"/><br/>
            <label for="iti_end">Iti_End:</label>
            <input id="iti_end" name="iti_end" type="text"/><br/>

        </fieldset>
        <input id="enviar" type="submit" value="Enviar"/>
    </form>
    </div>
    </div>

<?php
require_once("../../views/layout/rodape.php");
?>

