<?php 
 session_start();
 include '3.php';
 $nim = $_SESSION['ide'];
 $query = mysqli_query($konek,"SELECT * FROM t_jurnal1 WHERE  Nim = '$nim'");
 if ($arr = mysqli_fetch_array($query)) {
 	$nIM=$arr['Nim'];
	$name=$arr['Nama'];	
	$eMl=$arr['Email'];	
	$tGL=$arr['Tgl'];	
	$jenKEL=$arr['jenkel'];	
	$jUR=$arr['jurusan'];	
	$fKL=$arr['fakultas'];
}
else{
	echo "eror";
}	
 ?>
 <form method="post">
<table>
	<tr>
		<td>NIM :</td>
		<td><?php echo $nIM."<br>"; ?></td></tr>
	<tr>
		<td>Nama :</td>
		<td><?php echo $name."<br>"; ?></td></tr>
	<td>
		<td>Tanggal lahir :</td>
		<td><?php echo $tGL."<br>"; ?></td></tr>
	<tr>
		<td>Email :</td>
		<td><?php echo $eMl."<br>"; ?></td></tr>
	<tr>
		<td>Jenis kelamin :</td>
		<td><?php echo $jenKEL."<br>"; ?></td></tr>
	<tr>
		<td>Jurusan :</td>
		<td><?php echo $jUR."<br>"; ?></td></tr>
	<tr>
		<td>fakultas :</td>
		<td><?php echo $fKL."<br>"; ?></td></tr>

	<tr>
		<td><input type="submit" name="selesai" value="Input yang baru"></td>
	</tr>
</table>
	
</form>
<?php
if (isset($_POST['selesai'])) {
	session_destroy();
	header("location:1.php");
}
?>