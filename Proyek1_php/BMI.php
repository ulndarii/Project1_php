<style>
    form{
            margin:2em;
        }
        input{
            margin:10px;
        }
        th{
                background-color:cadetblue;
                color: white;
            }
            tbody{
                text-align: center;
            }
</style>

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
            <h1>Kalkulator BMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
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
                <h3 class="card-title">Title</h3>

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
              <form action = "#table" method = "POST">
                <div class="form-group row">
                    <label for="periksa" class="col-4 col-form-label">Tanggal Periksa</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-building"></i>
                        </div>
                        </div> 
                        <input id="periksa" name="periksa" placeholder="yyyy-mm-dd" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kd" class="col-4 col-form-label">Kode Pasien</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-ambulance"></i>
                        </div>
                        </div> 
                        <input id="kd" name="kd" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nampas" class="col-4 col-form-label">Nama Pasien</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                        </div> 
                        <input id="nampas" name="nampas" placeholder="Masukkan Nama Anda" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Gender</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
                    <div class="col-8">
                    <input id="bb" name="bb" placeholder="Masukkan Berat Badan (kg)" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
                    <div class="col-8">
                    <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan (m)" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
                    </div>
                </div>
            </form> 
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
      
<?php

    require_once "class_bmi.php";
    require_once "class_pasien.php";

        $_kode = isset ($_POST['kd']) ? $_POST['kd'] : '';
        $_nama = isset ($_POST['nampas']) ? $_POST['nampas'] : '';
        $_tanggal = isset ($_POST['periksa']) ? $_POST['periksa'] : '';
        $_gender = isset ($_POST['jk']) ? $_POST['jk'] : '';
        $_berat = isset ($_POST['bb']) ? $_POST['bb'] : '';
        $_tinggi = isset ($_POST['tb']) ? $_POST['tb'] : '';


        $status = new bmi($_berat, $_tinggi);
        
        $pasien1 = ['no'=>1,'Tanggal_Periksa'=>'2022-01-10', 'Kode_Pasien' => 'P001','Nama_Pasien'=>'Ahmad','Gender'=> 'L','Berat'=>69.8, 'Tinggi'=>1.69, 'Nilai_BMI'=>24.7, 'Status_BMI'=>'Kelebihan Berat Badan'];
        $pasien2 = ['no'=>2,'Tanggal_Periksa'=>'2022-01-10', 'Kode_Pasien' => 'P002','Nama_Pasien'=>'Rina','Gender'=> 'P','Berat'=>55.3, 'Tinggi'=>1.65, 'Nilai_BMI'=>20.3, 'Status_BMI'=>'Normal (Ideal)'];
        $pasien3 = ['no'=>3,'Tanggal_Periksa'=>'2022-01-11', 'Kode_Pasien' => 'P003','Nama_Pasien'=>'Lutfi','Gender'=> 'L','Berat'=>45.2, 'Tinggi'=>1.71, 'Nilai_BMI'=>15.4, 'Status_BMI'=>'Kekurangan Berat Badan'];
        $pasien4 = ['no'=>1,'Tanggal_Periksa'=> $_tanggal, 'Kode_Pasien' => $_kode,'Nama_Pasien'=>$_nama,'Gender'=> $_gender,'Berat'=>$_berat, 'Tinggi'=>$_tinggi, 'Nilai_BMI'=>$status->getNilaibmi(), 'Status_BMI'=>$status->getStatusbmi()];
        $ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pasien</h1>
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
                <h3 class="card-title">Title</h3>

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
              <?php

require_once 'class_bmipasien.php';
?>

<h3> Data Pasien </h3>
<table class="table" id="table">
<thead>
<tr>
  <th scope="col">No</th>
  <th scope="col">Tanggal Periksa</th>
  <th scope="col">Kode Pasien</th>
  <th scope="col">Nama Pasien</th>
  <th scope="col">Gender</th>
  <th scope="col">Berat Badan (kg)</th>
  <th scope="col">Tinggi Badan (m)</th>
  <th scope="col">Nilai BMI</th>
  <th scope="col">Status BMI</th>
</tr>
</thead>
<tbody>

<?php
    $nomor = 1;
    foreach ($ar_pasien as $pasien) {
      echo '<tr><td>'.$nomor.'</td>';
      echo '<td>'.$pasien['Tanggal_Periksa'].'</td>';
      echo '<td>'.$pasien['Kode_Pasien'].'</td>';
      echo '<td>'.$pasien['Nama_Pasien'].'</td>';
      echo '<td>'.$pasien['Gender'].'</td>';
      echo '<td>'.$pasien['Berat'].'</td>';
      echo '<td>'.$pasien['Tinggi'].'</td>';
      echo '<td>'.$pasien['Nilai_BMI'].'</td>';
      echo '<td>'.$pasien['Status_BMI'].'</td>';
      echo '</tr>';
      $nomor++;
    }
    ?>
</tbody>
</table>
              </div>
              <!-- /.card-body -->
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