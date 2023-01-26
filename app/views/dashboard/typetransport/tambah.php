<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>

<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Type Transportasi</h1>

<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Type Transportasi</h6>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="p-1">
                    <form action="<?= BASEURL ?>/dashboard/processtypetransport" method="POST" class="user">
                        <div class="form-group">
                            <label><small class="font-weight-bold">Nama Type</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="nama_type" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Keterangan</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="keterangan" required>
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