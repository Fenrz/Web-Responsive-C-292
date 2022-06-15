<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
     <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card mt-5">
                    <div class="card-header">
                        <strong class="text-center d-block" >Form <span class="text-primary">LOGIN</span></strong>
                    </div>
                    <div class="card-body"></div>
                        <form method="POST" action="<?php echo e(route('ceklogin')); ?>" class ="mb-5">
                            <?php echo csrf_field(); ?>
                            <div class="form-gorup m-3">
                            <label for="" class="mb-2">Email</label>
                            <input type="email" name="email"
                                class="form-control" required autocomplete="off" autofocus>
                            </div>
                            <div class="form-gorup m-3 mr">
                            <label for="" class="mb-2">Password</label>
                            <input type="password" name="password"
                                class="form-control" autocomplete="off">
                            </div>
                            <div class="form-gorup m-3 mr">
                                <input name="" id="" class="btn btn-primary" type="submit" value="Sign In">
                            </div>
                            <small class ="m-3">Belum punya akun?<a href="/register"> Register<a> sekarang</a></a> </small>
                        </form>
                </div>
            </div>
        </div>

     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH C:\xampp\htdocs\laravel-tugasWR\resources\views/user/login.blade.php ENDPATH**/ ?>