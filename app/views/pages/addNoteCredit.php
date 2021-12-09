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

    <title>Nueva Compra | P.R 77</title>

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
                        <h2 class="page-title">NUEVA NOTA DE CRÉDITO</h2>
                    </div>

                    <form action="">
                        <div class="card my-4">
                            <div class="card-body">
                                <div class="row">
                                    <!-- campo 1 -->
                                    <div class="col-sm-4" ">
                                        <div class=" form-group container">
                                        <div class="mb-3 row">
                                            <label for="Select1" class="form-label">TIPO DE CLIENTE</label> <br>
                                            <select class="js-example-basic-single col" name="state">
                                                <option selected disabled>Elige una opción</option>
                                                <option value="0">CLIENTES</option>
                                                <option value="1">PORVEEDORES</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- campo 2 -->

                                <div class="col-sm-4">
                                    <div class=" form-group container">
                                        <div class="row">
                                            <label for="Select1" class="form-label">SELECCIONA UNA OPCIÓN</label>
                                            <br>
                                            <select class="js-example-basic-single col" name="state">
                                                <option selected disabled>Elige una opción</option>
                                                <option value="0">option 1</option>
                                                <option value="1">opcion 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- campo 3 -->
                                <div class="col-sm-4">
                                    <div class="form-group container">
                                        <div class="mb-3 row">
                                            <label for="Select1" class="form-label">SELECCIONA PROYECTO </label>
                                            <br>
                                            <select class="js-example-basic-single col" name="state">
                                                <option selected disabled>Elige una opción</option>
                                                <option value="AL">opcioón 1</option>
                                                <option value="WY">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- campo 4 -->
                                <div class="col-sm-12 mx-3">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="Select1" class="form-label">IMPORTE</label>
                                            <br>
                                            <input type="number" class="form-control" id="exampleInputMobile"
                                                placeholder="Importe">
                                        </div>
                                    </div>
                                </div>
                                <!-- campo 5 -->
                                <div class="col-sm-12 mx-3">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="Select1" class="form-label">NOTAS:</label>
                                            <br>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-warning">Guardar</button>
                            </div>
                            <!--! Button succes -->
                            <center>
                                <button type="button" class="btn btn-success my-2" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-sm">
                                    Modal Success
                                </button>
                            </center>
                            <!--! Button error -->
                            <center>
                                <button type="button" class="btn btn-danger my-2" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-error">
                                    Modal Error
                                </button>
                            </center>
                    </form>

                    <!--! Modal verde-->
                    <div class="modal fade bd-example-modal-sm" tabindex="-1" aria-labelledby="mySmallModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-sm bg-success">
                            <div class="modal-content p-5 bg-success text-white">
                                <center>
                                    <h2><i class="mdi mdi-check-circle-outline"></i></h2>
                                    <h3 class="mb-3">¡Nota de crédito creada!</h3>
                                    <p class="mb-3">Se ha creado correctamente la nota de crédito</p>
                                </center>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn bg-white" data-bs-dismiss="modal">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--! Modal rojo -->
                    <div class="modal fade bd-example-modal-error" tabindex="-1" aria-labelledby="mySmallModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-sm bg-danger text-center">
                            <div class="modal-content p-5 bg-danger text-white">
                                <center>
                                    <h2><i class="mdi mdi-alert-circle-outline"></i></h2>
                                    <h3 class="mb-3">¡Error!</h3>
                                    <p class="mb-3">Ha ocurrido un error</p>
                                </center>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button type="button" class="btn bg-white" data-bs-dismiss="modal">Aceptar</button>
                                </div>
                            </div>
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