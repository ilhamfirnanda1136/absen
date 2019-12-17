<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>Dashboard Absen</title>

  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/demo.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/style.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/modules/toastr/build/toastr.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>

  <link rel="icon" href="<?=base_url()?>/image/cropped-icon.png">
</head>

<body>
<div id="app">
	<div class="main-wrapper">
		<div class="navbar-bg"></div>
		<nav class="navbar navbar-expand-lg main-navbar" style="">
			<form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
          </ul>
        </form>
	        <ul class="navbar-nav navbar-left mr-auto">
	          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
	            <i class="ion ion-android-person d-lg-none"></i>
	            <div class="d-sm-none d-lg-inline-block">Hi ,<?=$this->fungsi->user_login()->nama?></div></a>
	            <div class="dropdown-menu dropdown-menu-right">
	              <a href="<?=site_url('user/changepassword')?>" class="dropdown-item has-icon">
	                <i class="ion ion-key"></i> Ganti Password
	              </a>
	              <a href="<?=site_url('auth/logout')?>" class="dropdown-item has-icon">
	                <i class="ion ion-log-out"></i> Logout
	              </a>
	            </div>
	          </li>
	        </ul>
	      </nav>
	   <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?=site_url('welcome')?>">Absensi Yukpigi</a>
          </div>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src='<?=$this->fungsi->user_login()->foto!=null ? base_url()."image/$this->fungsi->user_login()->foto" :  base_url()."image/no-picture.jpg"; ?>'>
            </div>
            <div class="sidebar-user-details">
              <div class="user-name"><?=$this->fungsi->user_login()->nama?></div>
              <div class="user-role">
                <?= $this->fungsi->user_login()->level== 1 ? 'Administrator' : 'User'?>
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="<?=$this->uri->segment(1)== 'welcome' || $this->uri->segment(1)== '' ? 'active' :'' ?> ">
              <a href="<?=site_url('welcome')?>"><i class="ion ion-speedometer"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Absen</li>
            <li class="<?=$this->uri->segment(2)== 'masuk' ? 'active' :'' ?>">
              <a href="<?=site_url('absen/masuk')?>"><i class="ion ion-speedometer"></i><span>Absen Masuk</span></a>
            </li>
             <li class="<?=$this->uri->segment(2)== 'keluar' ? 'active' :'' ?>">
              <a href="<?=site_url('absen/keluar')?>"><i class="ion ion-speedometer"></i><span>Absen Keluar</span></a>
            </li>
            <?php  if($this->fungsi->user_login()->level == 1)
         {
          ?>
            <li class="menu-header">Riwayat</li>
            <li class="<?=$this->uri->segment(2)== 'riwayat' ? 'active' :'' ?>">
              <a href="<?=site_url('absen/riwayat')?>"><i class="ion ion-ios-albums-outline"></i><span>Riwayat Absen</span></a>
            </li>
             <li class="<?=$this->uri->segment(1)== 'user' ? 'active' :'' ?>">
              <a href="<?=site_url('user')?>"><i class="ion ion-person"></i><span>User</span></a>
            </li> 
          <?php } ?>  
          </ul>
        </aside>
      </div>	
