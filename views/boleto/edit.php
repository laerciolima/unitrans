<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/BoletoController.class.php");

$boleto = $boletoController->listById($_GET['id']);
?>
<div class="formAll">
    <div class="formBoleto">

        <h2>Editar Boleto</h2>

        <div class="actions">
            <ul>
                <li><a href="index.php">Listar Boletos</a></li>
                <li></li>
            </ul> 
        </div>
        <form id="formBoleto" class="formBoleto" method="post" action="../../controllers/BoletoController.class.php">
            <fieldset>
                <legend>Incluir Boleto</legend>

                <input id="metodo" name="metodo" value="edit" type="hidden"/>

                <input name="id" value="<?php echo $boleto->getId(); ?>" type="hidden"/>

            <label for="id">Id:</label>
            <input value="<?php echo $boleto->getId(); ?>" id="id" name="id" type="text"/><br/>
            <label for="nome_banco">Nome_Banco:</label>
            <input value="<?php echo $boleto->getNome_Banco(); ?>" id="nome_banco" name="nome_banco" type="text"/><br/>
            <label for="cedente">Cedente:</label>
            <input value="<?php echo $boleto->getCedente(); ?>" id="cedente" name="cedente" type="text"/><br/>
            <label for="sacado">Sacado:</label>
            <input value="<?php echo $boleto->getSacado(); ?>" id="sacado" name="sacado" type="text"/><br/>
            <label for="nro">Nro:</label>
            <input value="<?php echo $boleto->getNro(); ?>" id="nro" name="nro" type="text"/><br/>
            <label for="aceite">Aceite:</label>
            <input value="<?php echo $boleto->getAceite(); ?>" id="aceite" name="aceite" type="text"/><br/>
            <label for="carteira">Carteira:</label>
            <input value="<?php echo $boleto->getCarteira(); ?>" id="carteira" name="carteira" type="text"/><br/>
            <label for="valor">Valor:</label>
            <input value="<?php echo $boleto->getValor(); ?>" id="valor" name="valor" type="text"/><br/>
            <label for="vencimento">Vencimento:</label>
            <input value="<?php echo $boleto->getVencimento(); ?>" id="vencimento" name="vencimento" type="text"/><br/>
            <label for="instrucoes">Instrucoes:</label>
            <input value="<?php echo $boleto->getInstrucoes(); ?>" id="instrucoes" name="instrucoes" type="text"/><br/>
            <label for="cod_barras">Cod_Barras:</label>
            <input value="<?php echo $boleto->getCod_Barras(); ?>" id="cod_barras" name="cod_barras" type="text"/><br/>

            </fieldset>


            <input id="enviar" type="submit" value="Enviar"/>
        </form>
    </div>
</div>

<?php
require_once("../../views/layout/rodape.php");
?>