
<h2>Editar Motorista</h2>




<form method="post" action="?controller=motorista&action=edit&id=<?php echo $_GET['id'];?> " class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="idonibus">Idonibus:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $motorista->getIdonibus(); ?>" name="idonibus" id="idonibus" placeholder="Digite o idonibus">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="iditinerario">Iditinerario:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $motorista->getIditinerario(); ?>" name="iditinerario" id="iditinerario" placeholder="Digite o iditinerario">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="nome">Nome:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $motorista->getNome(); ?>" name="nome" id="nome" placeholder="Digite o nome">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>