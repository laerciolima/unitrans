
<h2>Editar Universidade</h2>




<form method="post" action="?controller=universidade&action=edit&id=<?php echo $_GET['id'];?> " class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="nome">Nome:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $universidade->getNome(); ?>" name="nome" id="nome" placeholder="Digite o nome">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="cidade">Cidade:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $universidade->getCidade(); ?>" name="cidade" id="cidade" placeholder="Digite o cidade">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>