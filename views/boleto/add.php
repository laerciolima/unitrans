<?php
require_once("../../views/layout/cabecalho.php");
require_once("../../controllers/BoletoController.class.php");



?>

    <div class="formAll">
        <div class="formBoleto">

    <h2>Novo Boleto</h2>


    <div class="actions">
        <ul>
            <li><a href="index.php">Listar Boletos</a></li>
        </ul>

    </div>
    <form id="formBoleto" class="formBoleto" method="post" action="../../controllers/BoletoController.class.php">
        <fieldset>
            <legend>Incluir Boleto</legend>
            <input name="metodo" value="save" type="hidden"/>

            <label for="id">Id:</label>
            <input id="id" name="id" type="text"/><br/>
            <label for="nome_banco">Nome_Banco:</label>
            <input id="nome_banco" name="nome_banco" type="text"/><br/>
            <label for="cedente">Cedente:</label>
            <input id="cedente" name="cedente" type="text"/><br/>
            <label for="sacado">Sacado:</label>
            <input id="sacado" name="sacado" type="text"/><br/>
            <label for="nro">Nro:</label>
            <input id="nro" name="nro" type="text"/><br/>
            <label for="aceite">Aceite:</label>
            <input id="aceite" name="aceite" type="text"/><br/>
            <label for="carteira">Carteira:</label>
            <input id="carteira" name="carteira" type="text"/><br/>
            <label for="valor">Valor:</label>
            <input id="valor" name="valor" type="text"/><br/>
            <label for="vencimento">Vencimento:</label>
            <input id="vencimento" name="vencimento" type="text"/><br/>
            <label for="instrucoes">Instrucoes:</label>
            <input id="instrucoes" name="instrucoes" type="text"/><br/>
            <label for="cod_barras">Cod_Barras:</label>
            <input id="cod_barras" name="cod_barras" type="text"/><br/>

        </fieldset>
        <input id="enviar" type="submit" value="Enviar"/>
    </form>
    </div>
    </div>

<?php
require_once("../../views/layout/rodape.php");
?>

