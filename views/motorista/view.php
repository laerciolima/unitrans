
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Motorista: <?php echo $motorista->getEndereco();?></h2>


<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $motorista->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Endereco</th>
        <td><?php echo $motorista->getEndereco()?></td>
    </tr>
    <tr align="left">
        <th>Placa</th>
        <td><?php echo $motorista->getPlaca()?></td>
    </tr>
    <tr align="left">
        <th>Checkpoint</th>
        <td><?php echo $motorista->getCheckpoint()?></td>
    </tr>
    </tbody>
  </table>
