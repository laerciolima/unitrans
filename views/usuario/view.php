

<h2>Usuario: <?php echo $usuario->getSenha();?></h2>


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
