<?php
require_once '../Models/Categorias.php';

class CategoriasController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Categorias();
    }
    
    public function Index(){
        require_once '../Views/Categorias/Index.php';

    }
    
    public function Crud(){
        $cat = new Categorias();
        
        if(isset($_REQUEST['id'])){
            $cat = $this->model->Obtener($_REQUEST['id']);
        }
        

        require_once '../Views/Categorias/AgregarModificar.php';

    }
    
    public function Guardar(){
        $cat = new Categorias();
        
        if ($cat->idCategoria  == 0) {
            $cat->idCategoria = $_REQUEST['idCategoria'];
        }
       
        $cat->nombre = $_REQUEST['Nombre'];

        $cat->idCategoria > 0 
            ? $this->model->Actualizar($cat)
            : $this->model->Registrar($cat);
        
        header('Location: Index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: Index.php');
    }
}