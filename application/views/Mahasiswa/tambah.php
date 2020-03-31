<div class="container">
    <h3>Tambah Data Mahasiswa</h3>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form tambah mahasiswa
                </div>
                <div class="card-body"> 
                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input name="nim" type="number" class="form-control" id="nim">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" class="form-control" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input name="image" type="file" class="form-control" id="file">
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <form action="" methode="POST">
        <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
        <?php endif ?>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputName4">Nama</label>
            <input name="nama" type="text" class="form-control" id="inputName" placeholder="Nama Lengkap">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">NIM</label>
            <input name="nim" type="number" class="form-control" id="inputNIM4" placeholder="Nomer Induk Mahasiswa">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="username@student.telkomuniversity.ac.id">
        </div>
        <div class="form-group">
            <label for="inputFoto">Foto</label>
            <input name="image" type="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah</button>
    </form> -->
</div>