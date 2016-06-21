
<link rel="stylesheet" type="text/css" href="webroot/css/estilo.css">
<link rel="stylesheet" type="text/css" href="webroot/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="webroot/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="webroot/css/menu.css">

<script src="webroot/js/jquery.min.js" ></script>
<script src="webroot/js/bootstrap.min.js" ></script>
<script src="webroot/js/jquery.dataTables.min.js" ></script>
<script src="webroot/js/scripts.js" ></script>



<?php
  require_once('connection.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'pages';
    $action     = 'home';
  }

  require_once('views/layout.php');
?>