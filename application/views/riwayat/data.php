<div class="main-content">
	<section class="section">
		<h1 class="section-header text-center">Riwayat Absen</h1>
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card">
				   <div class="card-header">
                    <h4>Pilih Riwayat</h4>
                  </div>
                  <div class="card-body">              
                  	<form method="get" action="<?=site_url('absen/riwayat')?>">
                    	 <div class="form-group">
		                    <label for="tgl">Pilih Bulan dan tahun</label>
		                   	<?php $data = ['01'=>'Januari','02'=>'Februari','03'=>'Maret','04'=>'April','05'=>'Mei','06'=>'Juni','07'=>'Juli','08'=>'Agustus','09'=>'September','10'=>'Oktober','11'=>'November','12'=>'Desember'];
		                   	  ?>
		                   	<select class="form-control" name="bulan" id="bulan">
		                   	<?php  foreach ($data as $key => $value) { 
		                     ?>
		                     <option value="<?= $key?>" <?= $bulan==$key ? 'selected':''?>><?=$value ?></option>
		                     <?php
		                    } ?>
		                   	</select>
		                   	<select class="form-control mt-3" name="tahun" id="tahun">
		                   		 <?php
			                $thn_skr = date('Y');
			                for ($x = $thn_skr; $x >= 2019; $x--) {
			                ?>
			                    <option value="<?=$x?>"<?= $x == $tahun ? 'selected':'' ?>><?php echo $x ?></option>
			                <?php
			                }
			                ?>
		                   	</select>
		                  </div>
		                  <button type="submit" name="masuk" class="btn btn-primary">pilih</button>
                    </form>
                  </div>
				</div>
				
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Riwayat</h4>
                    <a href='' target="_blank" id="print_riwayat" class="btn btn-success btn-md float-right"><i class="ion ion-printer"></i> Cetak PDF</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-absen">
                      	<thead>
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
                  </div>
                </div>
              </div>
		</div>
	</section>
</div>

<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		let bulan=$('#bulan').val();
	let tahun=$('#tahun').val();
	let link = "<?=site_url('absen/laporan');?>"
	let link2= link+"/"+bulan+"/"+tahun;
	$('#print_riwayat').attr('href',link2);
	$('#table-absen').DataTable();
	});
</script>s