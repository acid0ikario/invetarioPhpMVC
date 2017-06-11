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
                                <i class="fa fa-dashboard"></i> Agregar-Modificar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <form id="frm-producto" action="?c=Productos&a=Guardar" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idProducto" value="<?php echo $prod->idproducto; ?>" />

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="Nombre" value="<?php echo $prod->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" />
                    </div>

                    <div class="form-group">
                        <label>Descripcion</label>
                        <input type="text" name="Descripcion" value="<?php echo $prod->descripcion; ?>" class="form-control" placeholder="Ingrese Descripcion"  />
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="Precio" value="<?php echo $prod->precio; ?>" class="form-control" placeholder="Ingrese Precio"  />
                    </div>

                     <div class="form-group">
                        <label>idCategoria</label>
                        <input type="text" name="idCategoria" value="<?php echo $prod->idCategoria; ?>" class="form-control" placeholder="Ingrese idCategoria" />
                    </div>
                    
                     <div class="form-group">
                        <label>idProveedor</label>
                        <input type="text" name="idProveedor" value="<?php echo $prod->idProveedor; ?>" class="form-control" placeholder="Ingrese idProveedor"  />
                    </div>

                    <hr />

                    <div class="text-right">
                        <button class="btn btn-success">Guardar</button>
                    </div>
                </form>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


   <!-- Scripts -->
   <?php 
        include("partialIncludeScripts.php");
   ?>

</body>

</html>
