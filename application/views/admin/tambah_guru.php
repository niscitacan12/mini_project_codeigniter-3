<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class='min-vh-100 d-flex align-items-center'>
<div class="card w-50 m-auto p-3"> 
<div class="navbar"> 
        <span class="openbtn" onclick="openNav()">&#9776;</span> 
        <h3 class="text-center text-white">Data Siswa</h3> 
    </div> 
 
    <!-- Konten --> 
    <div class="content">
        <h3 class="text-center">Tambah Guru</h3> 
        <form action = "<?php echo base_url('admin/aksi_tambah_guru')?>" 
              encytype="multipart/form-data" 
              method="post" class="row"> 
            <div class="mb-3 col-6"> 
                <label for="nama" class="form-label">Nama guru</label> 
                <input type="text" class="form-control" id="nama" name="nama"> 
            </div> 
            <div class="mb-3 col-6"> 
                <label for="nama" class="form-label">NIK</label> 
                <input type="text" class="form-control" id="nik" name="nik" > 
            </div> 
            <div class="mb-3 col-6"> 
                <label for="gender" class="form-label">Gender</label> 
                <select name="gender" class="form-select"> 
                    <option value="" selected>Pilih Gender</option> 
                    <option value="Laki-Laki">Laki-Laki</option> 
                    <option value="Perempuan">Perempuan</option> 
                </select> 
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