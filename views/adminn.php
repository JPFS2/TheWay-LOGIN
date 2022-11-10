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

      

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart" style="min-height: 365px;"><div id="apexchartsrwgxa7c" class="apexcharts-canvas apexchartsrwgxa7c apexcharts-theme-light" style="width: 614px; height: 350px;"><svg id="SvgjsSvg1165" width="614" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="614" height="350"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" rel="1" seriesname="Sales" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Customers" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Customers" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span></div></div><style type="text/css">	
    	
      .apexcharts-legend {	
        display: flex;	
        overflow: auto;	
        padding: 0 10px;	
      }	
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {	
        flex-wrap: wrap	
      }	
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        flex-direction: column;	
        bottom: 0;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {	
        justify-content: flex-start;	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {	
        justify-content: center;  	
      }	
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {	
        justify-content: flex-end;	
      }	
      .apexcharts-legend-series {	
        cursor: pointer;	
        line-height: normal;	
      }	
      .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series{	
        display: flex;	
        align-items: center;	
      }	
      .apexcharts-legend-text {	
        position: relative;	
        font-size: 14px;	
      }	
      .apexcharts-legend-text *, .apexcharts-legend-marker * {	
        pointer-events: none;	
      }	
      .apexcharts-legend-marker {	
        position: relative;	
        display: inline-block;	
        cursor: pointer;	
        margin-right: 3px;	
        border-style: solid;
      }	
      	
      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series{	
        display: inline-block;	
      }	
      .apexcharts-legend-series.apexcharts-no-click {	
        cursor: auto;	
      }	
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {	
        display: none !important;	
      }	
      .apexcharts-inactive-legend {	
        opacity: 0.45;	
      }</style></foreignObject><g id="SvgjsG1167" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)"><defs id="SvgjsDefs1166"><clipPath id="gridRectMaskrwgxa7c"><rect id="SvgjsRect1177" width="564.640625" height="272.2" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskrwgxa7c"></clipPath><clipPath id="nonForecastMaskrwgxa7c"></clipPath><clipPath id="gridRectMarkerMaskrwgxa7c"><rect id="SvgjsRect1178" width="606.640625" height="318.2" x="-24" y="-24" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1196" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1197" stop-opacity="0.3" stop-color="rgba(65,84,241,0.3)" offset="0"></stop><stop id="SvgjsStop1198" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1199" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1218" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1219" stop-opacity="0.3" stop-color="rgba(46,202,106,0.3)" offset="0"></stop><stop id="SvgjsStop1220" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1221" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1240" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1241" stop-opacity="0.3" stop-color="rgba(255,119,29,0.3)" offset="0"></stop><stop id="SvgjsStop1242" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1243" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1173" x1="386.2512019230769" y1="0" x2="386.2512019230769" y2="270.2" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="386.2512019230769" y="0" width="1" height="270.2" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1246" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1247" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1249" font-family="Helvetica, Arial, sans-serif" x="0" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1250">00:00</tspan><title>00:00</title></text><text id="SvgjsText1252" font-family="Helvetica, Arial, sans-serif" x="85.94471153846155" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1253">01:00</tspan><title>01:00</title></text><text id="SvgjsText1255" font-family="Helvetica, Arial, sans-serif" x="171.8894230769231" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1256">02:00</tspan><title>02:00</title></text><text id="SvgjsText1258" font-family="Helvetica, Arial, sans-serif" x="257.83413461538464" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1259">03:00</tspan><title>03:00</title></text><text id="SvgjsText1261" font-family="Helvetica, Arial, sans-serif" x="343.7788461538462" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1262">04:00</tspan><title>04:00</title></text><text id="SvgjsText1264" font-family="Helvetica, Arial, sans-serif" x="429.72355769230774" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1265">05:00</tspan><title>05:00</title></text><text id="SvgjsText1267" font-family="Helvetica, Arial, sans-serif" x="515.6682692307693" y="299.2" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1268">06:00</tspan><title>06:00</title></text></g><line id="SvgjsLine1269" x1="0" y1="271.2" x2="558.640625" y2="271.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1290" class="apexcharts-grid"><g id="SvgjsG1291" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1300" x1="0" y1="0" x2="558.640625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1301" x1="0" y1="54.04" x2="558.640625" y2="54.04" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1302" x1="0" y1="108.08" x2="558.640625" y2="108.08" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1303" x1="0" y1="162.12" x2="558.640625" y2="162.12" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1304" x1="0" y1="216.16" x2="558.640625" y2="216.16" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1305" x1="0" y1="270.2" x2="558.640625" y2="270.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1292" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1293" x1="0" y1="271.2" x2="0" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1294" x1="85.94471153846155" y1="271.2" x2="85.94471153846155" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1295" x1="171.8894230769231" y1="271.2" x2="171.8894230769231" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1296" x1="257.83413461538464" y1="271.2" x2="257.83413461538464" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1297" x1="343.7788461538462" y1="271.2" x2="343.7788461538462" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1298" x1="429.72355769230774" y1="271.2" x2="429.72355769230774" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1299" x1="515.6682692307693" y1="271.2" x2="515.6682692307693" y2="277.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1307" x1="0" y1="270.2" x2="558.640625" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1306" x1="0" y1="1" x2="0" y2="270.2" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1179" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1180" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1200" d="M 0 270.2L 0 186.438C 45.1209735576923 186.438 83.79609374999998 162.12 128.9170673076923 162.12C 158.99771634615382 162.12 184.7811298076923 194.54399999999998 214.86177884615384 194.54399999999998C 244.94242788461537 194.54399999999998 270.72584134615386 132.398 300.80649038461536 132.398C 330.8871394230769 132.398 356.67055288461535 156.716 386.7512019230769 156.716C 416.83185096153846 156.716 442.6152644230769 48.635999999999996 472.69591346153845 48.635999999999996C 502.7765625 48.635999999999996 528.5599759615385 118.88799999999998 558.640625 118.88799999999998C 558.640625 118.88799999999998 558.640625 118.88799999999998 558.640625 270.2M 558.640625 118.88799999999998z" fill="url(#SvgjsLinearGradient1196)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskrwgxa7c)" pathTo="M 0 270.2L 0 186.438C 45.1209735576923 186.438 83.79609374999998 162.12 128.9170673076923 162.12C 158.99771634615382 162.12 184.7811298076923 194.54399999999998 214.86177884615384 194.54399999999998C 244.94242788461537 194.54399999999998 270.72584134615386 132.398 300.80649038461536 132.398C 330.8871394230769 132.398 356.67055288461535 156.716 386.7512019230769 156.716C 416.83185096153846 156.716 442.6152644230769 48.635999999999996 472.69591346153845 48.635999999999996C 502.7765625 48.635999999999996 528.5599759615385 118.88799999999998 558.640625 118.88799999999998C 558.640625 118.88799999999998 558.640625 118.88799999999998 558.640625 270.2M 558.640625 118.88799999999998z" pathFrom="M -1 270.2L -1 270.2L 128.9170673076923 270.2L 214.86177884615384 270.2L 300.80649038461536 270.2L 386.7512019230769 270.2L 472.69591346153845 270.2L 558.640625 270.2"></path><path id="SvgjsPath1201" d="M 0 186.438C 45.1209735576923 186.438 83.79609374999998 162.12 128.9170673076923 162.12C 158.99771634615382 162.12 184.7811298076923 194.54399999999998 214.86177884615384 194.54399999999998C 244.94242788461537 194.54399999999998 270.72584134615386 132.398 300.80649038461536 132.398C 330.8871394230769 132.398 356.67055288461535 156.716 386.7512019230769 156.716C 416.83185096153846 156.716 442.6152644230769 48.635999999999996 472.69591346153845 48.635999999999996C 502.7765625 48.635999999999996 528.5599759615385 118.88799999999998 558.640625 118.88799999999998" fill="none" fill-opacity="1" stroke="#4154f1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskrwgxa7c)" pathTo="M 0 186.438C 45.1209735576923 186.438 83.79609374999998 162.12 128.9170673076923 162.12C 158.99771634615382 162.12 184.7811298076923 194.54399999999998 214.86177884615384 194.54399999999998C 244.94242788461537 194.54399999999998 270.72584134615386 132.398 300.80649038461536 132.398C 330.8871394230769 132.398 356.67055288461535 156.716 386.7512019230769 156.716C 416.83185096153846 156.716 442.6152644230769 48.635999999999996 472.69591346153845 48.635999999999996C 502.7765625 48.635999999999996 528.5599759615385 118.88799999999998 558.640625 118.88799999999998" pathFrom="M -1 270.2L -1 270.2L 128.9170673076923 270.2L 214.86177884615384 270.2L 300.80649038461536 270.2L 386.7512019230769 270.2L 472.69591346153845 270.2L 558.640625 270.2"></path><g id="SvgjsG1181" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1183" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1184" r="4" cx="0" cy="186.438" class="apexcharts-marker no-pointer-events wf6tcpuc2" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="4"></circle><circle id="SvgjsCircle1185" r="4" cx="128.9170673076923" cy="162.12" class="apexcharts-marker no-pointer-events wfmxe4ypjg" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1186" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1187" r="4" cx="214.86177884615384" cy="194.54399999999998" class="apexcharts-marker no-pointer-events wf1vomllei" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1188" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1189" r="4" cx="300.80649038461536" cy="132.398" class="apexcharts-marker no-pointer-events wrhrgs219g" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1190" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1191" r="4" cx="386.7512019230769" cy="156.716" class="apexcharts-marker no-pointer-events wvos93rnl" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1192" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1193" r="4" cx="472.69591346153845" cy="48.635999999999996" class="apexcharts-marker no-pointer-events wx9tuf7wx" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="4"></circle></g><g id="SvgjsG1194" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1195" r="4" cx="558.640625" cy="118.88799999999998" class="apexcharts-marker no-pointer-events wq8u9p66m" stroke="#ffffff" fill="#4154f1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1202" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1222" d="M 0 270.2L 0 240.47799999999998C 45.1209735576923 240.47799999999998 83.79609374999998 183.736 128.9170673076923 183.736C 158.99771634615382 183.736 184.7811298076923 148.60999999999999 214.86177884615384 148.60999999999999C 244.94242788461537 148.60999999999999 270.72584134615386 183.736 300.80649038461536 183.736C 330.8871394230769 183.736 356.67055288461535 178.332 386.7512019230769 178.332C 416.83185096153846 178.332 442.6152644230769 129.696 472.69591346153845 129.696C 502.7765625 129.696 528.5599759615385 159.418 558.640625 159.418C 558.640625 159.418 558.640625 159.418 558.640625 270.2M 558.640625 159.418z" fill="url(#SvgjsLinearGradient1218)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskrwgxa7c)" pathTo="M 0 270.2L 0 240.47799999999998C 45.1209735576923 240.47799999999998 83.79609374999998 183.736 128.9170673076923 183.736C 158.99771634615382 183.736 184.7811298076923 148.60999999999999 214.86177884615384 148.60999999999999C 244.94242788461537 148.60999999999999 270.72584134615386 183.736 300.80649038461536 183.736C 330.8871394230769 183.736 356.67055288461535 178.332 386.7512019230769 178.332C 416.83185096153846 178.332 442.6152644230769 129.696 472.69591346153845 129.696C 502.7765625 129.696 528.5599759615385 159.418 558.640625 159.418C 558.640625 159.418 558.640625 159.418 558.640625 270.2M 558.640625 159.418z" pathFrom="M -1 270.2L -1 270.2L 128.9170673076923 270.2L 214.86177884615384 270.2L 300.80649038461536 270.2L 386.7512019230769 270.2L 472.69591346153845 270.2L 558.640625 270.2"></path><path id="SvgjsPath1223" d="M 0 240.47799999999998C 45.1209735576923 240.47799999999998 83.79609374999998 183.736 128.9170673076923 183.736C 158.99771634615382 183.736 184.7811298076923 148.60999999999999 214.86177884615384 148.60999999999999C 244.94242788461537 148.60999999999999 270.72584134615386 183.736 300.80649038461536 183.736C 330.8871394230769 183.736 356.67055288461535 178.332 386.7512019230769 178.332C 416.83185096153846 178.332 442.6152644230769 129.696 472.69591346153845 129.696C 502.7765625 129.696 528.5599759615385 159.418 558.640625 159.418" fill="none" fill-opacity="1" stroke="#2eca6a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskrwgxa7c)" pathTo="M 0 240.47799999999998C 45.1209735576923 240.47799999999998 83.79609374999998 183.736 128.9170673076923 183.736C 158.99771634615382 183.736 184.7811298076923 148.60999999999999 214.86177884615384 148.60999999999999C 244.94242788461537 148.60999999999999 270.72584134615386 183.736 300.80649038461536 183.736C 330.8871394230769 183.736 356.67055288461535 178.332 386.7512019230769 178.332C 416.83185096153846 178.332 442.6152644230769 129.696 472.69591346153845 129.696C 502.7765625 129.696 528.5599759615385 159.418 558.640625 159.418" pathFrom="M -1 270.2L -1 270.2L 128.9170673076923 270.2L 214.86177884615384 270.2L 300.80649038461536 270.2L 386.7512019230769 270.2L 472.69591346153845 270.2L 558.640625 270.2"></path><g id="SvgjsG1203" class="apexcharts-series-markers-wrap" data:realIndex="1"><g id="SvgjsG1205" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1206" r="4" cx="0" cy="240.47799999999998" class="apexcharts-marker no-pointer-events wxajc3ah7f" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="4"></circle><circle id="SvgjsCircle1207" r="4" cx="128.9170673076923" cy="183.736" class="apexcharts-marker no-pointer-events ww24xxsjh" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1208" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1209" r="4" cx="214.86177884615384" cy="148.60999999999999" class="apexcharts-marker no-pointer-events wm39hursp" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1210" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1211" r="4" cx="300.80649038461536" cy="183.736" class="apexcharts-marker no-pointer-events witp7t9jyj" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1212" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1213" r="4" cx="386.7512019230769" cy="178.332" class="apexcharts-marker no-pointer-events wloajgy51i" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1214" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1215" r="4" cx="472.69591346153845" cy="129.696" class="apexcharts-marker no-pointer-events w5ciduh7k" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="4"></circle></g><g id="SvgjsG1216" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1217" r="4" cx="558.640625" cy="159.418" class="apexcharts-marker no-pointer-events wmv66xuuf" stroke="#ffffff" fill="#2eca6a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="1" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1224" class="apexcharts-series" seriesName="Customers" data:longestSeries="true" rel="3" data:realIndex="2"><path id="SvgjsPath1244" d="M 0 270.2L 0 229.67C 45.1209735576923 229.67 83.79609374999998 240.47799999999998 128.9170673076923 240.47799999999998C 158.99771634615382 240.47799999999998 184.7811298076923 183.736 214.86177884615384 183.736C 244.94242788461537 183.736 270.72584134615386 221.564 300.80649038461536 221.564C 330.8871394230769 221.564 356.67055288461535 245.88199999999998 386.7512019230769 245.88199999999998C 416.83185096153846 245.88199999999998 442.6152644230769 205.35199999999998 472.69591346153845 205.35199999999998C 502.7765625 205.35199999999998 528.5599759615385 240.47799999999998 558.640625 240.47799999999998C 558.640625 240.47799999999998 558.640625 240.47799999999998 558.640625 270.2M 558.640625 240.47799999999998z" fill="url(#SvgjsLinearGradient1240)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskrwgxa7c)" pathTo="M 0 270.2L 0 229.67C 45.1209735576923 229.67 83.79609374999998 240.47799999999998 128.9170673076923 240.47799999999998C 158.99771634615382 240.47799999999998 184.7811298076923 183.736 214.86177884615384 183.736C 244.94242788461537 183.736 270.72584134615386 221.564 300.80649038461536 221.564C 330.8871394230769 221.564 356.67055288461535 245.88199999999998 386.7512019230769 245.88199999999998C 416.83185096153846 245.88199999999998 442.6152644230769 205.35199999999998 472.69591346153845 205.35199999999998C 502.7765625 205.35199999999998 528.5599759615385 240.47799999999998 558.640625 240.47799999999998C 558.640625 240.47799999999998 558.640625 240.47799999999998 558.640625 270.2M 558.640625 240.47799999999998z" pathFrom="M -1 270.2L -1 270.2L 128.9170673076923 270.2L 214.86177884615384 270.2L 300.80649038461536 270.2L 386.7512019230769 270.2L 472.69591346153845 270.2L 558.640625 270.2"></path><path id="SvgjsPath1245" d="M 0 229.67C 45.1209735576923 229.67 83.79609374999998 240.47799999999998 128.9170673076923 240.47799999999998C 158.99771634615382 240.47799999999998 184.7811298076923 183.736 214.86177884615384 183.736C 244.94242788461537 183.736 270.72584134615386 221.564 300.80649038461536 221.564C 330.8871394230769 221.564 356.67055288461535 245.88199999999998 386.7512019230769 245.88199999999998C 416.83185096153846 245.88199999999998 442.6152644230769 205.35199999999998 472.69591346153845 205.35199999999998C 502.7765625 205.35199999999998 528.5599759615385 240.47799999999998 558.640625 240.47799999999998" fill="none" fill-opacity="1" stroke="#ff771d" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskrwgxa7c)" pathTo="M 0 229.67C 45.1209735576923 229.67 83.79609374999998 240.47799999999998 128.9170673076923 240.47799999999998C 158.99771634615382 240.47799999999998 184.7811298076923 183.736 214.86177884615384 183.736C 244.94242788461537 183.736 270.72584134615386 221.564 300.80649038461536 221.564C 330.8871394230769 221.564 356.67055288461535 245.88199999999998 386.7512019230769 245.88199999999998C 416.83185096153846 245.88199999999998 442.6152644230769 205.35199999999998 472.69591346153845 205.35199999999998C 502.7765625 205.35199999999998 528.5599759615385 240.47799999999998 558.640625 240.47799999999998" pathFrom="M -1 270.2L -1 270.2L 128.9170673076923 270.2L 214.86177884615384 270.2L 300.80649038461536 270.2L 386.7512019230769 270.2L 472.69591346153845 270.2L 558.640625 270.2"></path><g id="SvgjsG1225" class="apexcharts-series-markers-wrap" data:realIndex="2"><g id="SvgjsG1227" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1228" r="4" cx="0" cy="229.67" class="apexcharts-marker no-pointer-events w2v7no9opk" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="2" default-marker-size="4"></circle><circle id="SvgjsCircle1229" r="4" cx="128.9170673076923" cy="240.47799999999998" class="apexcharts-marker no-pointer-events wk9iefna7l" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1230" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1231" r="4" cx="214.86177884615384" cy="183.736" class="apexcharts-marker no-pointer-events wb29dup3x" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1232" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1233" r="4" cx="300.80649038461536" cy="221.564" class="apexcharts-marker no-pointer-events wvar3opln" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1234" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1235" r="4" cx="386.7512019230769" cy="245.88199999999998" class="apexcharts-marker no-pointer-events wc75j9goy" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1236" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1237" r="4" cx="472.69591346153845" cy="205.35199999999998" class="apexcharts-marker no-pointer-events w9e205da7" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="2" default-marker-size="4"></circle></g><g id="SvgjsG1238" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskrwgxa7c)"><circle id="SvgjsCircle1239" r="4" cx="558.640625" cy="240.47799999999998" class="apexcharts-marker no-pointer-events wae37pveh" stroke="#ffffff" fill="#ff771d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="2" default-marker-size="4"></circle></g></g></g><g id="SvgjsG1182" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1204" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1226" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine1308" x1="0" y1="0" x2="558.640625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1309" x1="0" y1="0" x2="558.640625" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1310" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1311" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1312" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1313" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1314" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1172" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1270" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG1271" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1273" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1274">100</tspan><title>100</title></text><text id="SvgjsText1276" font-family="Helvetica, Arial, sans-serif" x="20" y="85.53999999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1277">80</tspan><title>80</title></text><text id="SvgjsText1279" font-family="Helvetica, Arial, sans-serif" x="20" y="139.57999999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1280">60</tspan><title>60</title></text><text id="SvgjsText1282" font-family="Helvetica, Arial, sans-serif" x="20" y="193.61999999999998" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1283">40</tspan><title>40</title></text><text id="SvgjsText1285" font-family="Helvetica, Arial, sans-serif" x="20" y="247.65999999999997" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1286">20</tspan><title>20</title></text><text id="SvgjsText1288" font-family="Helvetica, Arial, sans-serif" x="20" y="301.7" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1289">0</tspan><title>0</title></text></g></g><g id="SvgjsG1168" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 306.736px; top: 164.2px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/09/18 04:30</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 84, 241);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Sales: </span><span class="apexcharts-tooltip-text-y-value">42</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(46, 202, 106);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Revenue: </span><span class="apexcharts-tooltip-text-y-value">34</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 3; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 119, 29);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">Customers: </span><span class="apexcharts-tooltip-text-y-value">9</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light" style="left: 380.572px; top: 302.2px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 73.4062px;">19/09/18 04:30</div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->


  

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