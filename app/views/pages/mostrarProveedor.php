<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Proveedores | P.R 77</title>

    <?php include('../includes/header.php') ?>

</head>
<!--  -->

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!--! SideBar -->
        <?php include('../includes/sidebar.php') ?>

        <div class="page-wrapper">
            <!--! TopBar -->
            <?php include('../includes/topbar.php') ?>

            <!-- ==========================================  -->
            <!-- ================ Content =================  -->
            <!-- ==========================================  -->
            <div class="page-content">
                <div class="row">
                    <!-- Subtitle -->
                    <div class="d-flex justify-content-between">
                        <h1 class="title">Proveedor: Nombre del Proveedor</h1>
                        <a href="../pages/addProveedor.php" class="btn btn-warning m-lg-3">
                            <i data-feather="edit"></i>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Razón Social</td>
                                            <td>CRISTIAN COMPANYS</td>
                                            <td>RFC</td>
                                            <td>MODC920228MJ7</td>
                                        </tr>
                                        <tr>
                                            <td>Observaciones</td>
                                            <td colspan="3">NOTAS DEL PROVEEDOR</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center" colspan="4">Contactos</th>
                                        </tr>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Teléfonos</th>
                                            <th>
                                                <a class="btn btn-primary"><i data-feather="plus"></i></a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>CRISTIAN MORENO DIAZ</td>
                                            <td>amengels1@gmail.com</td>
                                            <td>7291558093, 1234567890</td>
                                            <td>
                                                <a class="btn btn-danger"><i data-feather="x-circle"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>OMAR MORENO</td>
                                            <td>hola@omar.com</td>
                                            <td>12345667891, 1234567890</td>
                                            <td>
                                                <a class="btn btn-danger"><i data-feather="x-circle"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <form action="" method="POST">
                                <input type="hidden" name="_token" value="b2c1zkk5949q9kGS1bMVv18sbw735cj9JUQdBTAk">
                                <div class="was-validated">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg">
                                                <label for="contact">Contacto <strong class="text-danger">*</strong>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" class="text-dark-gray" data-title="El nombre del contacto debe tener al menos 2 letras" data-original-title="" title=""><i class="material-icons">help_outline</i></a>
                                                </label>
                                                <input pattern=".{2,}" title="El campo debe tener al menos 2 letras" onchange="javascript:helpers.cleanText(this);" type="text" id="contact" name="contact" class="form-control uppercaseInput" required="" placeholder="Nombre del contacto" autocomplete="off">
                                            </div>
                                            <div class="col-lg">
                                                <label for="email">Correo electrónico <strong class="text-danger">*</strong></label>
                                                <input type="email" id="email" required="" name="email" class="form-control" placeholder="Correo electrónico" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg">
                                                <label for="phone">Teléfono primario <strong class="text-danger">*</strong>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" class="text-dark-gray" data-title="La teléfono debe tener al menos 7 números" data-original-title="" title=""><i class="material-icons">help_outline</i></a></label>
                                                <input required="" pattern=".{7,}" title="El campo debe tener al menos 7 números" onchange="javascript:helpers.cleanText(this);" type="text" name="phone" id="phone" class="form-control" placeholder="Teléfono primario" autocomplete="off">
                                            </div>
                                            <div class="col-lg">
                                                <label for="phone_second">Teléfono secundario
                                                    <a href="#" data-toggle="tooltip" data-placement="top" class="text-dark-gray" data-title="La teléfono debe tener al menos 7 números" data-original-title="" title=""><i class="material-icons">help_outline</i></a></label>
                                                <input pattern=".{7,}" title="El campo debe tener al menos 7 números" onchange="javascript:helpers.cleanText(this);" type="text" id="second_phone" name="phone_second" class="form-control" placeholder="Teléfono secundario" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg text-center">
                                                <button class="btn btn-primary btn-send">Guardar</button>
                                                <a onclick="javascript:helpers.showDiv('.form-contacts', 1); return false;" href="#" class="btn btn-outline-danger">Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>