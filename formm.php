<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha392-Gn5392xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>FORM NILAI MAHASISWA</title>
</head>
<body>
    <div class="bg-primary p-5">
     <img class="d-block mx-auto mb-4" src="https://s-media-cache-ak0.pinimg.com/originals/40/1e/6c/401e6ce81c674e75a47683ed4d8c4db6.jpg" alt="" width="92">
    <h1 class="text-center text-black">FORM NILAI MAHASISWA</h1>
    </div>

    <div class="col-sm-12">

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="formm.php" method="get" class="mt-4">
            
            <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="Nama Lengkap" value="" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Mata Kuliah</label>
                <select name ="matakuliah"class="form-select form-control" class="form-control">
                    <option selected>Pilih Mata Kuliah:</option>
                    <option value="Pemrograman Web">Web Programming</option>
                    <option value="Basis Data">Database</option>
                    <option value="Statistika">Statiska</option>
                    <option value="Pancasila dan Pendidikan Kewarganegaraan">Pancasila dan Pendidikan Kewarganegaraan</option>
                    <option value="User Interface & Experience">User Interface & Experience</option>
                    <option value="Keterampilan Komunikasi">Keterampilan Komunikasi</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                </select>
                <div class="form-group">
                    <label for=""> Nilai UTS</label>
                    <input type="text" name="nilaiuts" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Nilai UAS</label>
                    <input type="text" name="nilaiuas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Nilai Kehadiran </label>
                    <input type="text" name="nilaitugas" value="" class="form-control">
                </div>
                <input type="submit" value="submit" name="proses" class="btn btn-primary btn-sm btn-block">
                </div>
            </form>
            <?php
            if ($_GET)
            {
            
                @$Namalengkap = $_GET['Nama Lengkap'];
                @$nim = $_GET['nim'];
                @$matakuliah = $_GET['matakuliah'];
                @$nilaiuts = $_GET['nilaiuts'];
                @$nilaiuas = $_GET['nilaiuas'];
                @$nilaitugas = $_GET['nilaitugas'];
                @$totalnilai = $nilaiuts + $nilaiuas + $nilaitugas;
                @$alphabet = $totalnilai / 3;
                if ($alphabet >= 90){
                    $grade = "A";
                }elseif ($alphabet >= 75)
                {   $grade = "B";
                }elseif ($alphabet >= 65)
                {   $grade = "C";
                }elseif ($alphabet >= 50)
                {   $grade = "D";
                }else{
                    $grade = "E";
                } 
                if ( isset ($_GET["Nama Lengkap"]) 
                AND ($_GET["nim"]) 
                AND ($_GET["matakuliah"])
                AND ($_GET["nilaiuts"]) 
                AND ($_GET["nilaiuas"])  
                AND ($_GET["nilaitugas"])){

              }
            }   
            
            ?>

            
            <div class="col-3 mt-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-black">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?php echo @$Namalengkap ?> </li>
                    <li class="list-group-item">Nim : <?php echo @$nim ?> </li>
                    <li class="list-group-item">Lesson: <?php echo @$matakuliah ?> </li>
                    <li class="list-group-item"> UTS Value : <?php echo @$nilaiuts ?> </li>
                    <li class="list-group-item">UAS Value : <?php echo @$nilaiuas ?> </li>
                    <li class="list-group-item">Assignment Value : <?php echo @$nilaitugas ?> </li>
                    <li class="list-group-item">Value Total :  <?php echo @$totalnilai ?> </li>
                    <li class="list-group-item">Value in Alphabet : <?php echo @$grade ?> </li>
                    
                    
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-black">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 90 - 100</li>
                    <li class="list-group-item">B : 75 - 92</li>
                    <li class="list-group-item">C : 65 - 82</li>
                    <li class="list-group-item">D : 50 - 65 </li>
                    <li class="list-group-item">E : Less than 50 </li>
                    
                    
                </ul>
                </div>

        </div>
        
    </div>
</body>
</html>
