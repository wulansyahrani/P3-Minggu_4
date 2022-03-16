<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="m-5 border border-success p-4 rounded">
<form class="form-horizontal" method="POST" autocomplete="off" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="mata_kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required="required">
        <option value="ddp">Dasar-Dasar Pemprograman</option>
        <option value="pw">Pemprograman2</option>
        <option value="bs">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai Uas" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</body>

<div class="m-5 border border-success p-4 rounded">
<?php
if (isset ($_POST['simpan']))
{

    $nama = $_POST['nama'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $total_nilai = $nilai_uts + $nilai_uas + $nilai_tugas / 3;

    if ($total_nilai >= 85){
        $grade = "A";
    }elseif ($total_nilai >= 70)
    {   $grade = "B";
    }elseif ($total_nilai >= 56)
    {   $grade = "C";
    }elseif ($total_nilai >= 36)
    {   $grade = "D";
    }else{
        $grade = "E";
    } 
    $hasil = $grade;

    switch($matkul){
                    case 'ddp': $nama_matkul = 'Dasar Dasar Pemerograman'; break;
                    case 'basis_data': $nama_matkul = 'Basis Data'; break;
                    case 'backend': $nama_matkul = 'Back End'; break;
                    default: $nama_matkul = '';
                }

                echo 'Nama : '.$nama.'<br>';
                echo 'Matkul : '.$nama_matkul.'<br>';
                echo 'Nilai UTS : '.$nilai_uts.'<br>';
                echo 'Nilai UAS : '.$nilai_uas.'<br>';
                echo 'Nilai Tugas : '.$nilai_tugas.'<br>';

                if(is_numeric($nilai_uts) && is_numeric($nilai_uas) && is_numeric($nilai_tugas)) {
                $uts = is_numeric($nilai_uts) * 0.3;
                $uas = is_numeric($nilai_uas) * 0.35;
                $tugas = is_numeric($nilai_tugas) * 0.35;

                $nilai = is_numeric($uts) + is_numeric($uas) + is_numeric($tugas);
                $minimal = is_numeric('55');

                if (is_numeric($nilai) >= 85 and is_numeric($nilai) <= 100) {
                    echo "Grade: A";
                } elseif (is_numeric($nilai) >= 70) {
                    echo "Grade: B";
                } elseif (is_numeric($nilai) >= 56) {
                    echo "Grade: C";
                } elseif (is_numeric($nilai) >= 36) {
                    echo "Grade: D";
                } elseif (is_numeric($nilai) >= 0) {
                    echo "Grade: E";
                } else {
                    echo "Nilai tidak valid.";
                }
        
                
        </div>
</html>