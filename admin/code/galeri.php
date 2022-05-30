<?php
include ('koneksi.php');
$aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
switch ($aksi){
    case 'entri':
?>

<form role="form" method="post" enctype="multipart/form-data" action="aksi_galeri.php?proses=input">
	<div class="form-group">
		<label>Gambar</label>
		<input name="file_image" type="file">
	</div>
	<div class="form-group">
		<label>ALT-Text</label>
		<input type="text" name="alt_text" class="form-control" >
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
	<button type="reset" class="btn btn-default">Reset</button>
</form>

<?php
break;
case 'list' :
?>


<p>
    <a href="?page=galeri&aksi=entri" class="btn btn-primary"><span class="gyphicon glyphicon-plus"></span>Tambah Gambar</a>
	<!--<a href="report/report_mahasiswa-semua.php" class="btn btn-primary">CETAK</a>-->
</p>
<table class="table table-bordered"   id="dataTables">
<thead>
    <tr>
		<th>No</th>
        <th>Gambar</th>
        <th>Alt-Text</th>
		<th>Aksi</th>
    </tr>
	</thead>
	<tbody>
    <?php
	$ambil=$conn->query("select * from galery");
    $i=1;
    while ($data=$ambil->fetch()){
        echo "
            <tr>
                 <td>$i</td>
                <td><img src='foto_berita/$data[image]'width=150 hight=150></td>				
                <td>$data[alt_text]</td>
                <td>
                    <a href=aksi_galeri.php?proses=hapus&id=$data[id] onclick=\"return confirm('Anda Yakin?')\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\">Hapus</a>
                    <a href=?page=galeri&aksi=edit&id=$data[id] class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-edit\">Edit</a>
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
    $edit=$conn->query("select * from galery WHERE id=$id");
    $dataedit=$edit->fetch();
    ?>
	<form role="form" method="post" enctype="multipart/form-data" action="aksi_galeri.php?proses=edit">
	<input type="text" name="id" value="<?php echo $dataedit['id']?>" style="display:none" >
	
	<div class="form-group">
		<label>Gambar</label>
		<input name="file_image" type="file" class="btn btn-default"> <br>
        <?php
        // if($dataedit=['image']!=''){
        //     echo"<img src='foto_berita/$dataedit[image] width=100 height=50'>";
        // }
        // else
        //     echo "Tidak Ada Image";
        ?>
	</div>
	<div class="from-group">
            <label>ALT-Text</label>
			<input type="text" name="alt_text" required value="<?php echo $dataedit['alt_text']?>" class="form-control">
        </div>
	<input type="submit" name="submit" class="btn btn-primary">
	<input type="reset" name="reset" class="btn btn-default">
</form>

<?php
break;
}
?>
