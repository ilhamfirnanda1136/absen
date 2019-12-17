<div class="main-content">
    <section class="section">
    	<h1 class="section-header">Halo ini Data Anda</h1>
    	<section class="section-body">
    		<?php if($this->session->has_userdata('success')){?>
  				<div class="alert alert-success alert-has-icon alert-dismissible show fade">
                <div class="alert-icon"><i class="ion ion-ios-lightbulb-outline"></i></div>
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>×</span>
                  </button>
                  <div class="alert-title">Success</div>
                 <?=$this->session->flashdata('success')?>
                </div>
              </div>
			   <?php
				  }
			 ?>
    		 <div class="row justify-content-center">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Profil Anda</h4>
                  </div>
                  <div class="card-body">
                    <img class="" src="<?=$this->fungsi->user_login()->foto!=null ? base_url()."image/$this->fungsi->user_login()->foto" :  base_url()."image/no-picture.jpg"; ?>" style="width: 20%; margin-left: 200px; margin-bottom: 5px;">
                    <table width="100%" style="font-size: 20px">
                    	<tr>
                    		<td>Nama Anda </td>
                    		<td>:</td>
                    		<td><?=$this->fungsi->user_login()->nama?></td>
                    	</tr>
                    	<tr>
                    		<td>Jam Masuk </td>
                    		<td>:</td>
                    		<td><?=date('H:i a',strtotime($row->jam_masuk))?></td>
                    	</tr>
                    	<tr>
                    		<td>Tanggal Masuk </td>
                    		<td>:</td>
                    		<td><?=date('d F Y',strtotime($row->tanggal_masuk))?></td>
                    	</tr>
                    </table>
                  </div>
                </div>
              </div>
          </div>
    	</section>
     </section>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	
</script>