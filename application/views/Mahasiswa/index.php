<h1 class="text-justify">Data Mahasiswa D3RPLA-43-01</h1>
<table class="table">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
    </tr>
    <?php foreach ($mahasiswa as $data) : ?>
    <tr>
      <th scope="row"><?= $data['id'] ?></th>
      <td scope="row"><?= $data['nama'] ?></td>
      <td scope="row"><?= $data['nim'] ?></td>
    </tr>
    <?php endforeach ?>
</table>