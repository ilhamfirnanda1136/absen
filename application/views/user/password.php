<div class="main-content">
    <section class="section">
    	<h1 class="section-header">Ubah Password</h1>
    	<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
                  <div class="card-header">
                    <h4>Ubah Password</h4>
                  </div>
                  <div class="card-body">
                   <form method="post" action="<?=site_url('user/prosespassword')?>">
                    	 <div class="form-group">
		                    <label for="password">Password lama</label>
		                    <input type="password" name="password" id="password" class="form-control" placeholder="masukkan Password Lama" required="">
		                    <input type="hidden" name="username" value="<?=$this->fungsi->user_login()->username?>">
		                 </div>
		                 <div class="form-group">
		                    <label for="newpassword">Password baru</label>
		                    <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="masukkan password baru" required="">
		                 </div>
		                  <button type="submit" name="ganti" class="btn btn-primary">Simpan Pegawai</button>
                    </form>
                  </div>
                </div>
			</div>
		</div>
    </section>
 </div>