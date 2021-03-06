
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
			<div class="portlet box blue" id="form_wizard_1">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i> Tambah Pengguna - <span class="step-title">
						Step 1 of 6 </span>
					</div>
					<div class="tools hidden-xs">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body form">
					<?= form_open_multipart('admin/tambah-pelanggan', ['class' => 'form-horizontal', 'id' => 'submit_form']) ?>
						<div class="form-wizard">
							<div class="form-body">
								<ul class="nav nav-pills nav-justified steps">
									<li>
										<a href="#tab1" data-toggle="tab" class="step">
										<span class="number">
										1 </span>
										<span class="desc" style="display: block !important;">
										<i class="fa fa-check"></i> Data Pelanggan </span>
										</a>
									</li>
									<li>
										<a href="#tab2" data-toggle="tab" class="step">
										<span class="number">
										2 </span>
										<span class="desc" style="display: block !important;">
										<i class="fa fa-check"></i>  Meter </span>
										</a>
									</li>
									<li>
										<a href="#tab3" data-toggle="tab" class="step active">
										<span class="number">
										3 </span>
										<span class="desc" style="display: block !important;">
										<i class="fa fa-check"></i> Modem </span>
										</a>
									</li>
									<li>
										<a href="#tab4" data-toggle="tab" class="step">
										<span class="number">
										4 </span>
										<span class="desc" style="display: block !important;">
										<i class="fa fa-check"></i> SIM Card </span>
										</a>
									</li>
									<li>
										<a href="#tab5" data-toggle="tab" class="step">
										<span class="number">
										5 </span>
										<span class="desc" style="display: block !important;">
										<i class="fa fa-check"></i> Pembatas Arus </span>
										</a>
									</li>
									<li>
										<a href="#tab6" data-toggle="tab" class="step">
										<span class="number">
										6 </span>
										<span class="desc" style="display: block !important;">
										<i class="fa fa-check"></i>CT </span>
										</a>
									</li>
								</ul>
								<div id="bar" class="progress progress-striped" role="progressbar">
									<div class="progress-bar progress-bar-success">
									</div>
								</div>
								<div class="tab-content">
									<div><?= $this->session->flashdata('msg') ?></div>

									<div class="alert alert-danger display-none">
										<button class="close" data-dismiss="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-none">
										<button class="close" data-dismiss="alert"></button>
										Your form validation is successful!
									</div>
									<div class="tab-pane active" id="tab1">
										<h3 class="block">Tambah Data Pengguna</h3>
										<hr>
										<div class="form-group">
											<label class="control-label col-md-3">Username <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="username"/>
												<span class="help-block">
												Username </span>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Password <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="password" class="form-control" name="password" id="submit_form_password"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Konfirmasi Password <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="password" class="form-control" name="rpassword"/>
											</div>
										</div>

										<hr>
										<h3 class="block">Tambah Data Pelanggan</h3>
										<hr>		
									
										<div class="row form-horizontal">
											<div class="form-body">
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
										</div>
									<!-- END FORM-->

									</div>
									<div class="tab-pane" id="tab2">
										<h3 class="block">Tambah Data Meter</h3>
										<div class="form-group">
											<label class="control-label col-md-3">Merk <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="merk"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Tahun Buat <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="tahun_buat"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Latitude <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="latitude"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Longitude <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="number" class="form-control" name="longitude"/>
											</div>
										</div>	
									</div>


									<div class="tab-pane" id="tab3">
										<h3 class="block">Tambah Data Modem</h3>
										<div class="form-group">
											<label class="control-label col-md-3">IMEI <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="imei"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Merk<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="merk"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Tipe <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="tipe"/>
											</div>
										</div>
									</div>


									<div class="tab-pane" id="tab4">
										<h3 class="block">Tambah Data SIM Card</h3>
										<div class="form-group">
											<label class="control-label col-md-3">Nomor SIM Card<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="no_sim_card"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Provider<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="provider"/>
											</div>
										</div>
									</div>

									<div class="tab-pane" id="tab5">
										<h3 class="block">Tambah Data Pembatas Arus</h3>
										<div class="form-group">
											<label class="control-label col-md-3">Merk<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="merk_pembatas_arus"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Tipe<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="tipe_pembatas_arus"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Arus<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="arus"/>
											</div>
										</div>
									</div>


									<div class="tab-pane" id="tab6">
										<h3 class="block">Tambah Data CT</h3>
										<div class="form-group">
											<label class="control-label col-md-3">Jenis<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="jenis_ct"/>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions">
								<div class="row">
									<div class="col-md-offset-3 col-md-9">
										<a href="javascript:;" class="btn default button-previous">
										<i class="m-icon-swapleft"></i> Back </a>
										<a href="javascript:;" class="btn blue button-next">
										Continue <i class="m-icon-swapright m-icon-white"></i>
										</a>
										<a href="javascript:;" class="btn green button-submit">
										Submit <i class="m-icon-swapright m-icon-white"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="row margin-top-10">
		<div class="col-md-12">
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>Form Tambah Pelanggan
					</div>
				</div>
				<div class="portlet-body form">
					
				</div>
			</div>
		</div>
	</div> -->
	<!-- END PAGE CONTENT INNER -->
