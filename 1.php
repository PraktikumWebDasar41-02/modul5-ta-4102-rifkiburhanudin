<form method="POST">
	<table>
		<tr>
			<td>NIM :</td>
			<td><input type="text" name="nim1"></td></tr>
		<tr>
			<td>Nama :</td>
			<td><input type="text" name="nama1"></td></tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email1" placeholder="@gmail.com"></td></tr>
		<tr>
			<td>Masukkan Tanggal Lahir</td>
			<td><input type="date" name="tgl1"></td></tr>
		<tr>
			<td>Pilih Jenis Kelamin</td>
			<td><input type="radio" name="jenkel" value="Laki-Laki">laki-laki <br>
				<input type="radio" name="jenkel" value="Perempuan">Perempuan</td></tr>
		<tr>
			<td>Program Studi</td>
			<td><select name="pil1">
				<option>Pilih Program Studi</option>
				<option value="Manajemen Bisnis Telekomunikasi Informatika">Manajemen Bisnis Telekomunikasi Informatika</option>
				<option value="Teknik Industri">Teknik Industri</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Manajmen Informatika">Manajmen Informatika</option></select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><select name="pil2">
				<option>Pilih Fakultas</option>
				<option value="FKB">FKB</option>
				<option value="FRI">FRI</option>
				<option value="FIF">FIF</option>
				<option value="FIT">FIT</option>
			</select></td></tr>
		<tr>
			<td><input type="submit" name="kirim" value="submit"></td></tr>
	</table>
</form>

<?php
include '3.php';
if (isset($_POST['kirim'])) {
	if (strlen($_POST['nim1'])==10 && $_POST['nim1']!="" && is_numeric($_POST['nim1'])) {
		$nm = $_POST['nim1'];
	}
	else{
		echo "NIM anda salah"."<br>";
	}
	if (strlen($_POST['nama1'])>20 || $_POST['nama1']=="") {
		echo "Nama anda salah"."<br>";
	}
	else{
		$na = $_POST['nama1'];
	}
	if (!strpos($_POST['email1'], "@")||!strpos($_POST['email1'], ".com")) {
		echo "Email anda salah"."<br>";
	}
	else{
		$em = $_POST['email1'];
	}

		$tgl = $_POST['tgl1'];
		$pilih1 = $_POST['pil1'];
		$pilih2 = $_POST['pil2'];
		if (isset($_POST['jenkel'])) {
		$kel = $_POST['jenkel'];	
	}

	if (isset($nm) && isset($na) && isset($em)&& isset($tgl)&& isset($pilih1)&& isset($pilih2)&& isset($kel)) {
		session_start();

		$_SESSION['ide'] = $nm;
		$query = mysqli_query($konek,"INSERT INTO t_jurnal1(Nim, Nama, Email, Tgl, jenkel, jurusan, fakultas) VALUES ('$nm','$na','$em','$tgl','$kel','$pilih1','$pilih2')");
		$query1 = mysqli_query($konek,"SELECT * FROM t_jurnal1 ");
		$arr=mysqli_fetch_array($query1);


	if (isset($query)) {
		echo "Data bisa disimpan";
		header("Location:2.php");
	}
	else{
			echo "Data tidak bisa disimpan";
		}
	}
}

?>
