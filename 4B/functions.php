<?php
$conn = mysqli_connect("localhost","root","","showroom");

function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    global $conn;

    $name = htmlspecialchars($data["name"]);
    $category_id = htmlspecialchars($data["category_id"]);
    $writer_id = htmlspecialchars($data["writer_id"]);
    $publication_year = htmlspecialchars($data["publication_year"]);
    
    //cek apakah ada foto yang di upload
    $img = upload();
    
    $query = "INSERT into book_tb
                VALUES
                ('','$name','$category_id','$writer_id','$publication_year','$img')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM book_tb WHERE id = $id");
    return mysqli_affected_rows($conn); 
}


function update($data, $id){
    global $conn;

    $name = htmlspecialchars($data["name"]);
    $category_id = htmlspecialchars($data["category_id"]);
    $writer_id = htmlspecialchars($data["writer_id"]);
    $publication_year = htmlspecialchars($data["publication_year"]);
    $fotoLama = $data["fotoLama"];

        if( $_FILES["foto"]["error"] === 4){
            $img = $fotoLama;
        }else{
            $img = upload();
        }


    $query = "UPDATE book SET
                name = '$name',
                category_id = '$category_id', 
                writer_id = '$writer_id',
                publication_year = '$publication_year',
                img = '$img' 
            WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    
    $fileName = $_FILES["img"]["name"];
    $fileSize = $_FILES["img"]["size"];
    $tmpFile = $_FILES["img"]["tmp_name"];
    $error = $_FILES["img"]["error"];

    //cek apabila inputan kosong
    if( $error === 4 ){
        echo "
        <script>
            alert('please input picture');
        </script>        
        ";
        return false;
    }
    //cek apakah file yang dikirim adalah foto
    //menentukan extensi apa saja yang dapat di upload
    $extensionValidation = ['jpg','jpeg','png','jfif'];
    
    //memisahkan extensi dengan nama file
    $extension = explode('.',$fileName); // ==> ['namafoto','extensi']

    //mengambil index terakhir dari variabel extension dan mengubah extensi menjadi huruf kecil semua
    $extension = strtolower(end($extension));

    //pengecekan file yang diupload dengan extensi yang dibolehkan
    if( !in_array($extension , $extensionValidation)){
        echo "
        <script>
            alert('this is not picture, please input picture');
        </script>        
        ";
        return false;
    }

    //cek maximal ukuran file
    if( $fileSize > 2000000 ){
        echo "
        <script>
            alert('ur file size is to large');
        </script>        
        ";
        return false;
    }

    //membuat nama file baru
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $extension;

    //Penempatan file yang telah diupload
    move_uploaded_file($tmpFile, 'gambar/' . $newFileName);

    return $newFileName;
}



?>