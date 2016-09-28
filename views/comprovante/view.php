
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
        <th>Fk id estudante</th>
        <td><?php echo $comprovante->getFk_id_estudante()?></td>
    </tr>
    <tr align="left">
        <th>Data</th>
        <td><?php echo $comprovante->getData()?></td>
    </tr>
    <tr align="left">
        <th>Img</th>
        <td><?php echo $comprovante->getImg()?></td>
    </tr>
    <tr align="left">
        <th>Status</th>
        <td><?php echo $comprovante->getStatus()?></td>
    </tr>
    </tbody>
  </table>
