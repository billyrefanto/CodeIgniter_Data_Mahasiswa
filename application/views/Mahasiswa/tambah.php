<div class="container">
    <h3>Tambah Data Mahasiswa</h3>
    <form action="" methode="POST">
    <?php if(validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors(); ?>
    </div>
    <?php endif ?>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputName4">Nama</label>
        <input name="nama" type="text" class="form-control" id="inputName" placeholder="masukan nama anda" required>
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">NIM</label>
        <input name="nim" type="number" class="form-control" id="inputNIM4" placeholder="6706194041" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Email</label>
        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="username@student.telkomuniversity.ac.id"required>
    </div>
    <div class="form-group">
        <label for="inputFoto">Foto</label>
        <input name="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary float-right">Tambah</button>
    </form>
</div>