
<h2>Adicionar Usuario</h2>




<form method="post" action="?controller=usuario&action=add" class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="login">Login:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="login" id="login" placeholder="Digite o login">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="senha">Senha:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" name="senha" id="senha" placeholder="Digite o senha">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>