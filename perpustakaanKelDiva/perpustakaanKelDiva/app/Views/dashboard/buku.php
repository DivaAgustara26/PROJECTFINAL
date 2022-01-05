<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<!-- /.card-header -->
<div class="card-body">

    <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('message'); ?>

            <button type="button" class="close" data-dismiss="alert" aria- label="Close">

                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <a href="<?= base_url('/buku/create'); ?>" class="btn btn-primary">Tambah</a>

    <hr />
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Judul Buku</th>
                <th>Jenis Buku</th>
                <th>Stok</th>
                <th>No Rak</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($buku as $row) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->kode_buku; ?></td>
                    <td><?= $row->nama_buku; ?></td>
                    <td><?= $row->jenis_buku; ?></td>
                    <td><?= $row->stok; ?></td>
                    <td><?= $row->no_rak; ?></td>
                    <td>

                        <a title="Edit" href="<?= base_url("buku/edit/$row->kode_buku"); ?>" class="btn btn-info">Edit</a>
                        <a title="Delete" href="<?= base_url("buku/delete/$row->kode_buku") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Delete</a>
                    </td>

                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
<!-- /.card-body -->
<?= $this->endSection('content'); ?>