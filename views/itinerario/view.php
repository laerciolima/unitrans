
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Itinerario: <?php echo $itinerario->getEndereco();?></h2>


<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $itinerario->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Endereco</th>
        <td><?php echo $itinerario->getEndereco()?></td>
    </tr>
    <tr align="left">
        <th>Placa</th>
        <td><?php echo $itinerario->getPlaca()?></td>
    </tr>
    <tr align="left">
        <th>Checkpoint</th>
        <td><?php echo $itinerario->getCheckpoint()?></td>
    </tr>
    </tbody>
  </table>
