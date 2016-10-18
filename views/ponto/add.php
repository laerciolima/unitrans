
<h2>Adicionar Ponto</h2>




<form method="post" action="?controller=ponto&action=add" class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="endereco">Endereco:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereco">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="qtdestudantes">QtdEstudantes:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="qtdestudantes" id="qtdestudantes" placeholder="Digite o qtdestudantes">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>