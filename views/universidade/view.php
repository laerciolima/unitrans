
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Universidade: <?php echo $universidade->getNome();?></h2>


<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $universidade->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Nome</th>
        <td><?php echo $universidade->getNome()?></td>
    </tr>
    <tr align="left">
        <th>Cidade</th>
        <td><?php echo $universidade->getCidade()?></td>
    </tr>
    </tbody>
  </table>
