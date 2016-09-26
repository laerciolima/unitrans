<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/ItinerarioController.class.php");



?>

    <div class="formAll">
        <div class="formItinerario">

    <h2>Novo Itinerario</h2>


    <div class="actions">
        <ul>
            <li><a href="index.php">Listar Itinerarios</a></li>
        </ul>

    </div>
    <form id="formItinerario" class="formItinerario" method="post" action="../../controllers/ItinerarioController.class.php">
        <fieldset>
            <legend>Incluir Itinerario</legend>
            <input name="metodo" value="save" type="hidden"/>

            <label for="id">Id:</label>
            <input id="id" name="id" type="text"/><br/>
            <label for="endereco">Endereco:</label>
            <input id="endereco" name="endereco" type="text"/><br/>
            <label for="motorista">Motorista:</label>
            <input id="motorista" name="motorista" type="text"/><br/>
            <label for="onibus">Onibus:</label>
            <input id="onibus" name="onibus" type="text"/><br/>
            <label for="checkpoint">Checkpoint:</label>
            <input id="checkpoint" name="checkpoint" type="text"/><br/>
            <label for="motorista_itinerario">Motorista_Itinerario:</label>
            <input id="motorista_itinerario" name="motorista_itinerario" type="text"/><br/>

        </fieldset>
        <input id="enviar" type="submit" value="Enviar"/>
    </form>
    </div>
    </div>

<?php
require_once("../../views/layout/rodape.php");
?>

