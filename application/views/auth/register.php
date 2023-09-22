<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    body {
        background-image: url('https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000');
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
                    <label for="exampleInputEmail1" class="form-label">Email </label> 
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="username" class="form-control" id="exampleInputUsername" name="username" required>
            </div>
            <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Password</label> 
                 <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Role</label> 
                 <input type="text" class="form-control" id="exampleInputPassword1" name="role">
            </div>
            <div class="text-center pb-3">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
               
            <p class="text-center">already have an account? <a href="./auth/login">account login</a></p>
            </form>
        </div>
    </div>
</body>
</html>