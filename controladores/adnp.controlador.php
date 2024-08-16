<?php

require_once "modelos/productos.php";

class AdnpControlador  {

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Registro();
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/productos/adnp.php";
        require_once "vistas/pie.php";
    }

    public function FormsCrear(){
        $titulo = "Registrar";
        $p = new Registro();
        if (isset($_GET['id'])) {
            $p = $this->modelo->Obtener($_GET['id']);
            $titulo = "Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/productos/forms.php";
        require_once "vistas/pie.php";
    }

    public function Guardar(){
        $p = new Registro();
        $p->setPro_id(intval($_POST['ID']));
        $p->setPro_nom($_POST['Nombre']);
        $p->setPro_mar($_POST['Marca']);
        $p->setPro_cos(isset($_POST['Costo']) ? $_POST['Costo'] : null);
        $p->setPro_pre(isset($_POST['Precio']) ? $_POST['Precio'] : null);
        $p->setPro_can(isset($_POST['Cantidad']) ? $_POST['Cantidad'] : null);
        $p->setPro_img(isset($_POST['Imagen']) ? $_POST['Imagen'] : null);
        $p->setPro_fecha($_POST['Fecha']);

        $p->getPro_id() > 0 ?
        $this->modelo->Actualizar($p) :
        $this->modelo->Insertar($p);

        header("location:?c=adnp");
    }

    public function Borrar(){
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=adnp");
    }

}
?>
