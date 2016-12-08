
<h2>Adicionar Estudante</h2>




<form method="post" action="?controller=estudante&action=add" class="form-horizontal" role="form" enctype="multipart/form-data">
   <div class="form-group">
      <label class="control-label col-sm-2" for="nome">Nome:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="cpf">Cpf:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite o cpf">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="data_de_nascimento">Data_de_nascimento:</label>
      <div class="col-sm-4">
         <input type="date" class="form-control" name="data_de_nascimento" id="data_de_nascimento" placeholder="Digite o data_de_nascimento">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="telefone">Telefone:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Digite o telefone">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="rua">Rua:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="rua" id="rua" placeholder="Digite o rua">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="numero">Numero:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="numero" id="numero" placeholder="Digite o numero">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="bairro">Bairro:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite o bairro">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="cidade">Cidade:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite o cidade">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="curso">Curso:</label>
      <div class="col-sm-4">
         <input type="text" class="form-control" name="curso" id="curso" placeholder="Digite o curso">
      </div>
   </div><div class="form-group">
      <label class="control-label col-sm-2" for="fk_id_universidade">Universidade:</label>
      <div class="col-sm-4">
         <select class="form-control" name="fk_id_universidade" id="fk_id_universidade">

            <?php foreach ($universidades as $universidade) { ?>
               <option value="<?php echo $universidade->getId();?>"><?php echo $universidade->getNome();?></option>

               <?php } ?>
            </select>

         </div>
      </div><div class="form-group">
         <label class="control-label col-sm-2" for="fk_id_ponto_embarque">Ponto de embarque:</label>
         <div class="col-sm-4">
            <select class="form-control" name="fk_id_ponto_embarque" id="fk_id_ponto_embarque">

               <?php foreach ($pontos as $ponto) { ?>
                  <option value="<?php echo $ponto->getId();?>"><?php echo $ponto->getEndereco()." - ".$ponto->getBairro();?></option>

                  <?php } ?>
               </select>

            </div>
         </div>

         <div class="form-group">
            <label class="control-label col-sm-2" for="fk_id_ponto_desembarque">Ponto de desembarque:</label>
            <div class="col-sm-4">
               <select class="form-control" name="fk_id_ponto_desembarque" id="fk_id_ponto_desembarque">

                  <?php foreach ($pontos as $ponto) { ?>
                     <option value="<?php echo $ponto->getId();?>"><?php echo $ponto->getEndereco()." - ".$ponto->getBairro();?></option>

                     <?php } ?>
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label class="control-label col-sm-2" for="horario_de_ida">Horario de ida:</label>
               <div class="col-sm-4">
                  <input type="time" class="form-control" name="horario_de_ida" id="horario_de_ida" placeholder="Digite o horario de ida">
               </div>
            </div><div class="form-group">
               <label class="control-label col-sm-2" for="horario_de_volta">Horario de volta:</label>
               <div class="col-sm-4">
                  <input type="time" class="form-control" name="horario_de_volta" id="horario_de_volta" placeholder="Digite o horario_de_volta">
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="senha">Foto:</label>
               <div class="col-sm-4">
                  <input type="file" class="form-control" name="foto" id="foto"/>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2" for="login">Login:</label>
               <div class="col-sm-4">
                  <input type="text" class="form-control" name="login" id="login" placeholder="Digite o login">
               </div>
            </div><div class="form-group">
               <label class="control-label col-sm-2" for="senha">Senha:</label>
               <div class="col-sm-4">
                  <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a senha">

               </div>
               <button type="button" class="btn btn-default" onclick="gerarSenhaEstudante()" data-toggle="modal" data-target="#myModal">Gerar senha</button>
            </div>  <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Enviar</button>
               </div>
            </div>
         </form>

         <!-- Modal -->
         <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Senha   </h4>
                  </div>
                  <div class="modal-body">
                     Senha gerada: <b><span id="senha_modal"></span></b>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                  </div>
               </div>

            </div>
         </div>
