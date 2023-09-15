<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body class='min-vh-100 d-flex align-items-center'>
<div class="card w-50 m-auto p-3"> 
<div class="navbar"> 
        <span class="openbtn" onclick="openNav()">&#9776;</span> 
        <h3 class="text-center text-white">Data Siswa</h3> 
        <div class="search-container"> 
            <input type="text" class="search-box" placeholder="Cari..."> 
            <button type="submit">Cari</button> 
        </div> 
    </div> 
 
    <!-- Side Navbar (Samping) --> 
    <div class="sidenav" id="mySidenav"> 
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; tutup</a> 
        <a href="<?php echo base_url('admin') ?>">Beranda</a> 
        <a href="<?php echo base_url('admin/siswa') ?>">Siswa</a>  
    </div> 
 
    <!-- Konten --> 
    <div class="content">
        <h3 class="text-center">Update</h3> 
        <form action = "<?php echo base_url('admin/aksi_tambah_siswa')?>" 
              encytype="multipart/form-data" 
              method="post" class="row"> 
            <div class="mb-3 col-6"> 
                <label for="nama" class="form-label">Nama Siswa</label> 
                <input type="text" class="form-control" id="nama" name="nama"> 
            </div> 
            <div class="mb-3 col-6"> 
                <label for="nama" class="form-label">NISN</label> 
                <input type="text" class="form-control" id="nisn" name="nisn" > 
            </div> 
            <div class="mb-3 col-6"> 
                <label for="gender" class="form-label">Gender</label> 
                <select name="gender" class="form-select"> 
                    <option value="" selected>Pilih Gender</option> 
                    <option value="Laki-Laki">Laki-Laki</option> 
                    <option value="Perempuan">Perempuan</option> 
                </select> 
            </div> 
            <div class="mb-3 col-6"> 
                <label for="kelas" class="form-label">Kelas</label> 
                <select name="id_kelas" id="kelas" class="form-select"> 
                    <option selected>Pilih Kelas</option> 
                    <?php foreach ($kelas as $row):?> 
                    <option value="<?php echo $row->id ?>"> 
                    <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas; ?> </option> 
                    <?php endforeach; ?> 
                </select> 
            </div> 
            <div class="mb-3 col-12"> 
                    <button type="submit" class="btn btn-primary">Tambah</button> 
                </div> 
        </form> 
    </div>
    </div>
    
    <script> 
    function openNav() { 
        document.getElementById("mySidenav").style.width = "250px"; 
        document.getElementsByClassName("content")[0].style.marginLeft = "250px"; 
    } 
 
    function closeNav() { 
        document.getElementById("mySidenav").style.width = "0"; 
        document.getElementsByClassName("content")[0].style.marginLeft = "0"; 
    } 
    </script>
</body>
</html>