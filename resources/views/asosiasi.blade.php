<!DOCTYPE html>
<html>
<head>
	<title>Daftar Asosiasi</title>
</head>
<body>


	<h3>Data Asosiasi</h3>
    
	
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Singkatan</th>
			<th>Nama</th>
			<th>Link</th>
			<th>Logo</th>
            <th>Opsi</th>
			
		</tr>
		@foreach($asosiasi as $a)
		<tr>
			<td>{{ $a->singkatan }}</td>
			<td>{{ $a->nama }}</td>
			<td>{{ $a->link }}</td>
			<td>{{ $a->logo }}</td>
           
			<td>
            <a href="/ms_hadir/hapus/{{ $a->id }}">Hapus</a>
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