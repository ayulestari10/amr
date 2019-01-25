
<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Tambah Realisasi</h1>
		</div>
		<!-- END PAGE TITLE -->
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
		<div class="col-md-12">
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>Form Tambah Realisasi
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?= form_open_multipart('pelanggan/tambah-pelanggan', ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<?= $this->session->flashdata('msg') ?>
							<div class="form-group">
								<label class="col-md-3 control-label">ID Pelanggan</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">ID TO</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Ganti Meter</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Ganti Modem</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Ganti SIM</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Ganti Pembatas Arus</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Ganti CT</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Kesimpulan</label>
								<div class="col-md-4">
									<textarea class="form-control"></textarea>
								</div>
							</div>
							
									<div class="form-group">
										<label class="control-label col-md-3">Start With Years</label>
										<div class="col-md-3">
											<div class="input-group input-medium date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
												<input type="text" class="form-control" readonly>
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											Select date </span>
										</div>
									</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Arus R</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Arus S</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Arus T</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Tegangan R</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Tegangan S</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Tegangan T</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Stand Total</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Status</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
						</div>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
								</div>
							</div>
						</div>
					<?= form_close() ?>
					<!-- END FORM-->
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>



<script>
    jQuery(document).ready(function() {       
       	// initiate layout and plugins
       	Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
       	ComponentsPickers.init();
    });   
</script>