<button  onclick="javascript:history.back()" type="button" class="btn btn-default btn-sm" style="margin-top: 5px">
                    < Voltar
                </button>

<h2>Usuario: <?php echo $usuario->getLogin();?></h2>

<?php

    $teste['id'] = 1;
    $teste['nome'] = "Luiz Claudio";
    
    echo json_encode($teste);

?>
<table class="view">
    <tbody>
      <tr>
        <th>ID</th>
        <td><?php echo $usuario->getId() ?></td>
      </tr>
    <tr align="left">
        <th>Login</th>
        <td><?php echo $usuario->getLogin()?></td>
    </tr>
    <tr align="left">
        <th>Senha</th>
        <td><?php echo $usuario->getSenha()?></td>
    </tr>
    </tbody>
  </table>


<table>
    <div>
        
    </div>
</table>