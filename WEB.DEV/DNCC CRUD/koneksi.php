<?php 
$conn=mysqli_connect ("localhost", "root", "") or die ("tidak konek");
$db=mysqli_select_db ($conn, "dbdncc") or die ("database tidak ada ");
?>