
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <title>Tableless.com.br</title>
    </head>

    <body>
        <div class="geral">
            <div class="header">

                <div class="col-sm-2">
                    logomarca    
                </div>
                <div class="col-sm-8">
                    <div class="drop">
                        <ul class="drop_menu">
                            <li><a href='#'>Home</a>
                            </li>
                            <li><a href='#'>Estudantes</a>
                                <ul>
                                    <li><a href='#'>Listar</a></li>
                                    <li><a href='#'>Adicionar</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Ônibus</a>
                                <ul>
                                    <li><a href='#'>Listar</a></li>
                                    <li><a href='#'>Adicionar</a></li>
                                </ul>
                            </li>
                            <li><a href='#'>Motoristas</a>
                                <ul>
                                    <li><a href='#'>Listar</a></li>
                                    <li><a href='#'>Adicionar</a></li>
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
                    login
                </div>


            </div>
            <div class="content container">

                <?php require_once('routes.php'); ?>


            </div>
            <div class="footer">
                FOOTER
            </div>
        </div>

    </body>
</html>