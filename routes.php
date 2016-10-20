<?php

function call($controller, $action) {
    require_once('controllers/' . ucfirst($controller) . 'Controller.php');
    if ($controller != "login")
        verificacoes();
    switch ($controller) {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'posts':
            // we need the model to query the database later in the controller
            require_once('models/post.php');
            $controller = new PostsController();
            break;
        case 'usuario':
            // we need the model to query the database later in the controller
            require_once('models/UsuarioDAO.php');
            $controller = new UsuarioController();
            break;
        case 'universidade':
            // we need the model to query the database later in the controller
            require_once('models/UniversidadeDAO.php');
            $controller = new UniversidadeController();
            break;
        case 'estudante':
            // we need the model to query the database later in the controller
            require_once('models/EstudanteDAO.php');
            require_once('models/UniversidadeDAO.php');
            $controller = new EstudanteController();
            break;


		case 'motorista':
            // we need the model to query the database later in the controller
            require_once('models/MotoristaDAO.php');
            $controller = new MotoristaController();
            break;
        case 'ponto':
            // we need the model to query the database later in the controller
            require_once('models/PontoDAO.php');
            $controller = new PontoController();
            break;
        case 'boleto':
            // we need the model to query the database later in the controller
            require_once('models/BoletoDAO.php');
            $controller = new BoletoController();
            break;
        case 'itinerario':
            // we need the model to query the database later in the controller
            require_once('models/ItinerarioDAO.php');
            $controller = new ItinerarioController();
            break; 
        case 'onibus':
            // we need the model to query the database later in the controller
            require_once('models/OnibusDAO.php');
            $controller = new OnibusController();
            break; 

        case 'comprovante':
            // we need the model to query the database later in the controller
            require_once('models/ComprovanteDAO.php');
            $controller = new ComprovanteController();
            break;
        case 'login':
            // we need the model to query the database later in the controller
            require_once('models/UsuarioDAO.php');
            $controller = new LoginController();
            break;
    }

    $controller->{ $action }();
}

function verificacoes() {
    
    
    if (isset($_SESSION['success'])) {
        ?>
        <div class="alert alert-success">
            <strong><?php echo $_SESSION['success']; ?></strong> 
        </div>
        <?php
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        ?>
        <div class="alert alert-danger">
            <strong><?php echo $_SESSION['error']; ?></strong> 
        </div>
        <?php
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['warning'])) {
        ?>
        <div class="alert alert-warning">
            <strong><?php echo $_SESSION['warning']; ?></strong> 
        </div>
        <?php
        unset($_SESSION['warning']);
    }
}

// we're adding an entry for the new controller and its actions
$controllers = array('pages' => ['home', 'error'],
    'usuario' => ['index', 'add', 'edit', 'view', 'home', 'delete'],
    'universidade' => ['index', 'add', 'edit', 'view', 'delete'],
    'estudante' => ['index', 'add', 'edit', 'view', 'delete', 'mapa'],
    'comprovante' => ['index', 'add', 'edit', 'view', 'delete'],
    'login' => ['login', 'logout'],
	'motorista' => ['index', 'add', 'edit', 'view', 'delete'],
    'ponto' => ['index', 'add', 'edit', 'view', 'delete'],
    'boleto' => ['index', 'add', 'edit', 'view', 'delete'],
    'itinerario' => ['index', 'add', 'edit', 'view', 'delete'],
    'onibus' => ['index', 'add', 'edit', 'view', 'delete'],
    'posts' => ['index', 'show' ]);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>
