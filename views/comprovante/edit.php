
<h2>Editar Comprovante</h2>




<form method="post" action="?controller=comprovante&action=edit&id=<?php echo $_GET['id'];?> " class="form-horizontal" role="form">
<div class="form-group">
        <label class="control-label col-sm-2" for="fk_id_estudante">Fk_id_estudante:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $comprovante->getFk_id_estudante(); ?>" name="fk_id_estudante" id="fk_id_estudante" placeholder="Digite o fk_id_estudante">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="data">Data:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $comprovante->getData(); ?>" name="data" id="data" placeholder="Digite o data">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="img">Img:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $comprovante->getImg(); ?>" name="img" id="img" placeholder="Digite o img">
        </div>
    </div><div class="form-group">
        <label class="control-label col-sm-2" for="status">Status:</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" value="<?php echo $comprovante->getStatus(); ?>" name="status" id="status" placeholder="Digite o status">
        </div>
    </div>  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Enviar</button>
    </div>
  </div>
</form>