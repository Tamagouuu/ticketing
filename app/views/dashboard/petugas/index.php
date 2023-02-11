<?php require_once(PARTIAL_PATH . '/dashboard/header.php') ?>


<h1 class="h3 mb-2 text-gray-800 font-weight-bold mb-4">Petugas</h1>

<a href="<?= BASEURL ?>/dashboard/tambahpetugas" class="btn btn-success btn-icon-split mb-4">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
    </span>
    <span class="text">Tambah Data</span>
</a>

<?php Flasher::flash() ?>

<div class="card shadow mb-4 mt-2">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Petugas</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Nama Petugas</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Username</th>
                        <th>Nama Petugas</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($data['petugas'] as $petugas) : ?>
                        <?php if ($petugas['nama_level'] == 'administrator') continue; ?>
                        <tr>
                            <td><?= $petugas['username'] ?></td>
                            <td><?= $petugas['nama_petugas'] ?></td>
                            <td><?= $petugas['nama_level'] ?></td>
                            <td>
                                <?= Components::editButton("/dashboard/editpetugas/{$petugas['id_petugas']}") ?>
                                <?= Components::deleteButton("/dashboard/deletepetugas/{$petugas['id_petugas']}") ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once(PARTIAL_PATH . '/dashboard/footer.php') ?>