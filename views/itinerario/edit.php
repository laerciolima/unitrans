<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/ItinerarioController.class.php");

$itinerario = $itinerarioController->listById($_GET['id']);
?>
<div class="formAll">
    <div class="formItinerario">

        <h2>Editar Itinerario</h2>

        <div class="actions">
            <ul>
                <li><a href="index.php">Listar Itinerarios</a></li>
                <li></li>
            </ul> 
        </div>
        <form id="formItinerario" class="formItinerario" method="post" action="../../controllers/ItinerarioController.class.php">
            <fieldset>
                <legend>Incluir Itinerario</legend>

                <input id="metodo" name="metodo" value="edit" type="hidden"/>

                <input name="id" value="<?php echo $itinerario->getId(); ?>" type="hidden"/>

            <label for="id">Id:</label>
            <input value="<?php echo $itinerario->getId(); ?>" id="id" name="id" type="text"/><br/>
            <label for="endereco">Endereco:</label>
            <input value="<?php echo $itinerario->getEndereco(); ?>" id="endereco" name="endereco" type="text"/><br/>
            <label for="motorista">Motorista:</label>
            <input value="<?php echo $itinerario->getMotorista(); ?>" id="motorista" name="motorista" type="text"/><br/>
            <label for="onibus">Onibus:</label>
            <input value="<?php echo $itinerario->getOnibus(); ?>" id="onibus" name="onibus" type="text"/><br/>
            <label for="checkpoint">Checkpoint:</label>
            <input value="<?php echo $itinerario->getCheckpoint(); ?>" id="checkpoint" name="checkpoint" type="text"/><br/>
            <label for="motorista_itinerario">Motorista_Itinerario:</label>
            <input value="<?php echo $itinerario->getMotorista_Itinerario(); ?>" id="motorista_itinerario" name="motorista_itinerario" type="text"/><br/>

            </fieldset>


            <input id="enviar" type="submit" value="Enviar"/>
        </form>
    </div>
</div>

<?php
require_once("../../views/layout/rodape.php");
?>