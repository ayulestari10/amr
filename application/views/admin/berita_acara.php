<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Berita Acara</h1>
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
						<i class="fa fa-gift"></i>Berita Acara
					</div>
				</div>
				<div class="portlet-body form" style="min-height: 400px;">
					<!-- BEGIN FORM-->
					<?= form_open_multipart('pelanggan/input-berita-acara', ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<?= $this->session->flashdata('msg') ?>
							<div class="form-group" style="margin-top: 5%;">
								<label class="control-label col-md-3">Tanggal</label>
								<div class="col-md-3">
									<input class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="" name="tangal">
									<span class="help-block">
									Select date </span>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">No Berita Acara</label>
								<div class="col-md-4">
									<input type="text" name="no_berita_acara" class="form-control"/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Upload File Foto atau PDF</label>
								<div class="col-md-4">
									<input type="file" name=""/>
								</div>
							</div>
						</div>
						<!-- <div class="form-actions"> -->
							<div class="row">
								<div class="col-md-offset-3 col-md-9"><br>
									<button type="submit" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
								</div>
							</div>
						<!-- </div> -->
					<?= form_close() ?>
					<!-- END FORM-->
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>