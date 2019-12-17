<!DOCTYPE html>
<html>
<head>
	<title>laporan pdf</title>
</head>
<body>
	<div>
		<center>
			<h1>Data Riwayat Bulanan</h1>
		</center>
		 <table width="100%" border="1">
                      	<thead  style="background-color: green ">
                      		 <tr>
	                          <th>#</th>
	                          <th>Nama Pegawai</th>
	                          <th>Tanggal Masuk</th>
	                          <th>Jam Masuk</th>
	                          <th>jam Keluar</th>
	                          <th>Total Kerja</th>
	                        </tr>
                      	</thead>
                       <tbody>
                       	<?php $no=1; if (!empty($row)) {
	                       	foreach ($row as $key) {
	                       		?>
	                       		<tr>
	                       			<td><?=$no++?></td>
	                       			<td><?=$key['nama']?></td>
	                       			<td><?=$key['tanggal_masuk']?></td>
	                       			<td><?=$key['jam_masuk']?></td>
	                       			<td><?=$key['jam_keluar']?></td>
	                       			<td><?=$key['jam_kerja']?></td>
	                       		</tr>
                       		<?php
                       		} 
                       	} ?>
           </tbody>  
          </table>
	</div>
</body>
</html>