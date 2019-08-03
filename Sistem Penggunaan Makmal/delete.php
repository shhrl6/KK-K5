<?php
require ('config.php');

$bi=$_GET['Bil'];

$result= mysqli_query($conn,"DELETE FROM pengguna WHERE Bil='$bi'");
 
echo "<script>alert ('Padam Maklumat Berjaya') window.location='index.php'</script>";
header ("location:index.php");

?>