<?php
require_once '../Models/Proveedores.php';

class ProveedoresController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Proveedores();
    }
    
    public function Index(){
        require_once '../Views/Proveedores/Index.php';
    }
    
    public function Crud(){
        $alm = new Proveedores();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        

        require_once '../Views/Proveedores/AgregarModificar.php';
    }
    
    public function Guardar(){
       $prov = new Proveedores();
        
        $prov->idProveedor = $_REQUEST['idCategoria'];
        $prov->Nombre = $_REQUEST['Nombre'];

        $prov->idProveedor > 0 
            ? $this->model->Actualizar($prov)
            : $this->model->Registrar($prov);
        
        header('Location: Index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: Index.php');
    }
}