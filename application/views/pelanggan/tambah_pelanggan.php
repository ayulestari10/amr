
<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Tambah Pelanggan</h1>
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
						<i class="fa fa-gift"></i>Form Tambah Pelanggan
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?= form_open_multipart('pelanggan/tambah-pelanggan', ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<?= $this->session->flashdata('msg') ?>
							<div class="form-group">
								<label class="col-md-3 control-label">SIM Card</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Nomor Modem</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Nomor Meter</label>
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
									<textarea name="" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Tarif</label>
								<div class="col-md-4">
									<input type="text" name="" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Daya</label>
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
