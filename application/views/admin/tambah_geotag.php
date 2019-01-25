
<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Tambah Geotag</h1>
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
						<i class="fa fa-gift"></i>Form Tambah Geotag
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?= form_open_multipart('admin/tambah-geotag', ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<?= $this->session->flashdata('msg') ?>
							<div class="form-group">
								<label class="col-md-3 control-label">ID Pelanggan</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Nama</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Alamat</label>
								<div class="col-md-4">
									<textarea class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Koordinat</label>
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