</div>

<script type="text/javascript" src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/metronic') ?>/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		var FormWizard = function () {


		    return {
		        //main function to initiate the module
		        init: function () {
		            if (!jQuery().bootstrapWizard) {
		                return;
		            }

		            function format(state) {
		                if (!state.id) return state.text; // optgroup
		                return "<img class='flag' src='<?= base_url('assets/metronic') ?>/assets/global/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
		            }

		            $("#country_list").select2({
		                placeholder: "Select",
		                allowClear: true,
		                formatResult: format,
		                formatSelection: format,
		                escapeMarkup: function (m) {
		                    return m;
		                }
		            });

		            var form = $('#submit_form');
		            var error = $('.alert-danger', form);
		            var success = $('.alert-success', form);

		            form.validate({
		                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
		                errorElement: 'span', //default input error message container
		                errorClass: 'help-block help-block-error', // default input error message class
		                focusInvalid: false, // do not focus the last invalid input
		                rules: {
		                    //account
		                    username: {
		                        minlength: 5,
		                        required: true
		                    },
		                    password: {
		                        minlength: 5,
		                        required: true
		                    },
		                    rpassword: {
		                        minlength: 5,
		                        required: true,
		                        equalTo: "#submit_form_password"
		                    },
		                    //profile
		                    fullname: {
		                        required: true
		                    },
		                    email: {
		                        required: true,
		                        email: true
		                    },
		                    phone: {
		                        required: true
		                    },
		                    gender: {
		                        required: true
		                    },
		                    address: {
		                        required: true
		                    },
		                    city: {
		                        required: true
		                    },
		                    country: {
		                        required: true
		                    },
		                    //payment
		                    card_name: {
		                        required: true
		                    },
		                    card_number: {
		                        minlength: 16,
		                        maxlength: 16,
		                        required: true
		                    },
		                    card_cvc: {
		                        digits: true,
		                        required: true,
		                        minlength: 3,
		                        maxlength: 4
		                    },
		                    card_expiry_date: {
		                        required: true
		                    },
		                    'payment[]': {
		                        required: true,
		                        minlength: 1
		                    }
		                },

		                messages: { // custom messages for radio buttons and checkboxes
		                    'payment[]': {
		                        required: "Please select at least one option",
		                        minlength: jQuery.validator.format("Please select at least one option")
		                    }
		                },

		                errorPlacement: function (error, element) { // render error placement for each input type
		                    if (element.attr("name") == "gender") { // for uniform radio buttons, insert the after the given container
		                        error.insertAfter("#form_gender_error");
		                    } else if (element.attr("name") == "payment[]") { // for uniform checkboxes, insert the after the given container
		                        error.insertAfter("#form_payment_error");
		                    } else {
		                        error.insertAfter(element); // for other inputs, just perform default behavior
		                    }
		                },

		                invalidHandler: function (event, validator) { //display error alert on form submit   
		                    success.hide();
		                    error.show();
		                    Metronic.scrollTo(error, -200);
		                },

		                highlight: function (element) { // hightlight error inputs
		                    $(element)
		                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
		                },

		                unhighlight: function (element) { // revert the change done by hightlight
		                    $(element)
		                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
		                },

		                success: function (label) {
		                    if (label.attr("for") == "gender" || label.attr("for") == "payment[]") { // for checkboxes and radio buttons, no need to show OK icon
		                        label
		                            .closest('.form-group').removeClass('has-error').addClass('has-success');
		                        label.remove(); // remove error label here
		                    } else { // display success icon for other inputs
		                        label
		                            .addClass('valid') // mark the current input as valid and display OK icon
		                        .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
		                    }
		                },

		                submitHandler: function (form) {
		                    success.show();
		                    error.hide();
		                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
		                }

		            });

		            var displayConfirm = function() {
		                $('#tab4 .form-control-static', form).each(function(){
		                    var input = $('[name="'+$(this).attr("data-display")+'"]', form);
		                    if (input.is(":radio")) {
		                        input = $('[name="'+$(this).attr("data-display")+'"]:checked', form);
		                    }
		                    if (input.is(":text") || input.is("textarea")) {
		                        $(this).html(input.val());
		                    } else if (input.is("select")) {
		                        $(this).html(input.find('option:selected').text());
		                    } else if (input.is(":radio") && input.is(":checked")) {
		                        $(this).html(input.attr("data-title"));
		                    } else if ($(this).attr("data-display") == 'payment[]') {
		                        var payment = [];
		                        $('[name="payment[]"]:checked', form).each(function(){ 
		                            payment.push($(this).attr('data-title'));
		                        });
		                        $(this).html(payment.join("<br>"));
		                    }
		                });
		            }

		            var handleTitle = function(tab, navigation, index) {
		                var total = navigation.find('li').length;
		                var current = index + 1;
		                // set wizard title
		                $('.step-title', $('#form_wizard_1')).text('Step ' + (index + 1) + ' of ' + total);
		                // set done steps
		                jQuery('li', $('#form_wizard_1')).removeClass("done");
		                var li_list = navigation.find('li');
		                for (var i = 0; i < index; i++) {
		                    jQuery(li_list[i]).addClass("done");
		                }

		                if (current == 1) {
		                    $('#form_wizard_1').find('.button-previous').hide();
		                } else {
		                    $('#form_wizard_1').find('.button-previous').show();
		                }

		                if (current >= total) {
		                    $('#form_wizard_1').find('.button-next').hide();
		                    $('#form_wizard_1').find('.button-submit').show();
		                    displayConfirm();
		                } else {
		                    $('#form_wizard_1').find('.button-next').show();
		                    $('#form_wizard_1').find('.button-submit').hide();
		                }
		                Metronic.scrollTo($('.page-title'));
		            }

		            // default form wizard
		            $('#form_wizard_1').bootstrapWizard({
		                'nextSelector': '.button-next',
		                'previousSelector': '.button-previous',
		                'stepsOrientation': 'vertical',
		                onTabClick: function (tab, navigation, index, clickedIndex) {
		                    return false;
		                    /*
		                    success.hide();
		                    error.hide();
		                    if (form.valid() == false) {
		                        return false;
		                    }
		                    handleTitle(tab, navigation, clickedIndex);
		                    */
		                },
		                onNext: function (tab, navigation, index) {
		                    success.hide();
		                    error.hide();

		                    if (form.valid() == false) {
		                        return false;
		                    }

		                    handleTitle(tab, navigation, index);
		                },
		                onPrevious: function (tab, navigation, index) {
		                    success.hide();
		                    error.hide();

		                    handleTitle(tab, navigation, index);
		                },
		                onTabShow: function (tab, navigation, index) {
		                    var total = navigation.find('li').length;
		                    var current = index + 1;
		                    var $percent = (current / total) * 100;
		                    $('#form_wizard_1').find('.progress-bar').css({
		                        width: $percent + '%'
		                    });
		                }
		            });

		            $('#form_wizard_1').find('.button-previous').hide();
		            $('#form_wizard_1 .button-submit').click(function () {
		                alert('Finished! Hope you like it :)');
		            }).hide();
		        }

		    };

		}();

		FormWizard.init();
	});
</script>