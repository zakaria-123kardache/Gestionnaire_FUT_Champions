<?php
            include('./conexion.php');
        ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Gestion Player</title>
  <link rel="stylesheet" href="./Assets/dashbord/style.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>




<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <h3 class="text-success"><img src="./Assets/img/logg.jpg" width="35"><span class="text-info">FUT</span>SCHAMPION</h3> 
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a>
                 
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <!-- <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bar-chart"></i> Player
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-chat"></i> club
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bookmarks"></i> nationalites
                        </a>
                    </li>
                
                </ul> -->
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
               
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto ">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ">
                                <img src="./Assets/img/logg.jpg" width="40">FUT_Champions </h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                <!-- <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a> -->
                                <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create New Player</span>
                                </a>
                                <!-- <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-gear-wide-connected"></i>
                                    </span>
                                    <span>Manage</span>
                                </a> -->
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
               
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Applications</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <!-- <th scope="col">photo</th> -->
                                    <!-- <th scope="col">Position</th> -->
                                    <th scope="col">nationalites</th>
                                    <th scope="col">club</th>
                                    <th scope="col">rating</th>
                                    <th scope="col" class="text-center">Action</th>
                                    <!-- <th scope="col">pace</th>
                                    <th scope="col">shooting</th>
                                    <th scope="col">passing</th>
                                    <th scope="col">dribbling</th>
                                    <th scope="col">defending</th>
                                    <th scope="col">physical</th> -->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://cdn.sofifa.net/players/158/023/25_120.png" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Lionel Messi
                                        </a>
                                    </td>
                                   
                                    <td>
                                        <img alt="..." src="https://cdn.sofifa.net/flags/ar.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                            Argentina
                                    </td>
                                    <td>
                                        <img alt="..." src="https://cdn.sofifa.net/meta/team/239235/120.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                            Inter Miami
                                        </a>
                                    </td>
                                 
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>93
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        
                                        <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                            
                                            <span>View</span>
                                        </a>

                                        <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                            <span class=" pe-2">
                                                <i class="bi bi-pencil"></i>
                                            </span>
                                            <span>Edit</span>
                                        </a>
                                        <!-- <a href="#" class="btn btn-sm btn-neutral">Edit</a> -->
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img alt="..." src="https://cdn.sofifa.net/players/158/023/25_120.png" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Lionel Messi
                                        </a>
                                    </td>
                                   
                                    <td>
                                        <img alt="..." src="https://cdn.sofifa.net/flags/ar.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                            Argentina
                                    </td>
                                    <td>
                                        <img alt="..." src="https://cdn.sofifa.net/meta/team/239235/120.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                            Inter Miami
                                        </a>
                                    </td>
                                 
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>93
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        
                                        <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                            
                                            <span>View</span>
                                        </a>

                                        <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                            <span class=" pe-2">
                                                <i class="bi bi-pencil"></i>
                                            </span>
                                            <span>Edit</span>
                                        </a>
                                        <!-- <a href="#" class="btn btn-sm btn-neutral">Edit</a> -->
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                              
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <!-- <span class="text-muted text-sm">Showing 10 items out of 250 results found</span> -->
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-info text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="./Assets/dashbord/script.js"></script>
</body>
</html>