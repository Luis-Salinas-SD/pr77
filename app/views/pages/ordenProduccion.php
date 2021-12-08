<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Ordenes de Producción | P.R 77</title>

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
                    <div class="d-flex justify-content-between mb-3">
                        <h1 class="title">ORDEN DE PRODUCCIÓN #1</h1>
                        <a href="../pages/addOrden.php" class="btn btn-warning m-auto">
                            <i data-feather="plus"></i>
                            <span>Agregar</span>
                        </a>
                    </div>
                    <!-- Table 1 -->
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td>#Orden</td>
                                            <td>23</td>
                                            <td>Cliente</td>
                                            <td>CRISTIAN MORENO DÍAZ</td>
                                        </tr>
                                        <tr>
                                            <td>Fecha de Entrega</td>
                                            <td>jueves, 30 de septiembre de 2021</td>
                                            <td>Archivo</td>
                                            <td>
                                                Sin archivo
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class=" text-center">
                                <a href="#" class="btn btn-outline-success m-2">
                                    <i data-feather="plus-circle"></i>
                                    Añadir producto</a>
                                <a class="btn btn-outline-flickr waves-effect" type="button" href="#">
                                    <i data-feather="check"></i>
                                    <span>Finalizar Proyecto</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Table 2 -->
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_oproduction" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            <th>ABASTO</th>
                                            <th>ACCESORIOS</th>
                                            <th>BORDADO</th>
                                            <th>CORTE</th>
                                            <th>CONFECCIÓN</th>
                                            <th>EMPAQUE</th>
                                            <th>ENTREGADO</th>
                                            <th>SERIGRAFIA</th>
                                            <th>SUBLIMADO</th>
                                            <th>TRAZOS</th>
                                            <th>AA</th>
                                            <th>AA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="item_7">
                                            <td class="d-flex">
                                                <a href="#" class="btn btn-outline-danger" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Eliminar">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                                <p class="pt-1 ps-2">PRODUCTO UNO (MASCULINO)</p>
                                            </td>
                                            <td>
                                                <total_p_7>52</total_p_7>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>12</strong>
                                                    <span class="text-muted">/ 52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 23%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>52</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right" style="font-size: 12px">
                                                    <strong>0</strong> <span class="text-muted">/
                                                        52</span>
                                                </div>
                                                <div class="progress mb-3" style="height: 8px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 0%;" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Table 3 -->
                    <div class="card my-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-around table-responsive my-2">
                                <div class="col-7 d-flex justify-content-between">
                                    <div class="d-flex p-1">
                                        <a href="#" class="btn btn-outline-danger m-auto" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Eliminar">
                                            <i class="mdi mdi-delete"></i>
                                        </a>
                                        <p class="pt-1 ps-2">PRODUCTO UNO (MASCULINO)</p>
                                    </div>
                                </div>
                                <div class="d-flex col-5 justify-content-between">
                                    <div class="w-50">66</div>
                                    <div class="w-100 px-3">
                                        ABASTO
                                        <div class="progress mb-3" style="height: 8px;">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                style="width: 100%;"></div>
                                        </div>
                                    </div>
                                    <div class="w-100 px-3">
                                        ACCESORIOS
                                        <div class="progress mb-3" style="height: 8px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap">
                                <strong class="mx-1">Simbología:</strong>
                                <p class="m-2">
                                    <i class="mdi mdi-check mx-2 bg-warning p-1"></i>
                                    Marcar como terminado
                                </p>
                                <p class="m-2"><i class="mdi mdi-swap-horizontal bg-warning p-1"></i>
                                    Agregar a Fases
                                </p>
                                <p class="m-2"><i class="mdi mdi-note-plus bg-warning p-1"></i>
                                    Reportar Avance
                                </p>
                                <p class="m-2"><i class="mdi mdi-delete bg-warning p-1"></i>
                                    Inhabilitar Fase
                                </p>
                                <p class="m-2"><i class="mdi mdi-checkbox-marked-circle bg-warning p-1"></i>
                                    Habilitar Fase
                                </p>
                                <p class="m-2"><i class="mdi mdi-directions-fork bg-warning p-1"></i>
                                    Cambiar Proveedor
                                </p>
                            </div>
                        </div>
                        <!-- Table - 4  -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr class="mayus">
                                        <td>Producto</td>
                                        <td>Cantidad</td>
                                        <td>Abasto</td>
                                        <td>Accesorios</td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex">
                                            <a href="#" class="btn btn-outline-danger" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Eliminar">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                            <p class="pt-1 ps-2">PRODUCTO UNO (MASCULINO)</p>
                                        </td>
                                        <td>34</td>
                                        <td>
                                            <div class="text-end" style="font-size: 12px">
                                                <strong>34</strong><span class="text-muted">/ 34</span>
                                            </div>
                                            <div class="progress mb-3" style="height: 8px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <input type="checkbox" class="form-check-input m-auto" id="checkInline">
                                                <button type="button" class="btn btn-outline-success m-auto mb-md-0">
                                                    <i class="mdi mdi-check"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning m-auto">
                                                    <i class="mdi mdi-swap-horizontal"></i>
                                                </button>
                                            </div>
                                            <div
                                                class=" mt-2 border-top border-secondary bg-table d-flex justify-content-around py-3">
                                                <p class="my-auto">
                                                    Dime Estudio de diseño
                                                    <br>
                                                    <strong>0/32 de 32</strong>
                                                </p>
                                                <div class="my-auto">
                                                    <button type="button" class="btn btn-warning m-auto">
                                                        <i class="mdi mdi-note-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-warning m-auto">
                                                        <i class="mdi mdi-directions-fork"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- content -->
    </div><!-- wrapper -->

    </div>

    <!-- End custom js for this page -->
    <?php include('../includes/scripts.php') ?>
</body>



</html>