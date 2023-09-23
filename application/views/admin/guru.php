<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin') ?>">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/guru') ?>">Guru</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten -->
    <!-- Tabel -->
    <div class="content">
    <div class="container table-container"> 
            <table class="table table-striped"> 
            <h1 class="text-center">Data Guru</h1>
            <button class="btn btn-sm btn-warning"><a href="Tambah_guru" class="btn text-primary">Tambah</a> 
            </button> 
                <thead> 
                    <tr> 
                        <th>No</th> 
                        <th>Nama Guru</th> 
                        <th>NIK</th> 
                        <th>Gender</th> 
                        <th class="text-center">Aksi</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php $no = 0; 
                                foreach ($guru as $row): 
                                    $no++ ?> 
                    <tr> 
                        <td> 
                            <?php echo $no ?> 
                        </td> 
                        <td> 
                            <?php echo $row->nama_guru ?> 
                        </td> 
                        <td> 
                            <?php echo $row->nik ?> 
                        </td> 
                        <td> 
                            <?php echo $row->gender ?> 
                        </td> 
 
                        <td class="text-center"> 
                           <a href="<?php echo base_url('admin/update_guru/').$row->id?>" class="btn btn-sm btn-primary">Ubah</a>
                           <button onClick="hapus(<?php echo $row->id?>)" class="btn btn-sm btn-danger">Hapus</button>
 
                        </td> 
 
                    </tr> 
                    <?php endforeach ?> 
                </tbody> 
            </table> 
            </table> 
           
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> 
            <script> 
            function hapus(id) { 
                Swal.fire({ 
                    title: 'Apakah Anda Yakin Ingin Menghapusnya?', 
                    icon: 'warning', 
                    showCancelButton: true, 
                    confirmButtonColor: '#3085d6', 
                    cancelButtonColor: '#d33', 
                    confirmButtonText: 'Ya, Di Hapus!' 
                }).then((result) => { 
                    if (result.isConfirmed) { 
                        window.location.href = "<?php echo base_url('admin/hapus_guru/') ?>" + id; 
                    } 
                }); 
            } 
            </script> 
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
    </div>

</body>

</html>