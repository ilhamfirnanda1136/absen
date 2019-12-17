<div class="main-content">
    <section class="section">
    	<h1 class="section-header">Tambah Data Pegawai</h1>
    	<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
                  <div class="card-header">
                    <h4>Tambah Data Pegawai</h4>
                  </div>
                  <div class="card-body">
                  	<?php echo form_open_multipart('user/proses') ?>                
                    	 <div class="form-group">
		                    <label for="username">UserName</label>
		                    <input type="text" name="username" id="username" class="form-control" placeholder="masukkan username" required="">
		                 </div>
		                 <div class="form-group">
		                    <label for="password">Password</label>
		                    <input type="password" name="password" id="password" class="form-control" placeholder="masukkan password" required="">
		                 </div>

		                 <div class="form-group">
		                    <label for="nama">Nama Lengkap</label>
		                    <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan Nama Lengkap" required="">
		                 </div>
		                  <div class="form-group">
		                    <label for="foto">Foto</label>
		                    <input type="file" name="foto" id="foto" accept=".jpg,.png,.jpeg" class="form-control" >
		                 </div>
		                  <button type="submit" name="simpan" class="btn btn-primary">Simpan Pegawai</button>
                    </form>
                  </div>
                </div>
			</div>
		</div>
    </section>
 </div>