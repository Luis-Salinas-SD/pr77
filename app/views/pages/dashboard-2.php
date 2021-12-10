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

    <title>Dashboard | P.R 77</title>

    <?php include('../includes/header.php') ?>

</head>

<body class="sidebar-dark">
    <div class="main-wrapper">
        <!--! SideBar -->
        <?php include('../includes/sidebar.php') ?>

        <div class="page-wrapper">

            <!--! TopBar -->
            <?php include('../includes/topbar.php') ?>

            <div class="page-content">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="position-relative">
                                <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                                    <img src="https://via.placeholder.com/1560x270" class="rounded-top"
                                        alt="profile cover">
                                    <!-- <div class="backgroun-profile">
                                    </div> -->
                                </figure>
                                <div
                                    class="d-flex justify-content-between align-items-center position-absolute top-75 w-100 px-2 px-md-4 mt-n4">
                                    <div>
                                        <!-- Foto Perfil -->
                                        <img class="wd-90 rounded-circle" src="../../../public/img/user-pr77.jpg"
                                            alt="profile">
                                        <!-- Nombre -->
                                        <span class="h4 ms-3 text-dark">Usuario PR77</span>
                                    </div>
                                </div>
                            </div>
                            <!--! Menu -->

                            <ul class="nav nav-tabs nav-tabs-line d-flex justify-content-center mt-4" id="lineTab"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-line-tab" data-bs-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">Datos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-line-tab" data-bs-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">Tareas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-line-tab" data-bs-toggle="tab" href="#contact"
                                        role="tab" aria-controls="contact" aria-selected="false">Tablas</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="lineTabContent">
                                <!--!Pestaña 1  -->
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-line-tab">
                                    <div class="d-flex justify-content-center">
                                        <!--# left wrapper start -->
                                        <div class="d-none d-md-block col-md-4 col-xl-3 left-wrapper m-2">
                                            <div class="card rounded">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h6 class="card-title mb-0">About</h6>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button"
                                                                id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="icon-lg text-muted pb-3px"
                                                                    data-feather="more-horizontal"></i>
                                                            </button>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="javascript:;"><i data-feather="edit-2"
                                                                        class="icon-sm me-2"></i> <span
                                                                        class="">Edit</span></a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="javascript:;"><i data-feather="git-branch"
                                                                        class="icon-sm me-2"></i> <span
                                                                        class="">Update</span></a>
                                                                <a class="dropdown-item d-flex align-items-center"
                                                                    href="javascript:;"><i data-feather="eye"
                                                                        class="icon-sm me-2"></i> <span class="">View
                                                                        all</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>Hi! I'm Amiah the Senior UI Designer at NobleUI. We hope you
                                                        enjoy
                                                        the design and
                                                        quality of Social.
                                                    </p>
                                                    <div class="mt-3">
                                                        <label
                                                            class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
                                                        <p class="text-muted">November 15, 2015</p>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label
                                                            class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
                                                        <p class="text-muted">New York, USA</p>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label
                                                            class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                                                        <p class="text-muted">me@nobleui.com</p>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label
                                                            class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
                                                        <p class="text-muted">www.nobleui.com</p>
                                                    </div>
                                                    <div class="mt-3 d-flex social-links">
                                                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                                            <i data-feather="github"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                                            <i data-feather="twitter"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                                                            <i data-feather="instagram"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--# middle wrapper start -->
                                        <div class="col-md-8 col-xl-8 middle-wrapper m-2">
                                            <div class="row">
                                                <div class="col-md-12 grid-margin">
                                                    <div class="card rounded">
                                                        <div class="card-header">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="img-xs rounded-circle"
                                                                        src="https://via.placeholder.com/37x37" alt="">
                                                                    <div class="ms-2">
                                                                        <p>Mike Popescu</p>
                                                                        <p class="tx-11 text-muted">1 min ago</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn p-0" type="button"
                                                                        id="dropdownMenuButton2"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i class="icon-lg pb-3px"
                                                                            data-feather="more-horizontal"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton2">
                                                                        <a class="dropdown-item d-flex align-items-center"
                                                                            href="javascript:;"><i data-feather="meh"
                                                                                class="icon-sm me-2"></i> <span
                                                                                class="">Unfollow</span></a>
                                                                        <a class="dropdown-item d-flex align-items-center"
                                                                            href="javascript:;"><i
                                                                                data-feather="corner-right-up"
                                                                                class="icon-sm me-2"></i> <span
                                                                                class="">Go
                                                                                to post</span></a>
                                                                        <a class="dropdown-item d-flex align-items-center"
                                                                            href="javascript:;"><i
                                                                                data-feather="share-2"
                                                                                class="icon-sm me-2"></i> <span
                                                                                class="">Share</span></a>
                                                                        <a class="dropdown-item d-flex align-items-center"
                                                                            href="javascript:;"><i data-feather="copy"
                                                                                class="icon-sm me-2"></i> <span
                                                                                class="">Copy
                                                                                link</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet,
                                                                consectetur
                                                                adipisicing elit.
                                                                Accusamus minima
                                                                delectus nemo unde quae recusandae assumenda.</p>
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/689x430" alt="">
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="d-flex post-actions">
                                                                <a href="javascript:;"
                                                                    class="d-flex align-items-center text-muted me-4">
                                                                    <i class="icon-md" data-feather="heart"></i>
                                                                    <p class="d-none d-md-block ms-2">Like</p>
                                                                </a>
                                                                <a href="javascript:;"
                                                                    class="d-flex align-items-center text-muted me-4">
                                                                    <i class="icon-md"
                                                                        data-feather="message-square"></i>
                                                                    <p class="d-none d-md-block ms-2">Comment</p>
                                                                </a>
                                                                <a href="javascript:;"
                                                                    class="d-flex align-items-center text-muted">
                                                                    <i class="icon-md" data-feather="share"></i>
                                                                    <p class="d-none d-md-block ms-2">Share</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card rounded">
                                                        <div class="card-header">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between">
                                                                <div class="d-flex align-items-center">
                                                                    <img class="img-xs rounded-circle"
                                                                        src="https://via.placeholder.com/37x37" alt="">
                                                                    <div class="ms-2">
                                                                        <p>Mike Popescu</p>
                                                                        <p class="tx-11 text-muted">5 min ago</p>
                                                                    </div>
                                                                </div>
                                                                <div class="dropdown">
                                                                    <button class="btn p-0" type="button"
                                                                        id="dropdownMenuButton3"
                                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i class="icon-lg pb-3px"
                                                                            data-feather="more-horizontal"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu"
                                                                        aria-labelledby="dropdownMenuButton3">
                                                                        <a class="dropdown-item d-flex align-items-center"
                                                                            href="javascript:;"><i data-feather="meh"
                                                                                class="icon-sm me-2"></i> <span
                                                                                class="">Unfollow</span></a>
                                                                        <a class="dropdown-item d-flex align-items-center"
                                                                            href="javascript:;"><i
                                                                                data-feather="corner-right-up"
                                                                                class="icon-sm me-2"></i> <span
                                                                                class="">Go
                                                                                to post</span></a>
                                                                        <a class="dropdown-item d-flex align-items-center"
                                                                            href="javascript:;"><i
                                                                                data-feather="share-2"
                                                                                class="icon-sm me-2"></i> <span
                                                                                class="">Share</span></a>
                                                                        <a class="dropdown-item d-flex align-items-center"
                                                                            href="javascript:;"><i data-feather="copy"
                                                                                class="icon-sm me-2"></i> <span
                                                                                class="">Copy
                                                                                link</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="mb-3 tx-14">Lorem ipsum dolor sit amet,
                                                                consectetur
                                                                adipisicing elit.
                                                            </p>
                                                            <img class="img-fluid"
                                                                src="https://via.placeholder.com/689x430" alt="">
                                                        </div>
                                                        <div class="card-footer">
                                                            <div class="d-flex post-actions">
                                                                <a href="javascript:;"
                                                                    class="d-flex align-items-center text-muted me-4">
                                                                    <i class="icon-md" data-feather="heart"></i>
                                                                    <p class="d-none d-md-block ms-2">Like</p>
                                                                </a>
                                                                <a href="javascript:;"
                                                                    class="d-flex align-items-center text-muted me-4">
                                                                    <i class="icon-md"
                                                                        data-feather="message-square"></i>
                                                                    <p class="d-none d-md-block ms-2">Comment</p>
                                                                </a>
                                                                <a href="javascript:;"
                                                                    class="d-flex align-items-center text-muted">
                                                                    <i class="icon-md" data-feather="share"></i>
                                                                    <p class="d-none d-md-block ms-2">Share</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--!Pestaña 2  -->
                                <div class="tab-pane fade" id="profile" role="tabpanel"
                                    aria-labelledby="profile-line-tab">
                                    <div class="row d-flex justify-content-center">
                                        <!--# middle wrapper start -->
                                        <div class="row">
                                            <!--& Panel Proyectos  -->
                                            <div class="col-5 col-md-3 pe-0">
                                                <div class="nav nav-tabs nav-tabs-vertical" id="v-tab" role="tablist"
                                                    aria-orientation="vertical">
                                                    <a class="nav-link active" id="v-home-tab" data-bs-toggle="pill"
                                                        href="#pro1" role="tab" aria-controls="pro1"
                                                        aria-selected="true">Proyecto 1</a>
                                                    <a class="nav-link" id="v-profile-tab" data-bs-toggle="pill"
                                                        href="#v-profile" role="tab" aria-controls="v-profile"
                                                        aria-selected="false">Proyecto 2</a>
                                                    <a class="nav-link" id="v-messages-tab" data-bs-toggle="pill"
                                                        href="#v-messages" role="tab" aria-controls="v-messages"
                                                        aria-selected="false">Proyecto 3</a>
                                                    <a class="nav-link" id="v-settings-tab" data-bs-toggle="pill"
                                                        href="#v-settings" role="tab" aria-controls="v-settings"
                                                        aria-selected="false">Proyecto 4</a>
                                                </div>
                                            </div>
                                            <div class="col-7 col-md-9 ps-0">
                                                <div class="tab-content tab-content-vertical border p-3"
                                                    id="v-tabContent">
                                                    <!--! Proyecto 1  Tareas-->
                                                    <div class="tab-pane fade show active" id="pro1" role="tabpanel"
                                                        aria-labelledby="v-home-tab">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        Tarea #1
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        Hacer algo 1
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingTwo">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        Tarea #2
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        Hacer algo 2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingThree">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Tarea #3
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        Hacer algo 3
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--! Proyecto 2  Tareas-->
                                                    <div class="tab-pane fade" id="v-profile" role="tabpanel"
                                                        aria-labelledby="v-profile-tab">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        Tarea #1
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the first item's accordion
                                                                            body.</strong> It is shown by default, until
                                                                        the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingTwo">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        Tarea #2
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the second item's accordion
                                                                            body.</strong> It is hidden by default,
                                                                        until the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingThree">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Tarea #3
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the third item's accordion
                                                                            body.</strong> It is hidden by default,
                                                                        until the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--! Proyecto 3  Tareas-->
                                                    <div class="tab-pane fade" id="v-messages" role="tabpanel"
                                                        aria-labelledby="v-messages-tab">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        Tarea #1
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the first item's accordion
                                                                            body.</strong> It is shown by default, until
                                                                        the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingTwo">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        Tarea #2
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the second item's accordion
                                                                            body.</strong> It is hidden by default,
                                                                        until the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingThree">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Tarea #3
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the third item's accordion
                                                                            body.</strong> It is hidden by default,
                                                                        until the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--! Proyecto 4  Tareas-->
                                                    <div class="tab-pane fade" id="v-settings" role="tabpanel"
                                                        aria-labelledby="v-settings-tab">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button" type="button"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                        Tarea #1
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse show"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the first item's accordion
                                                                            body.</strong> It is shown by default, until
                                                                        the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingTwo">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        Tarea #2
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseTwo"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the second item's accordion
                                                                            body.</strong> It is hidden by default,
                                                                        until the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingThree">
                                                                    <button class="accordion-button collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        Tarea #3
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <strong>This is the third item's accordion
                                                                            body.</strong> It is hidden by default,
                                                                        until the collapse
                                                                        plugin adds the appropriate classes that we use
                                                                        to style each element. These classes control the
                                                                        overall
                                                                        appearance, as well as the showing and hiding
                                                                        via CSS transitions. You can modify any of this
                                                                        with
                                                                        custom CSS or overriding our default variables.
                                                                        It's also worth noting that just about any HTML
                                                                        can go
                                                                        within the <code>.accordion-body</code>, though
                                                                        the transition does limit overflow.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--!Pestaña 3  -->
                                <div class="tab-pane fade" id="contact" role="tabpanel"
                                    aria-labelledby="contact-line-tab">
                                    <div class="row d-flex justify-content-center">
                                        <div class="row d-flex justify-content-around py-5">
                                            <!-- Tabla 1 -->
                                            <table class="table-responsive col-lg-5 col-11">
                                                <thead class="bg-thead">
                                                    <tr>
                                                        <th>Cuentas por cobrar</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="txt-table">
                                                        <td>Municipio de Celaya</td>
                                                        <td class="text-end px-2">$ 14,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Municipio de Aguascalientes</td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Gobierno del Estado de Guerrero
                                                        </td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Gobierno del estado de Guanajuato
                                                        </td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="t-foot">
                                                        <td class=>Total</td>
                                                        <td class="text-end px-2">$ 15,900.00</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- Tabla 2 -->
                                            <table class="table-responsive col-lg-5 col-11">
                                                <thead class="bg-thead">
                                                    <tr>
                                                        <th>Cuentas por cobrar</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="txt-table">
                                                        <td>Municipio de Celaya</td>
                                                        <td class="text-end px-2">$ 14,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Municipio de Aguascalientes</td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Gobierno del Estado de Guerrero
                                                        </td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Gobierno del estado de Guanajuato
                                                        </td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="t-foot">
                                                        <td class=>Total</td>
                                                        <td class="text-end px-2">$ 15,900.00</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- Tabla 3 -->
                                            <table class="table-responsive col-lg-5 col-11 mt-4">
                                                <thead class="bg-thead">
                                                    <tr>
                                                        <th>Cuentas por cobrar</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="txt-table">
                                                        <td>Municipio de Celaya</td>
                                                        <td class="text-end px-2">$ 14,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Municipio de Aguascalientes</td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Gobierno del Estado de Guerrero
                                                        </td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="txt-table">
                                                        <td>Gobierno del estado de Guanajuato
                                                        </td>
                                                        <td class="text-end px-2">$ 1,900.00</td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sec">
                                                                <i class="mdi mdi-eye mx-2"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="t-foot">
                                                        <td class=>Total</td>
                                                        <td class="text-end px-2">$ 15,900.00</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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