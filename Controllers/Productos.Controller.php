<?php
require_once '../Models/Productos.php';

class ProductosController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Productos();
    }
    
    public function Index(){
        require_once '../Views/Productos/Index.php';

    }
    
    public function Crud(){
        $prod = new Productos();
        
        if(isset($_REQUEST['id'])){
            $prod = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once '../Views/Productos/AgregarModificar.php';

    }
    
    public function Guardar(){
        $prod = new Productos();
        
        if ($prod->idproducto == 0) {
             $prod->idproducto = $_REQUEST['idProducto'];
        }
       

        $prod->nombre = $_REQUEST['Nombre'];
        $prod->descripcion = $_REQUEST['Descripcion'];
        $prod->precio = $_REQUEST['Precio'];
        $prod->idCategoria = $_REQUEST['idCategoria'];
        $prod->idProveedor = $_REQUEST['idProveedor'];

        $prod->idproducto> 0 
            ? $this->model->Actualizar($prod)
            : $this->model->Registrar($prod);
        
        header('Location: Index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: Index.php');
    }
}