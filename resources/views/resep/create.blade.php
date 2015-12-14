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
		<div>
			<label for="">Nama Koki</label>
			<select name="koki_id">
				<?php foreach($kokis as $koki): ?>
					<option value="{{ $koki->id }}">{{ $koki->nama }}</option>
				<?php endforeach ?>
			</select>
		</div>
		<button type="submit">Tambah</button>
	</form>
</div>