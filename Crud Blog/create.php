<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <?php

    include "koneksi.php";


    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_user=input($_POST["id_user"]);
        $nama=input($_POST["nama"]);
        $content=input($_POST["content"]);
        $email=input($_POST["email"]);
        $title=input($_POST["title"]);


        $sql="insert into user (id_user,nama,content,email,title) values
		('$id_user','$nama','$content','$email','$title')";

        $hasil=mysqli_query($kon,$sql);

        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Data</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>id_user:</label>
            <input type="text" name="id_user" class="form-control" placeholder="Masukan id_user" required />

        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" required/>
        </div>
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Masukan Title" required/>
        </div>
        <div class="form-group">
            <label>content:</label>
            <textarea name="content" class="form-control" rows="5"placeholder="Masukan content" required></textarea>

        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>