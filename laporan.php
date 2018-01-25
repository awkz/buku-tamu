<?php  
$url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('koneksi.php');
$no = 1;


if (isset($_GET['start']) & isset($_GET['end'])) {
	$ReadSql = "SELECT * FROM `guest` WHERE `tanggal` BETWEEN '".$_GET['start']."' AND '".$_GET['end']."' ORDER BY `tanggal` DESC";
} else {
$ReadSql = "SELECT * FROM `guest` ORDER BY `tanggal` DESC";
}
$res = mysqli_query($db, $ReadSql);



include 'aheader.php';
?>

		<!-- Main Content -->
		<div class="page-wrapper">
            <div class="container-fluid">
				
				<!-- Title -->
				<div class="row heading-bg">
					<div class="col-lg-8 col-md-4 col-sm-4 col-xs-12">
						<h5 class="txt-dark">Laporan</h5>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="form-group mb-0">
							<input class="form-control input-daterange-datepicker" type="text" id="reportrange"  name="datefilter" value="2018/01/01 - 2018/01/31"/>
						</div>
					</div>
				</div>
				<!-- /Title -->
				<!-- Row -->
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="table-wrap">
										<div class="table-responsive">
											<table id="example" class="table table-hover display  pb-30" >
												<thead>
													<tr>
														<th>No</th>
														<th>NIK</th>
														<th>Nama</th>
														<th>Alamat</th>
														<th>Telpon</th>
														<th>Instansi</th>
														<th>Keperluan</th>
														<th>Tanggal</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>No</th>
														<th>NIK</th>
														<th>Nama</th>
														<th>Alamat</th>
														<th>Telpon</th>
														<th>Instansi</th>
														<th>Keperluan</th>
														<th>Tanggal</th>
													</tr>
												</tfoot>
												<tbody>
													<?php
													while ($r = mysqli_fetch_assoc($res)) { ?>
														<tr>
															<td><?php echo $no;$no++;?></td>
															<td><?php echo $r['nik'];?></td>
															<td><?php echo $r['nama'];?></td>
															<td><?php echo $r['alamat'];?></td>
															<td><?php echo $r['telpon'];?></td>
															<td><?php echo $r['instansi'];?></td>
															<td><?php echo $r['keperluan'];?></td>
															<td><?php echo $r['tanggal'];?></td>
														</tr>
													<?php
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<!-- /Row -->
			
				

<?php
include 'afooter.php';

?>