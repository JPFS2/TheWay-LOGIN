<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>The Way Sistemas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6"> <img src="assets/img/logoT.png" alt="Logo"></a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100 rounded-20 border-0" type="text" placeholder="Pesquisar"
            aria-label="Pesquisar">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="login.php">Sair</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav sidebar-nav" id="sidebar-nav">

                        <li class="nav-item">
                            <a class="nav-link " href="index.html">
                                <i class="bi bi-grid"></i>
                                <span>Dashboard</span>
                            </a>
                        </li><!-- End Dashboard Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-menu-button-wide"></i><span>Components</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="components-alerts.html">
                                        <i class="bi bi-circle"></i><span>Alerts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-accordion.html">
                                        <i class="bi bi-circle"></i><span>Accordion</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-badges.html">
                                        <i class="bi bi-circle"></i><span>Badges</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-breadcrumbs.html">
                                        <i class="bi bi-circle"></i><span>Breadcrumbs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-buttons.html">
                                        <i class="bi bi-circle"></i><span>Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-cards.html">
                                        <i class="bi bi-circle"></i><span>Cards</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-carousel.html">
                                        <i class="bi bi-circle"></i><span>Carousel</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-list-group.html">
                                        <i class="bi bi-circle"></i><span>List group</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-modal.html">
                                        <i class="bi bi-circle"></i><span>Modal</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tabs.html">
                                        <i class="bi bi-circle"></i><span>Tabs</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-pagination.html">
                                        <i class="bi bi-circle"></i><span>Pagination</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-progress.html">
                                        <i class="bi bi-circle"></i><span>Progress</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-spinners.html">
                                        <i class="bi bi-circle"></i><span>Spinners</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="components-tooltips.html">
                                        <i class="bi bi-circle"></i><span>Tooltips</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Components Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-journal-text"></i><span>Forms</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="forms-elements.html">
                                        <i class="bi bi-circle"></i><span>Form Elements</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-layouts.html">
                                        <i class="bi bi-circle"></i><span>Form Layouts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-editors.html">
                                        <i class="bi bi-circle"></i><span>Form Editors</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">
                                        <i class="bi bi-circle"></i><span>Form Validation</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Forms Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="tables-general.html">
                                        <i class="bi bi-circle"></i><span>General Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tables-data.html">
                                        <i class="bi bi-circle"></i><span>Data Tables</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Tables Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-bar-chart"></i><span>Charts</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="charts-chartjs.html">
                                        <i class="bi bi-circle"></i><span>Chart.js</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts-apexcharts.html">
                                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="charts-echarts.html">
                                        <i class="bi bi-circle"></i><span>ECharts</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Charts Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                                href="#">
                                <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                                <li>
                                    <a href="icons-bootstrap.html">
                                        <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="icons-remix.html">
                                        <i class="bi bi-circle"></i><span>Remix Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="icons-boxicons.html">
                                        <i class="bi bi-circle"></i><span>Boxicons</span>
                                    </a>
                                </li>
                            </ul>
                        </li><!-- End Icons Nav -->

                        <li class="nav-heading">Pages</li>

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>Profile</span>
                            </a>
                        </li><!-- End Profile Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>F.A.Q</span>
                            </a>
                        </li><!-- End F.A.Q Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-contact.html">
                                <i class="bi bi-envelope"></i>
                                <span>Contact</span>
                            </a>
                        </li><!-- End Contact Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-register.html">
                                <i class="bi bi-card-list"></i>
                                <span>Register</span>
                            </a>
                        </li><!-- End Register Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-login.html">
                                <i class="bi bi-box-arrow-in-right"></i>
                                <span>Login</span>
                            </a>
                        </li><!-- End Login Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-error-404.html">
                                <i class="bi bi-dash-circle"></i>
                                <span>Error 404</span>
                            </a>
                        </li><!-- End Error 404 Page Nav -->

                        <li class="nav-item">
                            <a class="nav-link collapsed" href="pages-blank.html">
                                <i class="bi bi-file-earmark"></i>
                                <span>Blank</span>
                            </a>
                        </li><!-- End Blank Page Nav -->

                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Relatório salvos</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus-circle align-text-bottom"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text align-text-bottom"
                                    aria-hidden="true">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Mês Atual
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-file-text align-text-bottom"
                                    aria-hidden="true">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                Compromisso Social
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Compartilhar</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendar align-text-bottom"
                                aria-hidden="true">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            This week
                        </button>
                    </div>
                </div>

                <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="602" height="254"
                    style="display: block; width: 602px; height: 254px;"></canvas>

                <h2>Título</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                                <th scope="col">Header</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1,001</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>1,002</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                            </tr>
                            <tr>
                                <td>1,003</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,004</td>
                                <td>text</td>
                                <td>random</td>
                                <td>layout</td>
                                <td>dashboard</td>
                            </tr>
                            <tr>
                                <td>1,005</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>placeholder</td>
                            </tr>
                            <tr>
                                <td>1,006</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,007</td>
                                <td>placeholder</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>irrelevant</td>
                            </tr>
                            <tr>
                                <td>1,008</td>
                                <td>random</td>
                                <td>data</td>
                                <td>placeholder</td>
                                <td>text</td>
                            </tr>
                            <tr>
                                <td>1,009</td>
                                <td>placeholder</td>
                                <td>irrelevant</td>
                                <td>visual</td>
                                <td>layout</td>
                            </tr>
                            <tr>
                                <td>1,010</td>
                                <td>data</td>
                                <td>rich</td>
                                <td>dashboard</td>
                                <td>tabular</td>
                            </tr>
                            <tr>
                                <td>1,011</td>
                                <td>information</td>
                                <td>placeholder</td>
                                <td>illustrative</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,012</td>
                                <td>text</td>
                                <td>placeholder</td>
                                <td>layout</td>
                                <td>dashboard</td>
                            </tr>
                            <tr>
                                <td>1,013</td>
                                <td>dashboard</td>
                                <td>irrelevant</td>
                                <td>text</td>
                                <td>visual</td>
                            </tr>
                            <tr>
                                <td>1,014</td>
                                <td>dashboard</td>
                                <td>illustrative</td>
                                <td>rich</td>
                                <td>data</td>
                            </tr>
                            <tr>
                                <td>1,015</td>
                                <td>random</td>
                                <td>tabular</td>
                                <td>information</td>
                                <td>text</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>

    </main>