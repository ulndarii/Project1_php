<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tugas Praktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="form_belanja.php"><b>Form Belanja</b></a></li>
              <li class="breadcrumb-item active">Form Nilai</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Nilai</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
    <h1>Form Nilai Siswa</h1>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <form>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
        <div class="col-8">
          <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" />
        </div>
      </div>
      <div class="form-group row">
        <label for="select" class="col-4 col-form-label">Mata Kuliah</label>
        <div class="col-8">
          <select id="select" name="matkul" class="custom-select">
            <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
            <option value="Basis Data I">Basis Data I</option>
            <option value="Pemrograman Web">Pemrograman Web</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="nuts" class="col-4 col-form-label">Nilai UTS</label>
        <div class="col-8">
          <input id="nuts" name="nuts" placeholder="Nilai UTS" type="text" class="form-control" />
        </div>
      </div>
      <div class="form-group row">
        <label for="nuas" class="col-4 col-form-label">Nilai UAS</label>
        <div class="col-8">
          <input id="nuas" name="nuas" placeholder="NIlai UAS" type="text" class="form-control" />
        </div>
      </div>
      <div class="form-group row">
        <label for="tgs" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
        <div class="col-8">
          <input id="tgs" name="tgs" placeholder="NIlai Tugas/Praktikum" type="text" class="form-control" />
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" value="Simpan" name="proses" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
    <?php
    error_reporting(0);
    $proses = $_GET['proses'];
    $nama_siswa = $_GET['nama'];
    $mata_kuliah = $_GET['matkul'];
    $nilai_uts = $_GET['nuts'];
    $nilai_uas = $_GET['nuas'];
    $nilai_tugas = $_GET['tgs'];

    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  </body>
</html>
<?php
include_once 'footer.php';
?>