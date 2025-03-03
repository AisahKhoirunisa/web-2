<!DOCTYPE html>
<html lang="id">
<head>
    <form class="form-horizontal" method="POST" action="nilai_mahasiswa.php">
    <title>Form Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-3">Sistem Penilaian</h3>
    <div class="card shadow-sm">
        <div class="card-body">
            <h4 class="mb-4">Form Nilai Siswa</h4>
            <form method="POST" action="">
                <div class="form-group row">
                    <label for="nama_lengkap" class="col-md-4 col-form-label text-left font-weight-bold">Nama Lengkap</label> 
                    <div class="col-md-6">
                        <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mata_kuliah" class="col-md-4 col-form-label text-left font-weight-bold">Mata Kuliah</label> 
                    <div class="col-md-6">
                        <select id="mata_kuliah" name="mata_kuliah" class="form-control">
                            <option value="DDP">Dasar Dasar Pemrograman</option>
                            <option value="BD1">Basis Data</option>
                            <option value="WEB1">Pemrograman Web</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-md-4 col-form-label text-left font-weight-bold">Nilai UTS</label> 
                    <div class="col-md-3">
                        <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-md-4 col-form-label text-left font-weight-bold">Nilai UAS</label> 
                    <div class="col-md-3">
                        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-md-4 col-form-label text-left font-weight-bold">Nilai Tugas/Praktikum</label> 
                    <div class="col-md-3">
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button name="simpan" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
          </div>
    </div>
</div>

</body>
</html>