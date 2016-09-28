
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Onibus: <?php echo $onibus->getPlaca();?></h2>


<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $onibus->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Placa</th>
        <td><?php echo $onibus->getPlaca()?></td>
    </tr>
    <tr align="left">
        <th>Marca</th>
        <td><?php echo $onibus->getMarca()?></td>
    </tr>
    <tr align="left">
        <th>Ano</th>
        <td><?php echo $onibus->getAno()?></td>
    </tr>
    <tr align="left">
        <th>Cor</th>
        <td><?php echo $onibus->getCor()?></td>
    </tr>
    <tr align="left">
        <th>Horario</th>
        <td><?php echo $onibus->getHorario()?></td>
    </tr>
    </tbody>
  </table>
