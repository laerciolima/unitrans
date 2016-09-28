
<h2>Editar Onibus</h2>




<form method="post" action="?controller=onibus&action=edit&id=<?php echo $_GET['id'];?> " class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="placa">Placa:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $onibus->getPlaca(); ?>" name="placa" id="placa" placeholder="Digite o placa">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="marca">Marca:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $onibus->getMarca(); ?>" name="marca" id="marca" placeholder="Digite o marca">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="ano">Ano:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $onibus->getAno(); ?>" name="ano" id="ano" placeholder="Digite o ano">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="cor">Cor:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $onibus->getCor(); ?>" name="cor" id="cor" placeholder="Digite o cor">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="horario">Horario:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $onibus->getHorario(); ?>" name="horario" id="horario" placeholder="Digite o horario">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>