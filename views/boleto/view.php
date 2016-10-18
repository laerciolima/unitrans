
<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button><h2>Boleto: <?php echo $boleto->getCedente();?></h2>


<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $boleto->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Cedente</th>
        <td><?php echo $boleto->getCedente()?></td>
    </tr>
    <tr align="left">
        <th>Sacado</th>
        <td><?php echo $boleto->getSacado()?></td>
    </tr>
    <tr align="left">
        <th>Nro</th>
        <td><?php echo $boleto->getNro()?></td>
    </tr>
    <tr align="left">
        <th>Aceite</th>
        <td><?php echo $boleto->getAceite()?></td>
    </tr>
    <tr align="left">
        <th>Carteira</th>
        <td><?php echo $boleto->getCarteira()?></td>
    </tr>
    <tr align="left">
        <th>Valor</th>
        <td><?php echo $boleto->getValor()?></td>
    </tr>
    <tr align="left">
        <th>Vencimento</th>
        <td><?php echo $boleto->getVencimento()?></td>
    </tr>
    <tr align="left">
        <th>Instrucoes</th>
        <td><?php echo $boleto->getInstrucoes()?></td>
    </tr>
    <tr align="left">
        <th>CodigoDeBarras</th>
        <td><?php echo $boleto->getCodigoDeBarras()?></td>
    </tr>
    </tbody>
  </table>
