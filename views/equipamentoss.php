<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Way sistemas</title>
    <link href="assets/img/icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <h1 class="logo me-auto px-3 py-2"><a href="admin.php"> <img src="assets/img/logoT.png" alt="Logo"></a></h1>

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Cadastro
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-users"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Dados</h6>
                        <a class="collapse-item" href="clientes.php">Empresa</a>
                        <a class="collapse-item" href="funcionarios.php">Funcionários</a>
                        <a class="collapse-item" href="equipamentos.php">Equipamentos</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="sidebar-heading">
                Utilitários
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="uteis.php">
                    <i class="fa fa-th-large"></i>
                    <span>Úteis</span></a>
            </li>
            <!-- Divider -->


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <h1 class="d-inline-flex p-2 h3 mb-0 tex  t-gray-999">Equipamentos</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Galinha o Cachorro · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Leia mais
                                    mensagens</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-900 small"><?= $_SESSION['usuario']?></span>
                                <img class="img-profile rounded-circle" src="assets\img\icon.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="perfil.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="" data-target="#">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <p class="mb-4"><a target="_blank" href="https://datatables.net"></a></p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-0">

                                <div class="col-md-6 offset-md-0 align-self-start">
                                    <div>
                                        <form method='POST' action='equipamentos.php'
                                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-2 my-md-0 mw-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" name="pesquisa"
                                                    class="form-control bg-white border-1 small"
                                                    placeholder="Pesquisar..." aria-label="Search"
                                                    aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                                    data-toggle="modal" data-target="#logoutModal"><i
                                        class="fas fa-plus fa-sm text-white-50"></i></a>

                            </div>
                        </div>
                        <div class="card-body">
                            <?php if(isset($_SESSION['aviso'])){
                            echo "<div class= 'alert alert-success' role='alert'>";
                            echo $_SESSION['aviso'];
                            echo "</div>";

                            $_SESSION['aviso'] = '';
                            unset( $_SESSION['aviso']);
                            }
                            ?>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Tipo</th>
                                            <th>Empresa</th>
                                            <th>Localização</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($con as $lista): ?>
                                        <tr>
                                            <th><?= $lista['nome'] ?></th>
                                            <th><?= $lista['tipoequipa'] ?></th>
                                            <th>
                                                <?php 
                                                foreach($empresas as $cliente):
                                                if ($lista['empresa'] == $cliente['codcli']){
                                                    echo  $cliente['fantasia'] ;    
                                                }                                             
                                                                                           
                                                endforeach ?>
                                            </th>

                                            <th><?= $lista['localizacao'] ?></th>


                                            <th>

                                                <button type="button" class="btn btn-xs btn-warning" data-toggle="modal"
                                                    data-target="#exampleModal"
                                                    data-whatever="<?= $lista['codequipa'] ?>"
                                                    data-whatevernome="<?= $lista['nome'] ?>"
                                                    data-whateverdetalhes="<?= $lista['localizacao'] ?>"
                                                    data-whateveracesso="<?= $lista['acesso'] ?>"
                                                    data-whatevertipoacesso="<?= $lista['tipoacesso'] ?>"
                                                    data-whateversenha="<?= $lista['Senha'] ?>"
                                                    data-whatevertipo="<?= $lista['tipoequipa'] ?>"
                                                    data-whateverip="<?= $lista['ip'] ?>"
                                                    data-whatevercodempresa="<?= $lista['empresa'] ?>">
                                                    <i class="fa fa-pencil-square-o" style="font-size:24px"></i>
                                                </button>

                                                <a href="excluirE.php?id=<?= $lista['codequipa'] ?>"
                                                    onclick="return confirm('Tem certeza que deseja excluir este registro?')">
                                                    <button type="button" class="btn btn-danger">
                                                        <i class='fa fa-trash-o' style='font-size:24px'></i>
                                                    </button>
                                                </a>
                                            </th>
                                        </tr>
                                        <?php endforeach ?>

                                        <!-- modaEdit-->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close"><span
                                                                aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="exampleModalLabel">Curso</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method='POST' action='EditarE.php'
                                                            class="needs-validation" novalidate>
                                                            <div class="modal-body">
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-7">
                                                                        <label for="validationCustomname">Nome</label>
                                                                        <input type="hidden" name=" id-curso" class="form-control" id="id-curso"
                                                hidde>
                                                                        <input type="text" name="recipient-name"
                                                                            class="form-control" id="recipient-name"
                                                                            placeholder="" required>
                                                                        <div class="invalid-feedback">
                                                                            Por favor, informe um nome válido.
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-5">
                                                                        <label for="inputEstado">Tipo de
                                                                            Equipamento</label>
                                                                        <select name="tipoequipa" id="tipoequipa"
                                                                            class="form-control">
                                                                            <option selected></option>
                                                                            <option>Computador</option>
                                                                            <option>Mobile</option>
                                                                            <option>Impressora</option>
                                                                            <option>Maquineta</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label for="inputEstado">Empresa</label>

                                                                        <select id="empresa" name="empresa"
                                                                            class="form-control">
                                                                            <option selected="selected"></option>
                                                                            <?php foreach($empresas as $cliente): ?>
                                                                            <option value="<?= $cliente['codcli'] ?>">
                                                                                <?= $cliente['fantasia'] ?>
                                                                            </option>
                                                                            <?php endforeach ?>

                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-7">
                                                                        <label
                                                                            for="validationCustomname">Localização</label>
                                                                        <input type="text" name="localizacao"
                                                                            class="form-control" id="localizacao"
                                                                            placeholder="" required>
                                                                        <div class="invalid-feedback">
                                                                            Por favor, informe uma localização válida.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 mb-3">
                                                                        <label for="validationCustom03">IP</label>
                                                                        <input type="text" name="ip"
                                                                            class="form-control" id="ip" placeholder=""
                                                                            required>
                                                                        <div class="invalid-feedback">
                                                                            Por favor, inserir IP válido.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="validationCustom03">Acesso</label>
                                                                        <input type="text" name="acesso"
                                                                            class="form-control" id="acesso"
                                                                            placeholder="" required>
                                                                        <div class="invalid-feedback">
                                                                            Por favor, inserir acesso válido.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="validationCustomname">Senha</label>
                                                                        <input type="text" name="senha"
                                                                            class="form-control" id="senha"
                                                                            placeholder="" required>
                                                                        <div class="invalid-feedback">
                                                                            Por favor, informe uma senha válida.
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                        <label for="validationCustomname">Tipo de acesso</label>
                                                                        <input type="text" name="tipoacesso"
                                                                            class="form-control" id="tipoacesso"
                                                                            placeholder="" required>
                                                                        <div class="invalid-feedback">
                                                                            Por favor, informe uma senha válida.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary" type="button"
                                                                        data-dismiss="modal">Cancel</button>
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Editar</button>
                                                                </div>


                                                            </div>
                                                        </form>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>




                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Cadastro de Equipamentos</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form method='POST' action='cadastraE.php' class="needs-validation" novalidate>
                            <div class="modal-body">
                                <form method='POST' action='cadastraE.php' class="needs-validation" novalidate>
                                    <div class="modal-body">
                                        <div class="form-row">
                                            <div class="form-group col-md-7">
                                                <label for="validationCustomname">Nome</label>
                                                <input type="text" name="nome" class="form-control" id="nome"
                                                    placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Por favor, informe um nome válido.
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="inputEstado">Tipo de
                                                    Equipamento</label>
                                                <select name="tipoequipa" id="tipoequipa" class="form-control">
                                                    <option selected></option>
                                                    <option>Computador</option>
                                                    <option>Mobile</option>
                                                    <option>Impressora</option>
                                                    <option>Maquineta</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="inputEstado">Empresa</label>

                                                <select id="empresa" name="empresa" class="form-control">
                                                    <option selected="selected"></option>
                                                    <?php foreach($empresas as $cliente): ?>
                                                    <option value="<?= $cliente['codcli'] ?>">
                                                        <?= $cliente['fantasia'] ?>
                                                    </option>
                                                    <?php endforeach ?>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-7">
                                                <label for="validationCustomname">Localização</label>
                                                <input type="text" name="localizacao" class="form-control"
                                                    id="validationCustomname" placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Por favor, informe uma localização válida.
                                                </div>
                                            </div>
                                            <div class="col-md-5 mb-3">
                                                <label for="validationCustom03">IP</label>
                                                <input type="text" name="ip" class="form-control"
                                                    id="validationCustom03" placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Por favor, inserir IP válido.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03">Acesso</label>
                                                <input type="text" name="acesso" class="form-control"
                                                    id="validationCustom03" placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Por favor, inserir acesso válido.
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustomname">Senha</label>
                                                <input type="password" name="senha" class="form-control" id="senha"
                                                    placeholder="" required>
                                                <div class="invalid-feedback">
                                                    Por favor, informe uma senha válida.
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-check">
                                                    <div class="form-check">
                                                        <input name="tipoacesso" value="Anydesk"
                                                            class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            AnyDesk
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input name="tipoacesso" value="Área de Trabalho Remota"
                                                            class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Área de Trabalho Remota
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input name="tipoacesso" value="TeamViewer"
                                                            class="form-check-input" type="radio"
                                                            name="flexRadioDefault" id="flexRadioDefault3" checked>
                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                            TeamViewer
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                                        </div>


                                    </div>
                                </form>


                            </div>
                    </div>

                    </form>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
                    </script>
                    <!-- Include all compiled plugins (below), or include individual files as needed -->
                    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                    <script type="text/javascript">
                    $('#exampleModal').on('show.bs.modal', function(event) {
                        var button = $(event
                            .relatedTarget) // Button that triggered the modal
                        var recipient = button.data(
                            'whatever') // Extract info from data-* attributes
                        var recipientnome = button.data('whatevernome')
                        var whatevertipo = button.data('whatevertipo')
                        var recipientdetalhes = button.data('whateverdetalhes')
                        var whateversenha = button.data('whateversenha')
                        var whateverip = button.data('whateverip')
                        var whatevercodempresa = button.data('whatevercodempresa')
                        var whateveracesso = button.data('whateveracesso')
                        var whatevertipoacesso = button.data('whatevertipoacesso')


                        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                        var modal = $(this)
                        modal.find('.modal-title').text('ID ' + recipient)
                        modal.find('#id-curso').val(recipient)
                        modal.find('#recipient-name').val(recipientnome)
                        modal.find('#localizacao').val(recipientdetalhes)
                        modal.find('#senha').val(whateversenha)
                        modal.find('#ip').val(whateverip)
                        modal.find('#tipoequipa').val(whatevertipo)
                        modal.find('#acesso').val(whateveracesso)
                        modal.find('#empresa').val(whatevercodempresa)
                        modal.find('#tipoacesso').val(whatevertipoacesso)

                    })
                    </script>


                    <!-- Scroll to Top Button-->
                    <a class="scroll-to-top rounded" href="#page-top">
                        <i class="fas fa-angle-up"></i>
                    </a>



                    <script>
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
                            var forms = document.getElementsByClassName('needs-validation');
                            // Faz um loop neles e evita o envio
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                    </script>

                    <!-- Bootstrap core JavaScript-->
                    <script src="assets/vendor/jquery/jquery.min.js"></script>
                    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="assets/js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                    <script src="assets/vendor/chart.js/Chart.min.js"></script>

                    <!-- Page level custom scripts -->
                    <script src="assets/js/demo/chart-area-demo.js"></script>
                    <script src="assets/js/demo/chart-pie-demo.js"></script>