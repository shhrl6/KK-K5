<?php
 include 'config.php';
 
 if(isset($_POST['update'])) {
	
	  $bi=$_POST['Bil'];
	 $np=$_POST['Nama_Pensyarah'];
	 $ke=$_POST['Kelas'];
	 $bp=$_POST['Bilangan_Pelajar'];
	 $ca=$_POST['Catatan'];
	 $nm=$_POST['Nama_Makmal'];
	
	 $edit=mysqli_query($conn,"UPDATE pengguna SET  Bil='$bi',Nama_Pensyarah='$np',Kelas='$ke',Bilangan_Pelajar='$bp,'Catatan='ca',Nama_Makmal='nm'");

	 echo "<script> alert ('Kemaskini Maklumat Berjaya') window.location='index.php'</script>";
	 header ("location:index.php");
}
?>