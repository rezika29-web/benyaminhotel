<?php
include ('koneksi.php');

if ($_GET['proses']=='hapus'){
    $id=$_GET['id'];
    $query=$conn->query("delete from paket WHERE id=$id");
    header('location:index.php?page=kategori');
}
elseif ($_GET['proses']=='tambah'){
    $ambil=$conn->query("insert into paket (name, fasilities,price,weekprice,monprice) 
    VALUES ( '$_POST[name]','$_POST[fasilities]','$_POST[price]','$_POST[weekprice]','$_POST[monprice]')");
    header('location:index.php?page=kategori');

}
else if ($_GET['proses']=='edit') {
    if (isset($_POST['submit'])) {
        $keterangan=$_POST['fasilities'];


        $query = $conn->query("update paket set  
                                        name='$_POST[name]',
                                        fasilities='$keterangan',
                                        price='$_POST[price]',
                                        weekprice='$_POST[weekprice]',
                                        monprice='$_POST[monprice]'
                                        WHERE id='$_POST[id]'");
        if ($query) {
            header('location:index.php?page=kategori');
        }
    }
}

?>

