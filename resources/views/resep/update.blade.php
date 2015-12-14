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
		<div>
			<label for="">Nama Koki</label>
			<select name="koki_id">
				<?php foreach($kokis as $koki): ?>
					<option value="{{ $koki->id }}" <?php echo ($koki->id == $item->koki_id) ? 'selected' : '' ?>>{{ $koki->nama }}</option>
				<?php endforeach ?>
			</select>
		</div>
		<button type="submit">Ubah</button>
	</form>
</div>