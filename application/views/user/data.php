<div class="main-content">
    <section class="section">
    	<h1 class="section-header">Data Pegawai</h1>
    	<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
                  <div class="card-header">
                    <h4>Data Pegawai</h4>
                    <a href="<?=site_url('user/add')?>" class="btn btn-success ml-auto float-right" ><i class="ion ion-plus"></i>Tambah Pegawai</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-absen">
                      	<thead>
                      		 <tr>
	                          <th>#</th>
	                          <th>Nama Pegawai</th>
	                          <th>Username</th>
	                          <th>Foto</th>
	                          <th>Level</th>
	                          <th>Action</th>
	                        </tr>
                      	</thead>
                       <tbody>
                       	<?php $no=1; if (!empty($row)) {
	                       	foreach ($row as $key) {
	                       		?>
	                       		<tr>
	                       			<td><?=$no++?></td>
	                       			<td><?=$key->nama?></td>
	                       			<td><?=$key->username?></td>
	                       			<td width="20%"><img style="width: 40px;" src='<?=$key->foto !=null ? base_url()."image/$key->foto" :  base_url()."image/no-picture.jpg"; ?>'></td>
	                       			<td><?=$key->level==1 ? 'administration' : 'pegawai'?></td>
	                       			<td><?php if ($key->level==1) {
	                       				?>
	                       				<span class="badge badge-primary">Admin tidak bisa dihapus</span>
	                       				<?php
	                       			 } else { ?>
	                       				<a onclick="return confirm('yakin ingin menghapus Pegawai ini!')" href="<?=site_url('user/hapus/').$key->iduser?>"  class="btn btn-danger btn-md text-white">Hapus</a>
	                       			<?php } ?>
	                       				</td>
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