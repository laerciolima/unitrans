
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <title>UniTrans</title>
    </head>

    <body>
        <div class="geral ">
            <div class="header container-fluid">

                <div class="col-sm-2">
                    <img src="webroot/img/logo.png" width="50"/>
                </div>
                <div class="col-sm-8">
                    <div class="drop">
                        <ul class="drop_menu">
                            <li><a href='#'>Home</a>
                            </li>
                            <li><a href='?controller=estudante&action=index'>Estudantes</a>
                                <ul>
                                    <li><a href='?controller=estudante&action=index'>Listar</a></li>
                                    <li><a href='?controller=estudante&action=add'>Adicionar</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Ônibus</a>
                                <ul>
                                    <li><a href='?controller=onibus&action=index'>Listar</a></li>
                                    <li><a href='?controller=onibus&action=add'>Adicionar</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Motoristas</a>
                                <ul>
                                    <li><a href='#'>Listar</a></li>
                                    <li><a href='#'>Adicionar</a></li>
                                </ul>
                            </li>
                            <li><a href='?controller=universidade&action=index'>Universidade</a>
                                <ul>
                                    <li><a href='?controller=universidade&action=index'>Listar</a></li>
                                    <li><a href='?controller=universidade&action=add'>Adicionar</a></li>
                                </ul>
                            </li>
                            <li><a href='?controller=usuario&action=index'>Usuários</a>
                                <ul>
                                    <li><a href='?controller=usuario&action=index'>Listar</a></li>
                                    <li><a href='?controller=usuario&action=add'>Adicionar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2">

                    <div style="margin-top: 5px; color: white; float: right">
                        <table>
                            <tr>
                                <td><img src="webroot/img/user.png" width="32" /></td>
                                <td style="color: white"><?php echo $_SESSION['login']; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button  onclick="location.href = '?controller=login&action=logout'" type="button" class="btn btn-danger btn-xs" style="margin-top: 0px; float: right">Sair</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>


            </div>

            <div class="content container">


                <?php require_once('routes.php'); ?>


            </div>
            <div class="footer">
                <center>
                    Unitrans
                </center>
            </div>
        </div>

    </body>
</html>
