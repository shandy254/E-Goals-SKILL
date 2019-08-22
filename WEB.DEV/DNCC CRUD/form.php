<html>

<head>

	<title> DATA MAHASISWA </title>
	
</head>

<body>
<form action="simpan.php" method="post">
<table border="3" width="100" align="center">

<tr>
	<td colspan="3" align="center" > FORM MAHASISWA </td>

		<!-- membuat baris ID -->
	<tr>
		<td align="left">ID</td>
		<td align="left">:</td>
		<td align="left">
			<input type="text" name="id_mhs" /><br/> <!-- Name = ID -->
			
		</td>
		
		<!-- membuat baris NAMA -->
	</tr>
	
	<tr>
		<td align="left">NAMA</td>
		<td align="left">:</td>
		<td align="left">
			<input type="text" name="nama" /><br/>  <!-- Name = nama -->
			
		</td>
	</tr>
	
	<!-- membuat baris NIM -->
	
	<tr>
		<td align="left">NIM</td>
		<td align="left">:</td>
		<td align="left">
			<input type="text" name="nim" /><br/>  <!-- Name = nim -->
			
		</td>
	</tr>
	
	<!-- membuat baris jurusan -->
	
	<tr>
		<td align="left">JURUSAN</td>
		<td align="left">:</td>
		<td align="left">
			<input type="text" name="jurusan" /><br/>  <!-- Name = jurusan -->
			
		</td>
	</tr>
	
	
	<!--membuat tombol submit -->
	
	<tr>
	
			<td colspan="3" align="center">
			<input type="submit" name "Simpan" />
			<input type="reset" name="Reset"/>
			
	</tr>
	
</table>			
</body>

</html>