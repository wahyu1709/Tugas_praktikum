<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form name="proses" class="form-horizontal" action="form_nilai.php" method="post">
          <fieldset>
            <legend class="text-center">Form nilai siswa</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="nama">Nama siswa</label>
              <div class="col-md-9">
                <input id="nama" name="nama" type="text" placeholder="Nama Siswa" class="form-control">
              </div>
            </div>
    
            <!-- mata kuliah input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="matkul">Mata kuliah</label>
              <div class="col-md-9">
                <input id="matkul" name="matkul" type="text" placeholder="mata kuliah" class="form-control">
              </div>
            </div>

            <!-- mata kuliah input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="nilai_uts">Nilai UTS</label>
              <div class="col-md-9">
                <input id="nilai_uts" name="nilai_uts" type="text" placeholder="Nilai UTS" class="form-control">
              </div>
            </div>

            <!-- mata kuliah input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="nilai_uas">Nilai UAS</label>
              <div class="col-md-9">
                <input id="nilai_uas" name="nilai_uas" type="text" placeholder="Nilai UAS" class="form-control">
              </div>
            </div>

            <!-- mata kuliah input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="nilai_tugas">Nilai Tugas Praktikum</label>
              <div class="col-md-9">
                <input id="nilai_tugas" name="nilai_tugas" type="text" placeholder="NIlai Tugas" class="form-control">
              </div>
            </div>
    
            
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
</html>
<?php
$proses= $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_total = ($nilai_uts*30/100)+($nilai_uas*35/100)+($nilai_tugas*35/100);

    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;  
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    
      if($nilai_total >= 85){
        echo '<br/>Anda lulus';
        echo '<br/>Grade nilai anda A';
      }
      elseif($nilai_total >= 70){
        echo '<br/>Anda lulus';
        echo '<br/>Grade nilai anda B';
      }
      elseif($nilai_total >= 56){
        echo '<br/>Anda lulus';
        echo '<br/>Grade nilai anda C';
      }
      elseif($nilai_total >= 36){
        echo '<br/>Anda tidak lulus';
        echo '<br/>Grade nilai anda D';
      }
      elseif($nilai_total >= 0){
        echo '<br/>Anda tidak lulus';
        echo '<br/>Grade nilai anda E';
      }
      else{
        echo '<br/>Anda tidak lulus';
      }
    
    ?>