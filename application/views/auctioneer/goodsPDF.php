<label><b>Nama Barang</b></label>
<div><?= $goods['nama_barang']?></div><br>

<label><b>Harga Akhir</b></label>
<div><?= $goods['harga_akhir']?></div><br>

<label><b>Deskripsi</b></label>
<div><?= $goods['deskripsi']?></div><br>

<h4 align="center">Tabel Riwayat Pengajuan</h4>				   
<table border="1" width="100%">
	<thead>
		<tr>
		  <th>Jam/Tanggal</th>
		  <th>Nama</th>
		  <th>Harga</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($history as $row):?>
			<tr>
			  <td><?= $row['waktu']?> / <?= $row['tanggal']?></td>
			  <td><?= $row['username']?></td>
			  <td><?= $row['harga_penawaran']?></td>
			</tr>
		<?php endforeach?>
	</tbody>
</table>