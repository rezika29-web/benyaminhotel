<?php
include ('koneksi.php');
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi){
    case 'entri':
?>

<form action="aksi_kategori.php?proses=tambah" method="post" role="form">

		<div class="form-group">
        <label>NAMA PAKET</label>
                <input type="text" name="name" class="form-control">
         </div>
		<div class="form-group">
			<label>FASILITAS</label>
		<textarea name="fasilities" class="form-control" ></textarea>
        </div>
        <div class="form-group">
			<label>HARGA Per Hari</label>
                <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
			<label>HARGA Per Minggu</label>
                <input type="text" name="weekprice" class="form-control">
        </div>
        <div class="form-group">
			<label>HARGA Per Bulan</label>
                <input type="text" name="monprice" class="form-control">
		</div>
         <div class="form-group">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" class="form-control">
                <input type="reset" name="reset" value="Clear" class="btn btn-primary" class="form-control">
        </div>
</form>

<?php
break;
case 'list' :
?>


<p>
    <a href="?page=kategori&aksi=entri" class="btn btn-primary"><span class="gyphicon glyphicon-plus"></span>Tambah Paket</a>
	<!--<a href="report/report_mahasiswa-semua.php" class="btn btn-primary">CETAK</a>-->
</p>
<table class="table table-triped table-hover" rules="all"  id="dataTables-example">
<thead>
    <tr>
        <th>No</th>
        <th>Nama Paket</th>
        <th>Fasilitas</th>
        <th>Harga Per Hari</th>
        <th>Harga Per Minggu</th>
        <th>Harga Per Bulan</th>
		<th>Aksi</th>
    </tr>
	</thead>
	<tbody>
    <?php
    $ambil=$conn->query("select * from paket");
    $i=1;
    while ($data=$ambil->fetch()){
        echo "
            <tr>
                <td>$i</td>
                <td>$data[name]</td>
                <td>$data[fasilities]</td>
                <td>$data[price]</td>
                <td>$data[weekprice]</td>
                <td>$data[monprice]</td>
                <td>
                    <a href=aksi_kategori.php?proses=hapus&id=$data[id] onclick=\"return confirm('Anda Yakin?')\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\">Hapus</a>
                    <a href=?page=kategori&aksi=edit&id=$data[id] class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-edit\">Edit</a>
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
    $edit=$conn->query("select * from paket WHERE id=$id");
    $dataedit=$edit->fetch();
    ?>
<form action="aksi_kategori.php?proses=edit" method="post" role="form">

			<input type="text" name="id" value="<?php echo $dataedit['id']?>"  hidden="true" style="display:none">

        <div class="from-group">
            <label>Nama Paket</label>
                <input type="text" name="name" required value="<?php echo $dataedit['name']?>" class="form-control">
        </div>
        <div class="from-group">
            <label>Fasilitas</label>
                <textarea name="fasilities" class="form-control"><?php echo $dataedit['fasilities']?></textarea>
        </div>
        <div class="from-group">
            <label>Harga Per Hari</label>
                <input type="text" name="price" required value="<?php echo $dataedit['price']?>" class="form-control">
        </div>
        <div class="from-group">
            <label>Harga Per Minggu</label>
                <input type="text" name="weekprice" required value="<?php echo $dataedit['weekprice']?>" class="form-control">
        </div>
        <div class="from-group">
            <label>Harga Per Bulan</label>
                <input type="text" name="monprice" required value="<?php echo $dataedit['monprice']?>" class="form-control">
        </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                <input type="reset" name="reset" value="Clear" class="btn btn-primary">
</form>
<?php
break;
}
?>
