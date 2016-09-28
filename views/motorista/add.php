
<h2>Adicionar Motorista</h2>




<form method="post" action="?controller=motorista&action=add" class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="endereco">Endereco:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereco">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="placa">Placa:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="placa" id="placa" placeholder="Digite o placa">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="checkpoint">Checkpoint:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="checkpoint" id="checkpoint" placeholder="Digite o checkpoint">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>