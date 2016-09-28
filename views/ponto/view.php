
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Ponto: <?php echo $ponto->getEndereco();?></h2>


<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $ponto->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Endereco</th>
        <td><?php echo $ponto->getEndereco()?></td>
    </tr>
    <tr align="left">
        <th>QtdEstudantes</th>
        <td><?php echo $ponto->getQtdEstudantes()?></td>
    </tr>
    </tbody>
  </table>
