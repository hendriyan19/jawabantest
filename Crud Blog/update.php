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

    if (isset($_GET['id'])) {
        $id=input($_GET["id"]);

        $sql="select * from user where id=$id";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id=htmlspecialchars($_POST["id"]);
        $id_user=input($_POST["id_user"]);
        $nama=input($_POST["nama"]);
        $content=input($_POST["content"]);
        $email=input($_POST["email"]);
        $title=input($_POST["title"]);

   
        $sql="update user set
			id_user='$id_user',
			nama='$nama',
			content='$content',
			email='$email',
			title='$title'
			where id=$id";


        $hasil=mysqli_query($kon,$sql);

        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>id_user:</label>
            <input type="text" name="id_user" class="form-control" value="<?php echo $data['id_user']; ?>" placeholder="Masukan id_user" required />

        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" placeholder="Masukan Nama" required/>

        </div>
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" value="<?php echo $data['title']; ?>" placeholder="Masukan Title" required/>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" placeholder="Masukan Email" required/>
        </div>
        <div class="form-group">
            <label>Content:</label>
            <textarea name="content" class="form-control" rows="5" placeholder="Masukan content" required><?php echo $data['content']; ?></textarea>

        </div>

        <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>