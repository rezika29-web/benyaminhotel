<?php
include ('koneksi.php');
if ($_GET['proses']=='tambah'){
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $level=$_POST['level'];
        $query=$conn->query("insert into user (username,password,level) VALUES  ('$username','$password','$level')");
        if($query){
            header('location:index.php?page=user');
        }
    }
}
else if ($_GET['proses']=='hapus'){
    $id=$_GET['id'];
    $query=$conn->query("delete from user WHERE id='$id'");
    header('location:index.php?page=user');
}
else if ($_GET['proses']=='edit'){
    $pass=md5($_POST['password']);
    $id=$_POST['id'];
    if($_POST['password']!=''){
        $query=$conn->query("update user set username='$_POST[username]', password='$pass', level='$_POST[level]' 
                          WHERE id=$id");
    }
    else{
        $query=$conn->query("update user set username='$_POST[username]',  level='$_POST[level]' WHERE id=$id");
    }
    if($query){
        header('location:index.php?page=user');
    }

}

?>