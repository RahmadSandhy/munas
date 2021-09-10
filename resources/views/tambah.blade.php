<!DOCTYPE html>
<html>
<head>
	<title>Tambah asosiasi</title>
</head>
<body>

	<h3>Data asosiasi</h3>

	<a href="/tampil"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/tambah/store3" method="post">
		{{ csrf_field() }}
	    Singkatan <input type="text" name="singkatan" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		Link</Link> <input type="text" name="link" required="required"> <br/>
		Logo <textarea name="logo" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>