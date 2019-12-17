
	</div>
</div>
  <script src="<?=base_url()?>asset/dist/modules/jquery.min.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/popper.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/tooltip.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
  <script src="<?=base_url()?>asset/dist/js/sa-functions.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/chart.min.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/summernote/summernote-lite.js"></script>
  <script src="<?=base_url()?>asset/dist/js/scripts.js"></script>
  <script src="<?=base_url()?>asset/dist/js/custom.js"></script>
  <script src="<?=base_url()?>asset/dist/modules/toastr/build/toastr.min.js"></script>

  <script type="text/javascript">
 <?php if($this->session->has_userdata('success')){?>
   toastr.success("<?=$this->session->flashdata('success')?>", "Berhasil");
   <?php
	  }
 ?>
 <?php if($this->session->has_userdata('error')){?>
   toastr.error("<?=$this->session->flashdata('error')?>", "Gagal");
   <?php
    }
 ?>
  </script>
</body>
</html>