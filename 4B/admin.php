<?php

//koneksi database
$conn = mysqli_connect("localhost","root","","bootcamp_perpus");

//ambil data dari database
$catalogs = mysqli_query($conn, "SELECT * FROM book_tb");

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">

    <!-- my font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Stayventure.</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="stay">CATA</span>Log.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="#">Catalog</a>
                    <a class="nav-link" href="approval.php">add book</a>
                    <a class="nav-link" href="paymentLog.php">add category</a>
                    <a class="nav-link" href="bookLog.php">add writer</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->


    <!-- hotel table -->
    <section class="hotel">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    <h4>Catalog</h4>
                    <p class="sub">You are allowed to change this data</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <table class="table table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Cover</th>
                                <th scope="col">Name</th>
                                <th scope="col" class="text-center" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($catalog = mysqli_fetch_assoc($catalogs)) : ?>
                            <tr>
                                <td><img src="gambar/<?= $catalog["img"] ?>" width="150"></td>
                                <td><?= $catalog["name"] ?></td>
                                <td class="text-center">
                                    <a type="button" class="btn btn-success" href="update.php?id=<?= $catalog["id"] ?>">update</a>  
                                </td>
                                <td class="text-center">
                                    <a type="button" class="btn btn-danger" href="hapus.php?id=<?= $catalog["id"] ?>" >delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                            <tr>
                                <td colspan="8" class="text-center">
                                    <a href="add_book.php" class="btn btn-primary">Add Data</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </section>
    <!-- end of table -->

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>