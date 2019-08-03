<?php
 include 'config.php';
 
 if(isset($_POST['submit'])) {

	 $bi=$_POST['Bil'];
	 $np=$_POST['Nama_Pensyarah'];
	 $ke=$_POST['Kelas'];
	 $bp=$_POST['Bilangan_Pelajar'];
	 $ca=$_POST['Catatan'];
	 $nm=$_POST['Nama_Makmal'];
	

$edit=mysqli_query($conn,"INSERT INTO pengguna SET Bil='$bi',Nama_Pensyarah='$np',Kelas='$ke',Bilangan_Pelajar='$bp,
'Catatan='$ca',Nama_Makmal='$nm'");
	 
header("location:index.php");
}
?>