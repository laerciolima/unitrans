
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
        <th>Bairro</th>
        <td><?php echo $ponto->getBairro()?></td>
    </tr>
    <tr align="left">
        <th>Cidade</th>
        <td><?php echo $ponto->getCidade()?></td>
    </tr>
    </tbody>
  </table>
