<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>


<h1 class="h3 mb-3 text-gray-600 font-weight-bold font-italic font-underlined">Dashboard</h1>
<h1 class="h3 mb-4 text-gray-800">Howdy, <b><?= $_SESSION['username'] ?></b></h1>

<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="<?= BASEURL ?>/dashboard/typetransport">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Type Transportasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-rocket fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Earnings (Monthly) Card Example -->
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="<?= BASEURL ?>/dashboard/transportasi">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Transportasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-plane fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>

    <!-- Pending Requests Card Example -->
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="<?= BASEURL . "/dashboard/petugas" ?>">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Petugas</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="<?= BASEURL . "/dashboard/rute" ?>">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Rute</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <a class="col-xl-3 col-md-6 mb-4 text-decoration-none" href="<?= BASEURL . "/dashboard/penumpang" ?>">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Penumpang</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<?php require_once(PARTIAL_PATH . '/dashboard/footer.php') ?>