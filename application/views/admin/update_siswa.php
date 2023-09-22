<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        .card { 
        background-color: #20c997; 
        border: 1px solid #ccc; 
        border-radius: 70px; 
        padding: 10px; 
        margin: 5px; 
        width: 150px; 
        display: inline-block; 
        color: white; 
        margin-left: 0; 
        transition: margin-left 0.5s; 
    } 
    </style>
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class='card w-50 m-auto p-3'>
        <h3 class="text-center">Ubah Siswa</h3>
        <?php foreach ($siswa as $data_siswa): ?>
        <form action="<?php echo base_url(
            'admin/aksi_update_siswa'
        ); ?>" enctype="multipart/form-data" method="post" class="row">
        <input name="id_siswa" type="hidden" value="<?php echo $data_siswa->id_siswa; ?>">    
        <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_siswa->nama_siswa; ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $data_siswa->nisn; ?>">
            </div>
            <div class="mb-3 col-6"> 
                        <label class="form-label" for="kelas"> 
                            Kelas 
                        </label> 
                        <select name="kelas" id="kelas" 
                            class="form-select"> 
                            <option selected value="<?php echo $data_siswa->id_kelas ?>">Pilih Kelas</option> 
                            <?php echo tampilan_full_kelas_byid($data_siswa->id_kelas) ?> 
                            </option> 
                            <?php foreach($kelas as $row): ?> 
                            <option value="<?php echo $row->id ?>"> 
                                <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas ?> 
                            </option> 
                            <?php endforeach ?> 
                        </select> 
                    </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option selected value="<?php echo $data_siswa->gender; ?>">
                        <?php echo $data_siswa->gender; ?>
                    </option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3 col-12">
                    <input type="hidden" name="id" value="<?php echo $data_siswa->id_siswa; ?>">
                    <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
</body>
</html>