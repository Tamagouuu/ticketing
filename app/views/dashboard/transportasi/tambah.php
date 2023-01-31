<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>

<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Transportasi</h1>

<?php Flasher::flash() ?>

<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Transportasi</h6>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="p-1">
                    <form action="<?= BASEURL ?>/dashboard/processtambahtransportasi" method="POST" class="user">
                        <div class="form-group">
                            <label><small class="font-weight-bold">Kode</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="kode" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Jumlah Kursi</small></label>
                            <input type="number" class="form-control form-control-user br-10" name="jumlah_kursi" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Keterangan</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="keterangan" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Type Transportasi</small></label>
                            <select class="custom-select" required name="id_type">
                                <option selected disabled value="">--- Type Transportasi ---</option>
                                <?php foreach ($data['typeTransport'] as $type) : ?>
                                    <option value="<?= $type['id_type_transportasi'] ?>"><?= $type['nama_type'] . ' - ' . $type['keterangan'] ?></option>
                                <?php endforeach ?>
                            </select>
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