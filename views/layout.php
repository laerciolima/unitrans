
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"></meta>
        <title>UniTrans</title>
    </head>

    <body>
        <div class="geral ">
           <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?controller=usuario&action=home">Unitrans</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="?controller=usuario&action=home">Home</a></li>

            <li class="dropdown">
    <a href="?controller=estudante&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudante <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="?controller=estudante&action=index">Listar</a></li>
      <li><a href="?controller=estudante&action=add">Adicionar</a></li>
  </ul>
</li>
<li class="dropdown">
    <a href="?controller=onibus&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Onibus <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="?controller=onibus&action=index">Listar</a></li>
      <li><a href="?controller=onibus&action=add">Adicionar</a></li>
  </ul>
</li>
<li class="dropdown">
    <a href="?controller=motorista&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Motorista <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="?controller=motorista&action=index">Listar</a></li>
      <li><a href="?controller=motorista&action=add">Adicionar</a></li>
  </ul>
</li>
<li class="dropdown">
    <a href="?controller=itinerario&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Itinerario <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="?controller=itinerario&action=index">Listar</a></li>
      <li><a href="?controller=itinerario&action=add">Adicionar</a></li>
  </ul>
</li>
<li class="dropdown">
    <a href="?controller=ponto&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ponto <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="?controller=ponto&action=index">Listar</a></li>
      <li><a href="?controller=ponto&action=add">Adicionar</a></li>
  </ul>
</li>
<li class="dropdown">
    <a href="?controller=comprovante&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comprovante <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="?controller=comprovante&action=index">Listar</a></li>
      <li><a href="?controller=comprovante&action=add">Adicionar</a></li>
  </ul>
</li>
<li class="dropdown">
    <a href="?controller=universidade&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Universidade <span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="?controller=universidade&action=index">Listar</a></li>
      <li><a href="?controller=universidade&action=add">Adicionar</a></li>
  </ul>
</li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
                 <a href="?controller=universidade&action=index" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login'];?><span class="caret"></span></a>
                 <ul class="dropdown-menu">
                   <li><a style="color: red" href="?controller=login&action=logout"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> Sair</a></li>
               </ul>
             </li>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


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
