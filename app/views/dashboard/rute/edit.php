<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>

<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Rute</h1>

<?php Flasher::flash() ?>

<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rute</h6>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="p-1">
                    <form action="<?= BASEURL ?>/dashboard/processeditrute" method="POST" class="user">
                        <input type="hidden" name="id_rute" value="<?= $data['rute']['id_rute'] ?>">
                        <div class="form-group">
                            <label><small class="font-weight-bold">Tujuan</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="tujuan" value="<?= $data['rute']['tujuan'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Rute Awal</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="rute_awal" value="<?= $data['rute']['rute_awal'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Rute Akhir</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="rute_akhir" value="<?= $data['rute']['rute_akhir'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Harga</small></label>
                            <input type="number" class="form-control form-control-user br-10" name="harga" value="<?= $data['rute']['harga'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Transportasi</small></label>
                            <select class="custom-select" required name="id_transportasi">
                                <option selected disabled value="">--- Transportasi ---</option>
                                <?php foreach ($data['transportasi'] as $transportasi) : ?>
                                    <option value="<?= $transportasi['id_transportasi'] ?>" <?= ($data['rute']['id_transportasi'] == $transportasi['id_transportasi']) ? 'selected' : '' ?>><?= $transportasi['keterangan'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-icon-split float-right">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Edit Data</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once(PARTIAL_PATH . '/dashboard/footer.php') ?>