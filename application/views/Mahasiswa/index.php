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
<h1 class="text-justify" id="mahasiswa">Data Mahasiswa D3RPLA-43-01</h1>
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
      <th scope="row"> <img src="<?php echo base_url(); ?>assets/foto/" width="150" height="150" alt="Foto mahasiswa"></th>
      <td scope="row"><?= $mhs['nama'] ?></td>
      <td scope="row"><?= $mhs['nim'] ?></td>
      <td scope="row"><?= $mhs['email'] ?></td>
      <td scope="row">
        <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'];?>" class="badge badge-succes">Edit</a>
        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'];?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin?');">hapus</a>
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