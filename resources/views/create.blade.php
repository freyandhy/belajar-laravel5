<div>
	<form action="" method="post" role="form">
		<div>
			{{ csrf_field() }}
			<label for="">Nama</label>
			<input type="text" name="nama">
		</div>
		<div>
			<label for="">Kode</label>
			<input type="text" name="kode">
		</div>
		<button type="submit">Tambah</button>
	</form>
</div>