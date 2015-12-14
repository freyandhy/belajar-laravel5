<html>
	<head>
		<title>My Laravel</title>
	</head>

	<body>
		<div>
			<div>
				<a href="resep/create">Tambah</a>
			</div>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Kode</th>
						<th>Nama Koki</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				@foreach($items as $i => $item)
					<tr>
						<td>{{ ++$i }}</td>
						<td>{{ $item->nama }}</td>
						<td>{{ $item->kode }}</td>
						<td>{{ $item->koki->nama }}</td>
						<td>
							<a href="resep/update/{{ $item->id }}">Ubah</a>
							<a href="resep/delete/{{ $item->id }}">Hapus</a>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</body>
</html>