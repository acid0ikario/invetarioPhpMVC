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
                            Categorias 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Agregar-Modificar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                  <form id="frm-categoria" action="?c=Categorias&a=Guardar" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idCategoria" value="<?php echo $cat->idCategoria; ?>" />

                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="Nombre" value="<?php echo $cat->nombre; ?>" class="form-control" placeholder="Ingrese el nombre de la categoria" />
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
