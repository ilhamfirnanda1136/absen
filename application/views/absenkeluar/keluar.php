<div class="main-content">
    <section class="section">
    	<h1 class="section-header text-center">Silahkan Absen Keluar</h1>
    	<section class="section-body">
    		 <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Form Pulang</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" action="<?=site_url('absen/prosesKeluar')?>">
                    	 <div class="form-group">
		                    <label for="tgl">Tanggal Keluar</label>
		                    <input id="tgl" type="text" name="tgl" class="form-control" tabindex="1" required autofocus readonly="" onload="" value="<?=date('Y-m-d')?>">
		                    <input type="hidden" name="user" value="<?=$this->fungsi->user_login()->iduser?>">
		                    <input type="hidden" name="absenmasuk" id="absen_masuk" value="<?=$row != null ? $row->id : '' ;?>">
		                  </div>
		                 <div class="form-group">
		                 	<label for="keterangan">Keterangan Pekerjaan</label>
		                 	<textarea class="form-control" name="keterangan" id="keterangan"></textarea>
		                 </div>
		                 <button type="button" id="button" class="btn btn-primary">Pulang</button>
		                  <button type="submit" hidden="" id="keluar" name="keluar" class="btn btn-primary"></button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
    	</section>
     </section>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
  $(document).ready(function(){
  	$('#button').click(function(){
  		if ($('#absen_masuk').val()=='') {
  			toastr.error("Mohon untuk mengisi jadwal masuk terlebih dahulu", "Gagal");
  		}
  		else{
  			$('#keluar').trigger('click');
  		}
  	})
  });
</script>
