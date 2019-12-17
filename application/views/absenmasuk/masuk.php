<div class="main-content">
    <section class="section">
    	<h1 class="section-header text-center">Silahkan Absen Masuk</h1>
    	<section class="section-body">
    		 <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Masuk</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" action="<?=site_url('absen/prosesMasuk')?>">
                    	 <div class="form-group">
		                    <label for="tgl">Tanggal Masuk</label>
		                    <input id="tgl" type="text" name="tgl" class="form-control" tabindex="1" required autofocus readonly="" onload="" value="<?=date('Y-m-d')?>">
		                    <input type="hidden" name="user" value="<?=$this->fungsi->user_login()->iduser?>">
		                  </div>
		                  <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
    	</section>
     </section>
</div>
<?php $this->load->view('footer'); ?>

