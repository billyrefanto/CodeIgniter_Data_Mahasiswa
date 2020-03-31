<style>
*{
  margin:0px;
  padding:0px;
}
.card-text{
  text-align:center;
}
.nama{
  text-align:center;
}
.email{
  font-size:10pt;
}
.card{
  margin:10px;
  padding:10px;
}
.table{
  margin:3px;
}
th{
  text-align:center;
}

</style>
<div class="container">
  <?php if( $this->session->flashdata('flash') ) : ?>
  <div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
          Data Mahasiswa <strong>Berhasil!</strong> 
          <?= $this->session->flashdata('flash') ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    </div>
  </div>
  <?php endif; ?>

<div class="row mt-3">
  <div class="col-md-5">
    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah mahasiswa</a>
  </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
      <form action="" method="post">
      <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari nama mahasiswa..." name="keyword">
          <div class="input-group-append">
              <button class="btn btn-primary" type="button">Cari</button>
          </div>
      </div>
      </form>
    </div>
</div>
<h3 class="text-justify" id="mahasiswa">Data Mahasiswa D3RPLA-43-01</h3>
<?php if ( empty($mahasiswa) ) :  ?>
  <div class="alert alert-danger" role="alert">
    Data mahasiswa tidak ditemukan!
  </div>
<?php endif ?>
<table class="table">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Foto</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row"><?= $mhs['id'] ?></th>
      <td scope="row"><img src="<?= base_url() ?>assets/images/avatar.png"  width="150" height="150"></td>
      <td scope="row"><?= $mhs['nama'] ?></td>
      <td scope="row"><?= $mhs['nim'] ?></td>
      <td scope="row"><?= $mhs['email'] ?></td>
      <td scope="row">
        <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id'];?>" class="badge badge-success">ubah</a>
        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger float-right" onclick="return confirm('Apakah anda yakin?');">hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
</table>
    <!-- <?php foreach ($mahasiswa as $data) : ?>
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="foto mahasiswa">
      <div class="card-body">
        <h5 class="card-title nama"><?= $data['nama'] ?></h5>
        <p class="card-text"><?= $data['nim'] ?></p>
        <p class="card-text email"><?= $data['email'] ?></p>
        <button type="button" class="btn btn-primary" ><span class="oi oi-trash"></span>Edit</button>
        <button type="button" class="btn btn-danger">Hapus</button>
    </div>
    <?php endforeach ?> -->
</div>