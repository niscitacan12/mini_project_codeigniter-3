<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="card w-50 m-auto p-3">
        <div class="navbar">
            <span class="openbtn" onclick="openNav()">&#9776;</span>
            <h3 class="text-center text-white">Data Guru</h3>
            <div class="search-container">
                <input type="text" class="search-box" placeholder="Cari...">
                <button type="submit">Cari</button>
            </div>
        </div>

        <!-- Konten -->
        <div class="content">
            <h3 class="text-center">Update</h3>
            <?php foreach($guru as $data_guru): ?>
            <form action="<?php echo base_url('admin/aksi_ubah_guru'); ?>" enctype="multipart/form-data"
                method="post">
                <div class="mb-3 col-6">
                    <label for="nama_Guru" class="form-label">Nama Guru</label>
                    <input type="text" class="form-control" id="nama_Guru" name="nama_Guru"
                        value="<?php echo $data_guru->nama_Guru ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn"
                        value="<?php echo $data_guru->nisn ?>">
                </div>
                <div class="mb-3 col-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select id="gender" name="gender" class="form-select">
                        <option selected value="<?php echo $data_guru->gender ?>">
                            <?php echo $data_guru->gender ?>
                        </option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="kelas" class="form-label">Kelas</label>
                    <select name="id_kelas" id="kelas"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option selected>Pilih Kelas</option>
                        <?php foreach($kelas as $row): ?>
                        <option value="<?php echo $row->id ?>">
                            <?php echo $row->tingkat_kelas.' '.$row->jurusan_kelas ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mb-3 col-12">
                    <input type="hidden" name="id_guru" value="<?php echo $data_guru->id; ?>">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>

            <?php endforeach ?>
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