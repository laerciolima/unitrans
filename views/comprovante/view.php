
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Comprovante: <?php echo $comprovante->getFk_id_estudante();?></h2>




<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $comprovante->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Estudante</th>
        <td><?php echo $estudante->getNome();?></td>
    </tr>
    <tr align="left">
        <th>Data</th>
        <td><?php echo date("d/m/Y", strtotime($comprovante->getData()))?></td>
    </tr>
    <tr align="left">
        <th>Comprovante</th>
        <td><img src="storage/user/<?php echo $estudante->getCpf()."/".$comprovante->getImg(); ?>"  class="img img-resposive"/></td>
    </tr>
    <tr align="left">
        <th>Status</th>
        <td><?php if($comprovante->getStatus()==1){ echo "aprovado"; } elseif ($comprovante->getStatus() == 0) {echo "pendente";}else {echo "Recusado";} ?></td>
    </tr>
    <tr>
      <form method="post" action="?controller=comprovante&action=alterarStatus">
         <input type="hidden" name="id" value="<?php echo  ($comprovante->getId());?>"/>
         <input type="hidden" name="status" value="-1"/>
      <td><button type="submit" class="btn btn-block btn-danger btn-sm">Recusar</button></td>
      </form>
      <form method="post" action="?controller=comprovante&action=alterarStatus">
         <input type="hidden" name="id" value="<?php echo  ($comprovante->getId());?>"/>
         <input type="hidden" name="status" value="1"/>
      <td><button type="submit" class="btn btn-block btn-success btn-sm">Aprovar</button></td>
   </form>
    </tr>
    </tbody>
  </table>
