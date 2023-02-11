<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>

<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Penumpang</h1>

<?php Flasher::flash() ?>

<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Penumpang</h6>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="p-1">
                    <form action="<?= BASEURL ?>/dashboard/processeditpenumpang" method="POST" class="user">
                        <input type="hidden" name="id_penumpang" value="<?= $data['penumpang']['id_penumpang'] ?>">
                        <div class="form-group">
                            <label><small class="font-weight-bold">Username</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="username" value="<?= $data['penumpang']['username'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Nama</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="nama_penumpang" value="<?= $data['penumpang']['nama_penumpang'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Alamat</small></label>
                            <input type="text" class="form-control form-control-user br-10" name="alamat_penumpang" value="<?= $data['penumpang']['alamat_penumpang'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Tgl. Lahir</small></label>
                            <input type="date" class="form-control form-control-user br-10" name="tanggal_lahir" value="<?= $data['penumpang']['tanggal_lahir'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">Jenis Kelamin</small></label>
                            <select class="custom-select" required name="jenis_kelamin">
                                <option selected disabled value="">--- Jenis Kelamin ---</option>
                                <option value="laki-laki" <?= ($data['penumpang']['jenis_kelamin'] == 'laki-laki') ? 'selected' : '' ?>>Laki-Laki</option>
                                <option value="perempuan" <?= ($data['penumpang']['jenis_kelamin'] == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><small class="font-weight-bold">No. Telp</small></label>
                            <input type="number" class="form-control form-control-user br-10" name="telefone" value="<?= $data['penumpang']['telefone'] ?>" required>
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