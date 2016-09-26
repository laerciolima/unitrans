<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/OnibusController.class.php");

$onibus = $onibusController->listById($_GET['id']);
?>
<div class="formAll">
    <div class="formOnibus">

        <h2>Editar Onibus</h2>

        <div class="actions">
            <ul>
                <li><a href="index.php">Listar Onibus</a></li>
                <li></li>
            </ul> 
        </div>
        <form id="formOnibus" class="formOnibus" method="post" action="../../controllers/OnibusController.class.php">
            <fieldset>
                <legend>Incluir Onibus</legend>

                <input id="metodo" name="metodo" value="edit" type="hidden"/>

                <input name="id" value="<?php echo $onibus->getId(); ?>" type="hidden"/>

            <label for="id">Id:</label>
            <input value="<?php echo $onibus->getId(); ?>" id="id" name="id" type="text"/><br/>
            <label for="placa">Placa:</label>
            <input value="<?php echo $onibus->getPlaca(); ?>" id="placa" name="placa" type="text"/><br/>
            <label for="ano">Ano:</label>
            <input value="<?php echo $onibus->getAno(); ?>" id="ano" name="ano" type="text"/><br/>
            <label for="cor">Cor:</label>
            <input value="<?php echo $onibus->getCor(); ?>" id="cor" name="cor" type="text"/><br/>
            <label for="marca">Marca:</label>
            <input value="<?php echo $onibus->getMarca(); ?>" id="marca" name="marca" type="text"/><br/>
            <label for="horario">Horario:</label>
            <input value="<?php echo $onibus->getHorario(); ?>" id="horario" name="horario" type="text"/><br/>
            <label for="iti_end">Iti_End:</label>
            <input value="<?php echo $onibus->getIti_End(); ?>" id="iti_end" name="iti_end" type="text"/><br/>

            </fieldset>


            <input id="enviar" type="submit" value="Enviar"/>
        </form>
    </div>
</div>

<?php
require_once("../../views/layout/rodape.php");
?>