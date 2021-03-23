<?php

function nilai($nilai_total){
    if($nilai_total >= 85){
        return '<b class="text-success">Grade A</b> ';
    }
    elseif($nilai_total >= 70){
        return '<b class="text-success">Grade B</b> ';
    }
    elseif($nilai_total >= 56){
        return '<b class="text-success">Grade C</b> ';
    }
    elseif($nilai_total >= 36){
        return '<b class="text-success">Grade D</b> ';
    }
    elseif($nilai_total >= 0){
        return '<b class="text-success">Grade E</b> ';
    }else{
        return '<b class="text-danger">Tidak ada Grade</b>';
    }
}

function predikat($nilai_total){
    switch(true){
        case $nilai_total >= 85:
            return '<h5 class="text-primary">Sangat Memuaskan</h5>';
            break;
        case $nilai_total >= 70:
            return '<h5 class="text-primary">Memuaskan</h5>';
            break;
        case $nilai_total >= 56:
            return '<h5 class="text-primary">Cukup</h5>';
            break;
        case $nilai_total >= 36:
            return '<h5 class="text-primary">Kurang</h5>';
            break;
        case $nilai_total >= 0:
            return '<h5 class="text-primary">Sangat Kurang</h5>';
            break;
        default:
            return '<h5 class="text-danger">Tidak Ada</h5>';
        break;
    }
}

function lulus($nilai_total){
    if($nilai_total > 55){
        return '<b class="text-success">Lulus</b>';
    }
    else{
        return '<b class="text-danger">Tidak Lulus</b>';
    }
}

?>

<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm">
                        <form class="form-horizontal" action="form_nilai.php" method="GET">
                            <fieldset>
                                <legend class="text-center">Form nilai siswa</legend>
                        
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nama">Nama siswa</label>
                                    <div class="col-md-9">
                                        <input id="nama" name="nama" type="text" placeholder="Nama Siswa" class="form-control">
                                    </div>
                                </div>
                        
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Mata Kuliah:</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="matkul">
                                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                                            <option value="BDI">Basis Data I</option>
                                            <option value="WEB1">Pemrograman Web</option>
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nilai_uts">Nilai UTS</label>
                                    <div class="col-md-9">
                                        <input id="nilai_uts" name="nilai_uts" type="text" placeholder="Nilai UTS" class="form-control">
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nilai_uas">Nilai UAS</label>
                                    <div class="col-md-9">
                                        <input id="nilai_uas" name="nilai_uas" type="text" placeholder="Nilai UAS" class="form-control">
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nilai_tugas">Nilai Tugas Praktikum</label>
                                    <div class="col-md-9">
                                        <input id="nilai_tugas" name="nilai_tugas" type="text" placeholder="NIlai Tugas" class="form-control">
                                    </div>
                                </div>
                        
                                
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <input type="submit" value="Simpan" class="btn btn-success" name="proses">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
            error_reporting(0);
            $proses= $_GET['proses'];
            $nama_siswa = $_GET['nama'];
            $mata_kuliah = $_GET['matkul'];
            $nilai_uts = $_GET['nilai_uts'];
            $nilai_uas = $_GET['nilai_uas'];
            $nilai_tugas = $_GET['nilai_tugas'];
            $nilai_total = ($nilai_uts*30/100)+($nilai_uas*35/100)+($nilai_tugas*35/100);
                
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="well well-sm">
                        <?php
                            if(!empty($proses)) {
                                echo "<b>Proses :</b> $proses <br><br>";
                                echo "<b>Nama :</b> $nama_siswa <br><br>";
                                echo "<b>Mata Kuliah :</b> $mata_kuliah<br><br>";
                                echo "<b>Nilai UTS :</b> $nilai_uts <br><br>";
                                echo "<b>Nilai UAS :</b> $nilai_uas <br><br>";
                                echo "<b>Nilai Tugas Praktikum :</b> $nilai_tugas <br><br>";
                                echo "<b?>Nilai akhir :</b> $nilai_total<br><br>";
                                echo nilai($nilai_total);
                                echo predikat($nilai_total);
                                echo lulus($nilai_total);
                                
                                
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
