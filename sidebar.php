<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SUA EMPRESA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmpresa"
            aria-expanded="true" aria-controls="collapseEmpresa">
            <i class="fas fa-fw fa-building"></i>
            <span>Empresa</span>
        </a>
        <div id="collapseEmpresa" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Telas:</h6>
                <a class="collapse-item" href="listar-empresa.php">Listar Empresas</a>
                <a class="collapse-item" href="cadastrar-empresa.php">Cadastrar Empresa</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetor"
            aria-expanded="true" aria-controls="collapseSetor">
            <i class="fas fa-fw fa-sitemap"></i>
            <span>Setor</span>
        </a>
        <div id="collapseSetor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Telas:</h6>
                <a class="collapse-item" href="listar-setor.php">Listar Setores</a>
                <a class="collapse-item" href="cadastrar-setor.php">Cadastrar Setor</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRelatorio"
            aria-expanded="true" aria-controls="collapseRelatorio">
            <i class="fas fa-fw fa-table"></i>
            <span>Relatório</span>
        </a>
        <div id="collapseRelatorio" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Telas:</h6>
                <a class="collapse-item" href="relatorio-empresa-setor.php">Relatório empresa/setor</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>