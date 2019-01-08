<style type="text/css">
.spinner {
	display: inline-block;
	opacity: 0;
	max-width: 0;

	-webkit-transition: opacity 0.25s, max-width 0.45s; 
	-moz-transition: opacity 0.25s, max-width 0.45s;
	-o-transition: opacity 0.25s, max-width 0.45s;
	transition: opacity 0.25s, max-width 0.45s; /* Duration fixed since we animate additional hidden width */
}

.has-spinner.active {
 	cursor:progress;
}

.has-spinner.active .spinner {
	opacity: 1;
	max-width: 50px; /* More than it will ever come, notice that this affects on animation duration */
}
</style>
<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Pelanggan</h1>
		</div>
		<!-- END PAGE TITLE -->
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
		<div class="col-md-12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box grey-cascade">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">
								<a href="<?= base_url('pelanggan/tambah-pelanggan') ?>" id="sample_editable_1_new" class="btn green"> <i class="fa fa-plus"></i> Tambah</a>
							</div>
						</div>
						<div class="col-md-12" style="margin-top: 3%;">
							<table class="table table-striped table-bordered table-hover text-center" id="sample_1">
								<thead>
									<tr>
										<th style="text-align: center;">
											No
										</th>
										<th style="text-align: center;">
											SIM Card
										</th>
										<th style="text-align: center;">
											No Modem
										</th>
										<th style="text-align: center;">
											No Meter
										</th>
										<th style="text-align: center;">
											Nama
										</th>
										<th style="text-align: center;">
											Tarif
										</th>
										<th style="text-align: center;">
											Daya
										</th>
										<th style="text-align: center;">
											Alamat
										</th>
										<th width="200" style="text-align: center;">
											Aksi
										</th>
									</tr>
								</thead>
								<tbody>
										<tr class="odd gradeX">
											<td>
												1
											</td>
											<td>
												ACS123
											</td>
											<td>
												54321
											</td>
											<td>
												12345
											</td>
											<td>
												Ayu
											</td>
											<td>
												2000
											</td>
											<td>
												12 
											</td>
											<td>
												Jl.Kemana-mana
											</td>
											<td>
												<div class="btn-group btn-group-solid">
													<a href="<?= base_url('pelanggan/edit-pelanggan') ?>" class="btn blue btn-sm"><i class="fa fa-edit"></i> Edit</a>
													<a href="<?= base_url('pelanggan/detail-pelanggan') ?>" class="btn green btn-sm"><i class="fa fa-eye"></i> Detail</a>

													<a href="<?= base_url('pelanggan/hapus-pelanggan') ?>" class="btn red btn-sm"><i class="fa fa-trash"></i> Hapus</a>
												</div>
											</td>
										</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>


<script type="text/javascript">
	$(document).ready(function() {
		$('#sample_1').dataTable({
			ordering: false
		});
	});

</script>