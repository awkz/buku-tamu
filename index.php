<?php
session_start();
include 'head.php';
?>

	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.php">
						<img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>
						<span class="brand-text">Buku Tamu</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<a class="inline-block btn btn-info btn-success btn-rounded btn-outline" href="admin.php">Admin</a>
				</div>
				<div class="clearfix"></div>
			</header>
			<div id="guest-success"></div>
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Isi Buku Tamu</h3>
											<h6 class="text-center nonecase-font txt-grey">Masukkan data anda di bawah ini</h6>
										</div>	
										<div class="form-wrap">
											<form action="act_guest.php" method="POST">
												<div class="form-group">
													<label class="control-label mb-10" for="NIK">NIK</label>
													<input type="text" class="form-control" required="" id="nik" name="nik" placeholder="332709xxxxxxxxxx">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="nama">Nama</label>
													<input type="text" class="form-control" required="" id="nama" name="nama" placeholder="nama">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="alamat">Alamat</label>
													<textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="telpon">Telpon</label>
													<input type="text" class="form-control" required="" id="telpon" name="telpon" placeholder="085225415xxx">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="instansi">Instansi</label>
													<input type="text" class="form-control" required="" id="instansi" name="instansi" placeholder="STMIK Widya Pratama">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="keperluan">Keperluan</label>
													<textarea class="form-control" id="keperluan" name="keperluan" rows="5"></textarea>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-info btn-success btn-rounded">Kirim</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
<?php
include 'foot.php';

?>