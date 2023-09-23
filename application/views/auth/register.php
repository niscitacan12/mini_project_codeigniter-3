<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    body {
        background-image: url('https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000');
        /* background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed; */
    }
</style>
</head>
<body>
    <div class="container py-5">
        <div class="card w-50 justify-content-center mx-auto bq-light">
            <div class= "header">
                <div class="jumbotron text-center">
            <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="image" height="200px" width="250px" >
        </div>
        <div style="text-align: center;">
        <h1>SMK Bina Nusantara</h1>  
            <h2 class="text-center pt-3">Register Form</h2>
        </div>
        </div>
        <form action="<?php echo base_url(); ?>Auth/aksi_register" method="post" class="space-y-12"> 
                <div class="card-body">
                    <div class="mb -3">
                    <img src="https://png.pngtree.com/png-vector/20190927/ourmid/pngtree-email-icon-png-image_1757854.jpg" alt="logo" widht="20" height="20"
                    style="top: 50%; right: 10px;";>
                    <label for="exampleInputEmail1" class="form-label">Email </label> 
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2vO2n-_DpXS1ZSm8d4Tn743V5FTuU2tYhEw&usqp=CAU" alt="logo" widht="20" height="20"
            style="top: 50%; right: 10px;";>
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="username" class="form-control" id="exampleInputUsername" placeholder="Masukkan Username" name="username" required>
            </div>
            <div class="mb-3">
            <img src="https://e7.pngegg.com/pngimages/778/12/png-clipart-computer-icons-skype-icon-design-change-password-logo-internet.png" alt="logo" widht="20" height="20"
            style="top: 50%; right: 10px;";>
                 <label for="exampleInputPassword1" class="form-label">Password</label> 
                 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" name="password">
                 <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility('exampleInputPassword1')">Show Password</input>
            </div>
            <div class="mb-3">
            <div class="mb-3">
            <img src="https://t3.ftcdn.net/jpg/03/62/56/24/360_F_362562495_Gau0POzcwR8JCfQuikVUTqzMFTo78vkF.jpg" alt="logo" widht="20" height="20"
            style="top: 50%; right: 10px;";>
                 <label for="exampleInputPassword1" class="form-label">Role</label> 
                 <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Role"  name="role">
            </div>
            <div class="text-center pb-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
               
            <p class="text-center">already have an account? <a href="./auth/login">account login</a></p>
            </form>
        </div>
    </div>
    <script>
        // Ambil elemen password input
        var passwordInput = document.getElementById("exampleInputPassword1");
        
        // Ambil elemen checkbox "Show Password"
        var showPasswordCheckbox = document.getElementById("showPassword");

        // Tambahkan event listener untuk mengubah tipe input password menjadi text ketika checkbox "Show Password" dicentang
        showPasswordCheckbox.addEventListener("change", function() {
            if (this.checked) {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        });
    </script>
</body>
</html>

</body>
</html>