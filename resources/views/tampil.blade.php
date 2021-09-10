<!DOCTYPE html>
<html>
<head>
	<title>Daftar Hadir Munas</title>
</head>
<body>


	<h3>Data Hadir</h3>
    <a href="/ms_hadir/tambah"> + Tambah Asosiasi</a>
	
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>No Hp</th>
			<th>Asosiasi</th>
			<th>Provinsi</th>
            <th>Foto</th>
            <th>Opsi</th>
		</tr>
		@foreach($ms_hadir as $key)
		<tr>
			<td>{{ $key->nama }}</td>
			<td>{{ $key->jabatan }}</td>
			<td>{{ $key->no_hp }}</td>
			<td>{{ $key->asosiasi }}</td>
            <td>{{ $key->prov }}</td>
            <td>{{ $key->f_foto }}</td>
			<td>
            <a href="/ms_hadir/hapus/{{ $key->id }}">Hapus</a>
            </td>
        </tr>
		@endforeach
	</table>
   


</body>
@push('script')
<script src="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>	
@endpush
</html>