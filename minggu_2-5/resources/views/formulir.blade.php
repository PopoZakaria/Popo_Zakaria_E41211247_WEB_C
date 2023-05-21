<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	<p>Nama :</p> 
		<input type="text" name="nama">
        <br>
		<p>Alamat :</p> 
		<input type="text" name="alamat">
        <br>
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>