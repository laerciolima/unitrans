
<h2>Editar Boleto</h2>




<form method="post" action="?controller=boleto&action=edit&id=<?php echo $_GET['id'];?> " class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="cedente">Cedente:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getCedente(); ?>" name="cedente" id="cedente" placeholder="Digite o cedente">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="sacado">Sacado:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getSacado(); ?>" name="sacado" id="sacado" placeholder="Digite o sacado">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="nro">Nro:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getNro(); ?>" name="nro" id="nro" placeholder="Digite o nro">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="aceite">Aceite:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getAceite(); ?>" name="aceite" id="aceite" placeholder="Digite o aceite">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="carteira">Carteira:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getCarteira(); ?>" name="carteira" id="carteira" placeholder="Digite o carteira">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="valor">Valor:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getValor(); ?>" name="valor" id="valor" placeholder="Digite o valor">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="vencimento">Vencimento:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getVencimento(); ?>" name="vencimento" id="vencimento" placeholder="Digite o vencimento">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="instrucoes">Instrucoes:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getInstrucoes(); ?>" name="instrucoes" id="instrucoes" placeholder="Digite o instrucoes">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="codigodebarras">CodigoDeBarras:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $boleto->getCodigoDeBarras(); ?>" name="codigodebarras" id="codigodebarras" placeholder="Digite o codigodebarras">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>