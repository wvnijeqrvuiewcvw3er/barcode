<?php

require_once "modelos/producto.php";

class ProductoControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Producto;
    }

    public function Inicio(){
        require_once "vistas/encabezado.php";
        require_once "vistas/productos/acdp.php";
        require_once "vistas/pie.php";
    }

    public function FormCrear(){
        $titulo = "Registrar";
        $p = new Producto();
        if(isset($_GET['id'])){
            $p = $this->modelo->Obtener($_GET['id']);
            $titulo = "Modificar";
        }

        require_once "vistas/encabezado.php";
        require_once "vistas/productos/form.php";
        require_once "vistas/pie.php";
    }
    

public function Guardar(){
    $p=new Producto();
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

    header("location:?c=producto");
}


    public function Borrar(){
        $this->modelo->Eliminar($_GET["id"]);
        header("location:?c=producto");
    }
    
}
?>
