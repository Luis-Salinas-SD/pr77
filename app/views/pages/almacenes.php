<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Etapas de Producción | H&A</title>

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
                        <h1 class="title">
                            ALMACENES
                        </h1>
                        <a href="../pages/addAlmacen.php" class="btn btn-warning m-lg-3">
                            <i data-feather="plus"></i>
                            <span>Agregar</span>
                        </a>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <form action="">
                                <div class="row">
                                    <!-- Campo 1 -->
                                    <div class="col-sm-4">
                                        <div class="form-group d-flex">
                                            <div class="mb-3 col-12">
                                                <label class="form-label">UBICACIÓN</label>
                                                <select class="js-example-basic-single form-select" data-width="100%">
                                                    <option selected disabled>Selecciona una ubicación</option>
                                                    <option>New York</option>
                                                    <option>Florida</option>
                                                    <option>Kansas</option>
                                                    <option>Hawaii</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Campo 2 -->
                                    <div class="col-sm-7">
                                        <div class="form-group d-flex">
                                            <div class="mb-3 col-10 mx-3">
                                                <label class="form-label">BUSCAR</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <button type="button" class="btn btn-outline-warning mt-4">
                                                    <i data-feather="search"></i>
                                                    Buscar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Table -->
                <div class="table-responsive pt-3">
                    <table class="table table-sm">
                        <thead class="table-warning">
                            <tr class="text-center">
                                <th>NOMBRE</th>
                                <th>DESCRIPCIÓN</th>
                                <th>ESTATUS</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>
                                    Toluca
                                </td>
                                <td>mi información </td>
                                <td>
                                    <span class="badge bg-success p-2">Activo</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="mdi mdi-eye"></i></a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                        <i class="mdi mdi-lead-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="mdi mdi-close-circle-outline"></i></a>
                                    <a href="#" class="btn btn-sm btn-success">
                                        <i class="mdi mdi-check-circle-outline"></i></a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td>
                                    París
                                </td>
                                <td>mi info</td>
                                <td>
                                    <span class="badge bg-danger p-2">Inactivo</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="mdi mdi-eye"></i></a>
                                    <a href="../pages/addAlmacen.php" class="btn btn-sm btn-primary">
                                        <i class="mdi mdi-lead-pencil"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger">
                                        <i class="mdi mdi-close-circle-outline"></i></a>
                                    <a href="#" class="btn btn-sm btn-success">
                                        <i class="mdi mdi-check-circle-outline"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>

</html>