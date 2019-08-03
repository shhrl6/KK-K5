<!DOCTYPE html>
<html>
<head>
	<title>Makmal Perd</title>
</head>
<body><br>
	<center>
		<h1>SISTEM PENGGUNAAN MAKMAL</h1>		
		
		<table border="1" cellpadding="6" cellspacing="0">
			<tr>
				<th>Bil</th>
				<th>Nama_Pensyarah</th>
				<th>Kelas</th>
				<th>Bilangan_Pelajar</th>
				<th>Catatan</th>
				<th>Nama_Makmal</th>
				<th colspan="">Kemaskini | Padam</th>
			</tr>
			<?php include'config.php';
$dis = mysqli_query($conn, 'SELECT * FROM pengguna');
while ($result=mysqli_fetch_array($dis)) {

			echo "<tr>	
	<td align='center'>".$result['bil']."</td>		
	<td align='center'>".$result['Nama_Pensyarah']."</td>
	<td align='center'>".$result['Kelas']."</td>
	<td align='center'>".$result['Bilangan_Pelajar']."</td>
	<td align='center'>".$result['Catatan']."</td>
	<td align='center'>".$result['Nama_Makmal']."</td>
	
	<td align='center'><a href='update.php?Bil=$result[Bil]'>Update</a><br>
	<a href='delete.php?Bil=$result[Bil]'>Delete</a>
	</td>
</tr>";	}
			?>

		</table><br> <a href="add.php">Tambah Rekod</a>
	</center>
</body>
</html>