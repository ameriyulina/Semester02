<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Nilai</title>
    <link rel="icon" type="image/png" href="https://i.postimg.cc/9fnxvrDS/formlogo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<style>
    body{
        background-color: #f2f2f2;
        padding-top: 5rem;
        }
    .mid{
        text-align: center;
        margin: 5px;
    }
    .box{
        background-color: white;
        border-radius: 4px;
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.5);
    }
    .btt{
        align-items: center;
        margin: 20px;
    }
    #judul {
        padding-bottom: 20px;
    }
    .rainer {
        padding: 20px;
    }
</style>
<body>
    <div class="container box">
        <form method="post" action="nilaisiswa.php">
        <div class="d-flex flex-column bd-highlight mb-3">
        
    
        </div>
        <div class="rainer">
             <img class="d-block mx-auto mb-4" src="https://s-media-cache-ak0.pinimg.com/originals/40/1e/6c/401e6ce81c674e75a47683ed4d8c4db6.jpg" alt="" width="92">
            <h2 class="text-center text-black">Form Nilai Siswa</h2>
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" name="Namalengkap" required placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label>Mata Kuliah</label>
                    <div class="col-md-4">
                        <select class="form-select" name="matkul" aria-label="" required>
                        <option selected></option>
                        <option value="PPKN">PPKN</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Keterampilan Komunikasi">Keterampilan Komunikasi</option>
                        <option value="Statistik">Statistik</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                    </div>
                </div>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <div class="form-group mid">
                    <label>Nilai UTS</label>
                    <input type="text" class="form-control" name="uts" required placeholder="Nilai UTS">
                </div>
                <div class="form-group mid">
                    <label>Nilai UAS</label>
                    <input type="text" class="form-control" name="uas" required placeholder="Nilau UAS">
                </div>
                <div class="form-group mid">
                    <label>Nilai Tugas</label>
                    <input type="text" class="form-control" name="tugas" required placeholder="Nilai Tugas/Praktikum">
                </div>
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary btt">Submit Nilai</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>