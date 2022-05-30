<?php
include ('koneksi.php');
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi){
    case 'entri':
        ?>

        <form action="aksi_user.php?proses=tambah" method="post" role="form">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
            </div>
            <!-- <div class="form-group">
                <label>Level</label>
                <input type="text" name="level" class="form-control">

            </div> -->
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <input type="reset" name="reset" value="Clear" class="btn btn-primary">

        </form>

        <?php
        break;
    case 'list' :
        ?>


        <p>
            <a href="?page=user&aksi=entri" class="btn btn-primary"><span class="gyphicon glyphicon-plus"></span>Tambah Data User</a>
        </p>
        <table class="table table-bordered" rules="all" width="100%"  id="dataTables-example">
            <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Level</th>
                
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $ambil=$conn->query("select * from user");
            $i=1;
            while ($data=$ambil->fetch()){
                echo "
            <tr>
                <td>$i</td>
                <td>$data[username]</td>
              
                <td>
                    <a href=aksi_user.php?proses=hapus&id=$data[id] onclick=\"return confirm('Anda Yakin?')\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\">Hapus</a>
                    <a href=?page=user&aksi=edit&id=$data[id] class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-edit\">Edit</a>
                </td>
            </tr>";
        
                $i++;
            }
            ?>
            </tbody>
        </table>
        <?php
        break;
    case 'edit':
        ?>

        <?php
        include ('koneksi.php');
        $id=$_GET['id'];
        $edit=$conn->query("select * from user WHERE id='$id'");
        $dataedit=$edit->fetch();
        ?>
        <form action="aksi_user.php?proses=edit" method="post" role="form">
            <input type="text" name="id" hidden value="<?php echo $dataedit['id']?>" >
            <div class="from-group">
                <label>username</label>
                <input type="text" name="username" required value="<?php echo $dataedit['username']?>" class="form-control">
            </div>
            <div class="from-group">
                <label>Password</label>
                <input type="text" name="password"   class="form-control"> *Kosongkan Jika Tidak Ada Perubahan
            </div>
            <div class="from-group">
                <label>Level</label>
                <select name="level" class="form-control">
                    <option value="admin">admin</option>
                    <option value="user">user</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            <input type="reset" name="reset" value="Clear" class="btn btn-primary">

        </form>
        <?php
        break;
}
?>