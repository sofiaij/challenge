<?php
include 'koneksi.php';

$sql = "SELECT * FROM datasiswa ";

$res = mysqli_query($koneksi, $sql);

$datasiswa = array();

while ($data = mysqli_fetch_assoc($res)) {
    $datasiswa[] = $data;
}
include 'aset/a.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
          <div class="card" style="background-color: #6c9cc7;">
            <div class="card-header">
              <h2 class="card-title"><i class="fas fa-book"></i> Data Nilai</h2>
            </div>
            <div class="card-body">
              <table class="table table-warning">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nis</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">kelas</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">WEB</th>
                    <th scope="col">PBO</th>
                    <th scope="col">Basdat</th>
                    <th scope="col">Desain</th>
                    <th scope="col">Prodgas</th>
                    <th scope="col">Rata-Rata</th>
                    <th scope="col">Predikat Nilai</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $id = 1;
                  foreach ($datasiswa as $c ) { ?>

                    <tr>
                      <th scope="row"><?= $id ?></th>
                      <td><?= $c['nis'] ?></th>
                      <td><?= $c['nama']?></th>
                      <td><?= $c['jurusan'] ?></th>
                      <td><?= $c['kelas'] ?></th>
                      <td><?= $c['alamat'] ?></th>
                      <td><?= $c['nilai_matpel_web'] ?></th>
                      <td><?= $c['nilai_matpel_pbo'] ?></th>
                      <td><?= $c['nilai_matpel_basdat'] ?></th>
                      <td><?= $c['nilai_matpel_desain'] ?></th>
                      <td><?= $c['nilai_matpel_progdas'] ?></th>
                      <td><?= $c['nilai_rata'] ?></th>
                      <td><?= $c['peringkat'] ?></th>
                      <td><?= $c['keterangan'] ?></th>
                    </tr>
                      <?php
                      $id++;
                      }
                      ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>

</div>
<?php
include 'aset/b.php';
?>