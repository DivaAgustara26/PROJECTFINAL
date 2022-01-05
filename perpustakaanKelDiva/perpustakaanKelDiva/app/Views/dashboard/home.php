<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Page</h3>

                        <p>Daftar Mahasiswa</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-users"></i>
                    </div>
                    <a href="mahasiswa" class="small-box-footer">More info </i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Page</h3>

                        <p>Daftar Buku</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-book"></i>
                    </div>
                    <a href="buku" class="small-box-footer">More info </i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>Page</h3>

                        <p>Peminjaman</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-book-open"></i>
                    </div>
                    <a href="peminjaman" class="small-box-footer">More info </i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>Page</h3>

                        <p>Pengembalian</p>
                    </div>
                    <div class="icon">
                        <i class="nav-bar fas fa-box-open"></i>
                    </div>
                    <a href="pengembalian" class="small-box-footer">More info</i></a>
                </div>
            </div>
</section>
<?= $this->endSection('content'); ?>