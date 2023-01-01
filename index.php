


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
    <style>
        section {
            min-height: 250px;
        }
    </style>
    <title>P-UMKM</title>
</head>

<body class="bg-info">
    <header style="text-align: center;">
        <div class="container mt-5">
            <div class="jumbotron jumbotron-fluid rounded-lg">
                <div class="row-cols-md-1">
                    <h2>Selamat Datang di Pendaftara UMKM Online Kota Bojonegoro</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="login.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h3 class="text-center title-login">Login</h3>
                        <form action="aksi_login.php?op=in" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <input type="submit" class="btn btn-outline-primary " value="Login" name="login">
                            <div class="text-center">
                                <p>Belum punya akun ? <a href="register.html">Daftar Akun</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>