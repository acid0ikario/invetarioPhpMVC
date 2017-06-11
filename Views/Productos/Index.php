<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php 
        include("partialIncludeCss.php");
    ?>

</head>

<body>

    <div id="wrapper">
        <div id="page-wrapper">
           <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php 
                include("partialHeader.php");
                include("partialMenu.php");
            ?>
            <!-- /.navbar-collapse -->
        </nav>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Productos 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i><a href="?c=Productos&a=Crud">  Agregar Producctos</a> 
                            </li>
                        </ol>
                    </div>
                </div>
                

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Listado</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>idCategoria</th>
                                                <th>idProveedor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($this->model->Listar() as $r): ?>
                                                <tr>
                                                    <td><?php echo $r->idproducto; ?></td>
                                                    <td><?php echo $r->nombre; ?></td>
                                                    <td><?php echo $r->descripcion; ?></td>
                                                    <td><?php echo $r->precio; ?></td>
                                                    <td><?php echo $r->idCategoria; ?></td>
                                                    <td><?php echo $r->idProveedor; ?></td>
                                                    <td>
                                                        <a href="?c=Productos&a=Crud&id=<?php echo $r->idproducto; ?>">Editar</a>
                                                    </td>
                                                    <td>
                                                        <a href="?c=Productos&a=Eliminar&id=<?php echo $r->idproducto; ?>">Eliminar</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->


   <!-- Scripts -->
   <?php 
        include("partialIncludeScripts.php");
   ?>

</body>

</html>
