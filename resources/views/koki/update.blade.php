<div>
	<form action="" method="post" role="form">
		<div>
			{{ csrf_field() }}
			<label for="">Nama</label>
			<input type="text" name="nama" value="{{ $item->nama }}">
		</div>
		<div>
			<label for="">Kode</label>
			<input type="text" name="kode" value="{{ $item->kode }}">
		</div>
		<button type="submit">Ubah</button>
	</form>
</div>