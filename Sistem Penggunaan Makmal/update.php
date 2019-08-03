<?php
 include'config.php';
 $bi=$_GET['Bil'];
$dis = mysqli_query($conn, "SELECT * FROM pengguna WHERE Bil='$bi'");
while ($res=mysqli_fetch_array($dis)) {
	$bi=$res['Bil'];
	 $np=$res['Nama_Pensyarah'];
	 $ke=$res['Kelas'];
	 $bp=$res['Bilangan_Pelajar'];
	 $ca=$res['Catatan'];
	 $nm=$res['Nama_Makmal'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Makmal Perd</title>
</head>
<body>
	<center>
	<h1>SISTEM PENGGUNAAN MAKMAL</h1>
		<form method="post" action="pros_update.php">
		<table border="1" cellpadding="6" cellspacing="0">
			<tr>
				<td>Bil : </td>
				<td><input type="text" name="Bil" value="<?php echo $bi; ?>"></td>
			</tr>
			<tr>
				<td>Nama Pelajar : </td>
				<td><input type="text" name="Nama_Pensyarah" value="<?php echo $np; ?>"></td>
			</tr>
			<tr>
				<td>Kelas :</td>
				<td><input type="text" name="Kelas" value="<?php echo $ke; ?>"></td>
			</tr>
			<tr>
				<td>Bilangan Pelajar :</td>
				<td><input type="text" name="Bilangan_Pelajar" value="<?php echo $bp; ?>"></td>
			</tr>
			<tr>
				<td>Catatan :</td>
				<td><input type="text" name="Catatan" value="<?php echo $ca; ?>"></td>
			</tr>
			<tr>
				<td>Nama_Makmal :</td>
				<td><input type="text" name="no_kp" value="<?php echo $nm; ?>"></td>
			</tr>
		</table>
		<br>
		 <input type="submit" name="update" value="Kemaskini Maklumat">
		</form>
		<br>
	</center>
</body>
</html>