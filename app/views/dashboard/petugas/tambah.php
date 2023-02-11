<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>

<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Petugas</h1>

<?php Flasher::flash() ?>

<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Petugas</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="p-1">
                    <form action="<?= BASEURL ?>/dashboard/processtambahpetugas" method="POST" class="user">
                        <div class="form-group">
                            <label><small class="font-weight-bold">Username</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="username" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Password</small></label>
                            <input type="password" class="form-control form-control-user br-10" name="password" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Nama Petugas</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="nama_petugas" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-icon-split float-right">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once(PARTIAL_PATH . '/dashboard/footer.php') ?>