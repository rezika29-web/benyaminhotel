<?php
session_start();
include ('koneksi.php');
if ($_GET['proses']=='input'){

        $location_file = $_FILES['file_image']['tmp_name'];
        $type_file = $_FILES['file_image']['type'];
        $name_file= $_FILES['file_image']['name'];
        $acak=rand(000000,9999999);
        $name_file_unik=$acak.$name_file;
        if(!empty($location_file)) {
            if ($type_file == "image/jpeg" || $type_file == "image/png" || $type_file =="image/jpg") {
                move_uploaded_file($location_file, "foto_berita/$name_file_unik");
                $ambil = $conn->prepare("insert into image (paket_id, image, alt_text) 
                                  VALUES (?,?,?)");
                $ambil->execute(array($_POST['paket'],$name_file_unik,$_POST['alt_text']));
                header('location:index.php?page=berita');

            } else {
                echo "Gagal Menyimpan Data !!! <br>
                Tipe File <b>$name_file</b> : $type_file <br>
                Tipe File Yang Diperbolehkan Adalah : <b>JPG/JPEG</b>.<br>";
                echo "<a href=javascript:history.go(-1)>Ulangi Lagi</a>";
            }
        }

    else {
        $ambil=$conn->prepare("insert into image (paket_id, alt_text) 
                            VALUES ('$_POST[paket]',
                                    '$_POST[alt_text]')");
        header('location:index.php?page=berita');
    }
}
else if ($_GET['proses']=='hapus'){
    $id=$_GET['id'];
    $query=$conn->query("delete from image WHERE id=$id");
    header('location:index.php?page=berita');
}

else if ($_GET['proses']=='edit'){
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        
        $location_file = $_FILES['file_image']['tmp_name'];
        $type_file = $_FILES['file_image']['type'];
        $name_file= $_FILES['file_image']['name'];
        $acak=rand(000000,9999999);
        $name_file_unik=$acak.$name_file;
        if(!empty($location_file)) {
            if ($type_file == "image/jpeg" || $type_file == "image/png" || $type_file =="image/jpg") {
                move_uploaded_file($location_file, "foto_berita/$name_file_unik");
                $ambil = $conn->prepare("update image set paket_id=?, image=?, alt_text=? 
                                   where id=?");
                $ambil->execute(array($_POST['paket'],$name_file_unik,$_POST['alt_text'],$id));
                header('location:index.php?page=berita');

            } else {
                echo "Gagal Menyimpan Data !!! <br>
                Tipe File <b>$name_file</b> : $type_file <br>
                Tipe File Yang Diperbolehkan Adalah : <b>JPG/JPEG</b>.<br>";
                echo "<a href=javascript:history.go(-1)>Ulangi Lagi</a>";
            }

        if($query){
            header('location:index.php?page=berita');
        }
    }
    else {
        $ambil=$conn->query("update image set 
                        paket_id='$_POST[paket]', 
                        alt_text='$_POST[alt_text]' 
                            where id=$id");
        header('location:index.php?page=berita');
    }
}
}
?>