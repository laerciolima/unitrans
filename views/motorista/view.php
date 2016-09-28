
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Motorista: <?php echo $motorista->getIdonibus();?></h2>


<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $motorista->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Idonibus</th>
        <td><?php echo $motorista->getIdonibus()?></td>
    </tr>
    <tr align="left">
        <th>Iditinerario</th>
        <td><?php echo $motorista->getIditinerario()?></td>
    </tr>
    <tr align="left">
        <th>Nome</th>
        <td><?php echo $motorista->getNome()?></td>
    </tr>
    </tbody>
  </table>
