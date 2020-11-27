<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 justify-content-x">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') .$user['image']; ?>" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['nama'];?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><small class="textmuted">Jadi member sejak: <br><b><?= date('d F Y',$user['tanggal_input']); ?></b></small></p>
                </div>
                <div class="btn btn-info ml-3 my-3">
                    <a href="<?= base_url('user/ubahprofil'); ?>" class="text text-white"><i class="fas fa-user-edit"></i> Ubah Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->