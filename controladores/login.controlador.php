<?php

require_once "modelos/User.php";

class LoginController {
    private $modelo;

    public function __construct() {
        $this->modelo = new User();
    }

    public function Inicio() {
        require_once "vistas/encabezado.php";
        require_once "vistas/inicio/login.php";
        require_once "vistas/pie.php";
    }

    public function Autenticar() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($this->modelo->authenticate($username, $password)) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: principal.php");
        } else {
            header("Location: index.php?c=login&a=Inicio&error=1");
        }
    }
}

?>
