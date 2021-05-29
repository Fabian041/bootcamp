<?php
require 'functions.php';

if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo "<script>
            alert('data has been added');
            document.location.href = '/admin.php';
            </script>";
    }else{
        echo "<script>
        alert('failed to add data');
        document.location.href = '/admin.php';
        </script>";
    }
}
if(isset($_POST["cancel"])){
    echo "<script>
        alert('canceled');
        document.location.href = 'admin.php';
        </script>";
}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="tambah.css">

    <!-- my font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Stayventure.</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="stay">CATA</span>Log.</a>
    </div>
    </nav>
    <!-- end of navbar -->


    <div class="container">
        <table class="table table-bordered mt-5">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">   Add Book Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="container">
                            <form action="" method="post" class="mt-3" enctype="multipart/form-data">
                                <label for="Name">Book Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Please type here..." aria-label="Recipient's username" aria-describedby="button-addon2" id="Name">
                                <small id="emailHelp" class="form-text text-muted mb-3">write letters, without other punctuation marks.</small>

                                <label for="Category">Category id</label>
                                <input type="text" name="category_id" class="form-control mb-3" placeholder="Please type here..." aria-label="Recipient's username" aria-describedby="button-addon2" id="Category">

                                <label for="Writer">Writer id</label>
                                <input type="text" name="writer_id" class="form-control" placeholder="Please type here..." aria-label="Recipient's username" aria-describedby="button-addon2" id="Writer">

                                <label for="Publication">Publication Year</label>
                                <input type="text" name="publication_year" class="form-control" placeholder="Please type here..." aria-label="Recipient's username" aria-describedby="button-addon2" id="Publication">

                                <div class="form-group mb-5">
                                    <label for="exampleFormControlFile1">photo</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                                    <small id="emailHelp" class="form-text text-muted mb-3">For thumbnail in landing page.</small>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                        <button class="btn btn-danger" type="submit" name="cancel">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    

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