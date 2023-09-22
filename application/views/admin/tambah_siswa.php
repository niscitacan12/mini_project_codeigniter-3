<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    .card { 
        background-color: #20c997; 
        border: 1px solid #ccc; 
        border-radius: 50px; 
        padding: 10px; 
        margin: 5px; 
        width: 150px; 
        display: inline-block; 
        color: black; 
        margin-left: 0; 
        transition: margin-left 0.5s; 
    } 
 
 
    body { 
        font-family: Arial, sans-serif; 
        margin: 0; 
        padding: 0; 
    } 
 
    .login-button { 
        display: inline-block; 
        padding: 10px 20px; 
        background-color: #6610f2; 
        color: #f8f9fa; 
 
        text-decoration: none; 
        text-align: center; 
        font-size: 10px; 
        border: none; 
 
        width: 100px; 
    } 
 
    .navbar { 
        background-color: #333; 
        color: #fff; 
        padding: 10px; 
        position: fixed; 
        top: 0; 
        width: 100%; 
        z-index: 1; 
    } 
 
    /* CSS Untuk Side Navbar (Samping) */ 
    .sidenav { 
        height: 100%; 
        width: 0; 
        position: fixed; 
        z-index: 2; 
        top: 0; 
        left: 0; 
        background-color: #333; 
        overflow-x: hidden; 
        transition: 0.5s; 
        padding-top: 0px; 
    } 
 
    .sidenav a { 
        padding: 5px 10px; 
        text-decoration: none; 
        font-size: 18px; 
        color: #fff; 
        display: block; 
        transition: 0.3s; 
    } 
 
    .sidenav a:hover { 
        background-color: #555; 
    } 
 
    /* CSS Untuk Konten */ 
    .content { 
        margin-left: 0; 
        padding: 20px; 
        transition: margin-left 0.5s; 
    } 
 
    /* CSS Umum */ 
    body { 
        font-family: Arial, sans-serif; 
        margin: 0; 
        padding: 0; 
    } 
 
    /* Tombol untuk membuka side navbar */ 
    .openbtn { 
        background-color: #333; 
        color: #fff; 
        padding: 10px 15px; 
        border: none; 
        cursor: pointer; 
        margin-left: 0; 
        transition: margin-left 0.5s; 
    } 
 
    .openbtn:hover { 
        background-color: #555; 
    } 
 
    .search-container { 
        float: right; 
    } 
 
    .search-box { 
        padding: 2px; 
        border: none; 
        border-radius: 5px; 
    } 
 
    .navbar h1 { 
        margin: 0; 
    } 
 
    .table-container { 
        margin-top: 80px; 
        /* Membuat ruang antara navbar dan tabel */ 
        padding: 20px; 
    } 
    </style> 

</head>
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
        <h3 class="text-center">Tambah Siswa</h3> 
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
                    <option  value="<?php echo $row->id ?>"> 
                    <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas; ?> </option> 
                    <?php endforeach; ?> 
                </select> 
            </div>
            <button type="submit" class="btn btn-warning"><a href class="btn text-primary">Tambah</a></button> 
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