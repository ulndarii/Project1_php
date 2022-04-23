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
              <li class="breadcrumb-item"><a href="form_nilai.php"><b>Form Nilai</b></a></li>
              <li class="breadcrumb-item active">Form Belanja</li>
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
                <h3 class="card-title">Form Belanja dan Form Nilai</h3>

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .box{
    width: 50%;
    margin-left: 10px;
}
.tab1{
    width: 75%;
    height: 300px;
    margin-top: 0%;
    /* background-color: palevioletred; */
    float: left;
}
.tab2{
    float: right;
    margin-right: 2%;
    width: 23%;
    height: 100px;
}
hr{
    float: left;
    width: 100%;
}
.tr1{
    background-color: rgb(95, 119, 197);
    color: white;
}
.box1{
    width: 100%;
}
    </style>
</head>
<body>
    <div class="tab2">
        <table rules="all" border="1" class="box1">
            <tbody>
                <tr class="tr1">
                <td>Daftar Harga</td>
                </tr>
                <tr>
                    <td>TV : 4.200.000</td>
                </tr>
                <tr>
                    <td>Kulkas : 3.100.000</td>
                </tr>
                <tr>
                    <td>Mesin Cuci : 3.800.000</td>
                </tr>
                <tr class="tr1">
                    <td>Harga Dapat Berubah Setiap Saat </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="tab1">
        <h3>Belanja Online</h3>
        <hr/> <br> <br>
        <div class="box">
        <form method="POST" >
            <div class="form-group row">
                <label for="cs" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <input id="cs" name="cs" placeholder="Nama Custumer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4" name="pilihan">Pilih Produk</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilihan" id="tv" type="radio" class="custom-control-input" value="tv"> 
                        <label for="tv" name="tv" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilihan" id="kulkas" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="kulkas" name="kulkas" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pilihan" id="mesincuci" type="radio" class="custom-control-input" value="mesincuci"> 
                        <label for="mesincuci" name="mesincuci" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
        </div>
    </div>
<hr>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
        <?php
error_reporting(0);
 $nama = $_POST['cs'];
 $pilihan = $_POST['pilihan'];
 $jumlah = $_POST['jumlah'];
 
 if($pilihan = "tv"){
    $harga = $jumlah*4200000;
    $cetak = "TV";
 }elseif($pilihan = "kulkas"){
     $harga = $jumlah*3100000;
     $cetak = "Kulkas";
 }elseif($pilihan = "mesincuci"){
     $harga = $jumlah*3800000;
     $cetak = "Mesin Cuci";
 }
    echo '<br/><br/><br/>Nama Customer : '.$nama;
    echo '<br/>Produk Pilihan : '.$cetak;
    echo '<br/>Jumlah Beli : '.$jumlah;
    echo '<br/>Total Belanja : Rp. '.number_format($harga); 
?>
		</div>
	</div>
</div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
</body>


  </body>
</html>

              </div>
</html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              <b><a href="form_nilai.php">Form Nilai</a> KLIK DISINI</b>
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

<?php
include_once 'footer.php';
?>