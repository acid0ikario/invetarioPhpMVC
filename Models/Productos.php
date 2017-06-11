<?php
class Productos
{
	private $pdo;
    
    public $idproducto;
    public $nombre;
    public $descripcion;
    public $precio;
    public $idCategoria;
    public $idProveedor;


	public function __CONSTRUCT()
	{
		try
		{
            
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM productos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM productos WHERE idProducto = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM productos WHERE idProducto = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE Productos SET 
				           nombre          = ?,
                           descripcion = ?,
                           precio = ?,
                           idCategoria = ?,
                           idProveedor = ?
				    WHERE idproducto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                         $data->nombre,
                         $data->descripcion,
                         $data->precio,
                         $data->idCategoria,
                         $data->idProveedor,
                         $data->idproducto
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Productos $data)
	{
		try 
		{
		$sql = "INSERT INTO Productos (Nombre,descripcion,precio,idCategoria,idProveedor) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
                    $data->descripcion,
                    $data->precio,
                    $data->idCategoria,
                    $data->idProveedor
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}