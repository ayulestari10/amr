
<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Detail Pelanggan</h1>
		</div>
		<!-- END PAGE TITLE -->
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row">
		<div class="col-md-12">
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
					</div>
				</div>
				<div class="portlet-body" style="min-height: 460px;">
					<div class="tabbable tabs-right">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_7_1" data-toggle="tab">
								Data Pelanggan </a>
							</li>
							<li>
								<a href="#tab_7_2" data-toggle="tab">
								Meter </a>
							</li>
							<li>
								<a href="#tab_7_3" data-toggle="tab">
								Modem </a>
							</li>
							<li>
								<a href="#tab_7_4" data-toggle="tab">
								SIM Card </a>
							</li>
						</ul>


						<div class="tab-content">
							<!-- tab Data Pelanggan -->
							<div class="tab-pane active form" id="tab_7_1">
								<!-- BEGIN FORM-->
								<?= form_open_multipart('pelanggan/edit-pelanggan', ['class' => 'form-horizontal']) ?>
									<div class="form-body">
										<?= $this->session->flashdata('msg') ?>
										<div class="form-group">
											<label class="col-md-3 control-label">SIM Card</label>
											<div class="col-md-4">
												<input type="text" name="" value="Aaa" class="form-control"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Nomor Modem</label>
											<div class="col-md-4">
												<input type="text" name="" value="54321" class="form-control"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Nomor Meter</label>
											<div class="col-md-4">
												<input type="text" name="" value="12345" class="form-control"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Nama</label>
											<div class="col-md-4">
												<input type="text" name="" value="Ayu" class="form-control"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Alamat</label>
											<div class="col-md-4">
												<textarea name="" class="form-control">Jl.Kemana-mana</textarea>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Tarif</label>
											<div class="col-md-4">
												<input type="text" name="" value="12" class="form-control"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Daya</label>
											<div class="col-md-4">
												<input type="text" name="" value="123" class="form-control"/>
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

							<!-- tab Meter -->
							<div class="tab-pane fade" id="tab_7_2">
								<!-- BEGIN FORM-->
								<?= form_open_multipart('pelanggan/data-meter', ['class' => 'form-horizontal']) ?>
									<div class="form-body">
										<?= $this->session->flashdata('msg') ?>
										<div class="form-group">
											<label class="col-md-3 control-label">ID Nomor Meter</label>
											<div class="col-md-4">
												<input type="text" name="" value="1" class="form-control" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Spesifikasi</label>
											<div class="col-md-4">
												<input type="text" name="" value="Aaa" class="form-control" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Tahun</label>
											<div class="col-md-4">
												<input type="text" name="" value="2019" class="form-control" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Longitude</label>
											<div class="col-md-4">
												<input type="text" name="" value="12345" class="form-control" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Latitude</label>
											<div class="col-md-4">
												<input type="text" name="" value="54321" class="form-control" readonly />
											</div>
										</div>
										
									</div>
									<div class="form-actions">
										<!-- <div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
											</div>
										</div> -->
									</div>
								<?= form_close() ?>
								<!-- END FORM-->
							</div>

							<!-- tab Modem -->
							<div class="tab-pane fade" id="tab_7_3">
								<!-- BEGIN FORM-->
								<?= form_open_multipart('pelanggan/data-meter', ['class' => 'form-horizontal']) ?>
									<div class="form-body">
										<?= $this->session->flashdata('msg') ?>
										<div class="form-group">
											<label class="col-md-3 control-label">NO IMEI</label>
											<div class="col-md-4">
												<input type="text" name="" value="A123" class="form-control" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Tipe</label>
											<div class="col-md-4">
												<input type="text" name="" value="avc" class="form-control" readonly />
											</div>
										</div>
									</div>
									<div class="form-actions">
										<!-- <div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
											</div>
										</div> -->
									</div>
								<?= form_close() ?>
								<!-- END FORM-->
							</div>

							<!-- tab SIM Card -->
							<div class="tab-pane fade" id="tab_7_4">
								<!-- BEGIN FORM-->
								<?= form_open_multipart('pelanggan/data-meter', ['class' => 'form-horizontal']) ?>
									<div class="form-body">
										<?= $this->session->flashdata('msg') ?>
										<div class="form-group">
											<label class="col-md-3 control-label">NO SIM Card</label>
											<div class="col-md-4">
												<input type="text" name="" value="12345" class="form-control" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">Provider</label>
											<div class="col-md-4">
												<input type="text" name="" value="Telkomsel" class="form-control" readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-3 control-label">IP Adress</label>
											<div class="col-md-4">
												<input type="text" name="" value="111.111.111" class="form-control" readonly />
											</div>
										</div>
									</div>
									<div class="form-actions">
										<!-- <div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
											</div>
										</div> -->
									</div>
								<?= form_close() ?>
								<!-- END FORM-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
