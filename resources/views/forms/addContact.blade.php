@inject('countries','App\Http\Utilities\Country')
@extends('layout.master')
@section('title','Add New Contact')
@section('page-header-plugin')
		<!-- Plugins For This Page -->
<link rel="stylesheet" href="vendor/jquery-wizard/jquery-wizard.css" xmlns="http://www.w3.org/1999/html">
<link rel="stylesheet" href="vendor/formvalidation/formValidation.css">

@stop
@section('page')
		<!-- Page -->
<div class="page animsition">

	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-10">
				<!-- Panel Wizard Form -->
				<div class="panel" id="addContactWizardForm">
					<div class="panel-heading">
						<h3 class="panel-title">Add new Contact</h3>
					</div>
					<div class="panel-body">
						<!-- Steps -->
						<div class="steps steps-sm row" data-plugin="matchHeight" data-by-row="true" role="tablist">
							<div class="step col-md-4 current" data-target="#BasicInfo" role="tab">
								<span class="step-number">1</span>
								<div class="step-desc">
									<span class="step-title">Basic info</span>
									<p>Basic Contact Details</p>
								</div>
							</div>

							<div class="step col-md-4" data-target="#AddressDetails" role="tab">
								<span class="step-number">2</span>
								<div class="step-desc">
									<span class="step-title">Address</span>
									<p>Contact's Address Details</p>
								</div>
							</div>

							<div class="step col-md-4" data-target="#Getting" role="tab">
								<span class="step-number">3</span>
								<div class="step-desc">
									<span class="step-title">Getting</span>
									<p>The contact added successfully </p>
								</div>
							</div>
						</div>
						<!-- End Steps -->

						<!-- Wizard Content -->
						<div class="wizard-content">
							<div class="wizard-pane active" id="BasicInfo" role="tabpanel">
								<form id="BasicInfoForm">
									<div class="form-group">
										<label class="control-label" for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" required="required">
									</div>
									<div class="form-group">
										<label class="control-label" for="phoneNo">Phone</label>
										<input data-fv-field="type_phone" class="form-control"
										       name="phoneNo" placeholder="(012) 345 6789" type="text" required="required">
									</div>
									<div class="form-group">
										<label class="control-label" for="idNumber">IC/Passport</label>
										<input type="text" class="form-control" id="idNumber" name="idNumber" required="required">
									</div>
									<div class="form-group">
										<label for="country">Nationality</label>
										<select name="nationality" id="nationality">
											@foreach($countries::all() as $country=>$code)

												<option value="{{$code}}">{{$country}} </option>
											@endforeach
										</select>

									<div class="col-sm-6 col-lg-4">
											<h4 class="example-title">User Type</h4>
											<div class="radio-custom radio-primary">
												<input type="radio" id="inputRadiosUnchecked" name="owner" value="owner" />
												<label for="inputRadiosUnchecked"> Owner 	&nbsp; </label>
												<div>
												<input type="radio" id="inputRadiosChecked" name="tenant" value="tenant" />
												<label for="inputRadiosChecked"> Tenant </label>
												</div>
												</div>
									</div>
								</form>
							</div>
							<div class="wizard-pane" id="AddressDetails" role="tabpanel">
								<form id="AddressDetailsForm">
									<div class="form-group">
										<label class="control-label" for="inputCardNumber">Card Number</label>
										<input type="text" class="form-control" id="inputCardNumber" name="number" placeholder="Card number">
									</div>
									<div class="form-group">
										<label class="control-label" for="inputCVV">CVV</label>
										<input type="text" class="form-control" id="inputCVV" name="cvv" placeholder="CVV">
									</div>
								</form>
							</div>
							<div class="wizard-pane" id="Getting" role="tabpanel">
								<div class="text-center margin-vertical-20">
									<i class="icon wb-check font-size-40" aria-hidden="true"></i>
									<h4>We got your order. Your product will be shipping soon.</h4>
								</div>
							</div>
						</div>
						<!-- End Wizard Content -->

					</div>
				</div>
				<!-- End Panel Wizard One Form -->
			</div>
			

		</div>

	
	</div>
</div>
<!-- End Page -->

@stop

@section('page-scripts')
		
		<!-- Plugins For This Page -->
<script src="vendor/formvalidation/formValidation.js"></script>
<script src="vendor/formvalidation/framework/bootstrap.js"></script>
<script src="vendor/matchheight/jquery.matchHeight-min.js"></script>
<script src="vendor/jquery-wizard/jquery-wizard.js"></script>

<!-- Scripts For This Page -->
<script src="js/components/jquery-wizard.js"></script>
<script src="js/components/matchheight.js"></script>

<script>
	(function(document, window, $) {
		'use strict';

		var Site = window.Site;

		$(document).ready(function($) {
			Site.run();
		});

		// Example Wizard Form
		// -------------------
		(function() {
			// set up formvalidation
			$('#BasicInfoForm').formValidation({
				framework: 'bootstrap',
				fields: {
					username: {
						validators: {
							notEmpty: {
								message: 'The username is required'
							},
							stringLength: {
								min: 6,
								max: 30,
								message: 'The username must be more than 6 and less than 30 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_\.]+$/,
								message: 'The username can only consist of alphabetical, number, dot and underscore'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'The password is required'
							},
							different: {
								field: 'username',
								message: 'The password cannot be the same as username'
							}
						}
					}
				}
			});

			$("#AddressDetailsForm").formValidation({
				framework: 'bootstrap',
				fields: {
					number: {
						validators: {
							notEmpty: {
								message: 'The credit card number is required'
							}
							// creditCard: {
							//   message: 'The credit card number is not valid'
							// }
						}
					},
					cvv: {
						validators: {
							notEmpty: {
								message: 'The CVV number is required'
							}
							// cvv: {
							//   creditCardField: 'number',
							//   message: 'The CVV number is not valid'
							// }
						}
					}
				}
			});

			// init the wizard
			var defaults = $.components.getDefaults("wizard");
			var options = $.extend(true, {}, defaults, {
				buttonsAppendTo: '.panel-body'
			});

			var wizard = $("#addContactWizardForm").wizard(options).data(
					'wizard');

			// setup validator
			// http://formvalidation.io/api/#is-valid
			wizard.get("#BasicInfo").setValidator(function() {
				var fv = $("#BasicInfoForm").data('formValidation');
				fv.validate();

				if (!fv.isValid()) {
					return false;
				}

				return true;
			});

			wizard.get("#AddressDetails").setValidator(function() {
				var fv = $("#AddressDetailsForm").data('formValidation');
				fv.validate();

				if (!fv.isValid()) {
					return false;
				}

				return true;
			});
		})();

		// Example Wizard Form Container
		// -----------------------------
		// http://formvalidation.io/api/#is-valid-container
		(function() {
			var defaults = $.components.getDefaults("wizard");
			var options = $.extend(true, {}, defaults, {
				onInit: function() {
					$('#exampleFormContainer').formValidation({
						framework: 'bootstrap',
						fields: {
							username: {
								validators: {
									notEmpty: {
										message: 'The username is required'
									}
								}
							},
							password: {
								validators: {
									notEmpty: {
										message: 'The password is required'
									}
								}
							},
							number: {
								validators: {
									notEmpty: {
										message: 'The credit card number is not valid'
									}
								}
							},
							cvv: {
								validators: {
									notEmpty: {
										message: 'The CVV number is required'
									}
								}
							}
						}
					});
				},
				validator: function() {
					var fv = $('#exampleFormContainer').data(
							'formValidation');

					var $this = $(this);

					// Validate the container
					fv.validateContainer($this);

					var isValidStep = fv.isValidContainer($this);
					if (isValidStep === false || isValidStep === null) {
						return false;
					}

					return true;
				},
				onFinish: function() {
					// $('#exampleFormContainer').submit();
				},
				buttonsAppendTo: '.panel-body'
			});

			$("#addContactWizardFormContainer").wizard(options);
		})();

		// Example Wizard Pager
		// --------------------------
		(function() {
			var defaults = $.components.getDefaults("wizard");

			var options = $.extend(true, {}, defaults, {
				step: '.wizard-pane',
				templates: {
					buttons: function() {
						var options = this.options;
						var html = '<div class="btn-group btn-group-sm">' +
								'<a class="btn btn-default btn-outline" href="#' +
								this.id + '" data-wizard="back" role="button">' +
								options.buttonLabels.back + '</a>' +
								'<a class="btn btn-success btn-outline pull-right" href="#' +
								this.id + '" data-wizard="finish" role="button">' +
								options.buttonLabels.finish + '</a>' +
								'<a class="btn btn-default btn-outline pull-right" href="#' +
								this.id + '" data-wizard="next" role="button">' +
								options.buttonLabels.next + '</a>' +
								'</div>';
						return html;
					}
				},
				buttonLabels: {
					next: '<i class="icon wb-chevron-right" aria-hidden="true"></i>',
					back: '<i class="icon wb-chevron-left" aria-hidden="true"></i>',
					finish: '<i class="icon wb-check" aria-hidden="true"></i>'
				},

				buttonsAppendTo: '.panel-actions'
			});

			$("#exampleWizardPager").wizard(options);
		})();

		// Example Wizard Progressbar
		// --------------------------
		(function() {
			var defaults = $.components.getDefaults("wizard");

			var options = $.extend(true, {}, defaults, {
				step: '.wizard-pane',
				onInit: function() {
					this.$progressbar = this.$element.find('.progress-bar')
							.addClass('progress-bar-striped');
				},
				onBeforeShow: function(step) {
					step.$element.tab('show');
				},
				onFinish: function() {
					this.$progressbar.removeClass('progress-bar-striped').addClass(
							'progress-bar-success');
				},
				onAfterChange: function(prev, step) {
					var total = this.length();
					var current = step.index + 1;
					var percent = (current / total) * 100;

					this.$progressbar.css({
						width: percent + '%'
					}).find('.sr-only').text(current + '/' + total);
				},
				buttonsAppendTo: '.panel-body'
			});

			$("#exampleWizardProgressbar").wizard(options);
		})();

		// Example Wizard Tabs
		// -------------------
		(function() {
			var defaults = $.components.getDefaults("wizard");
			var options = $.extend(true, {}, defaults, {
				step: '> .nav > li > a',
				onBeforeShow: function(step) {
					step.$element.tab('show');
				},
				classes: {
					step: {
						//done: 'color-done',
						error: 'color-error'
					}
				},
				onFinish: function() {
					alert('finish');
				},
				buttonsAppendTo: '.tab-content'
			});

			$("#exampleWizardTabs").wizard(options);
		})();

		// Example Wizard Accordion
		// ------------------------
		(function() {
			var defaults = $.components.getDefaults("wizard");
			var options = $.extend(true, {}, defaults, {
				step: '.panel-title[data-toggle="collapse"]',
				classes: {
					step: {
						//done: 'color-done',
						error: 'color-error'
					}
				},
				templates: {
					buttons: function() {
						return '<div class="panel-footer">' + defaults.templates
										.buttons.call(this) + '</div>';
					}
				},
				onBeforeShow: function(step) {
					step.$pane.collapse('show');
				},

				onBeforeHide: function(step) {
					step.$pane.collapse('hide');
				},

				onFinish: function() {
					alert('finish');
				},

				buttonsAppendTo: '.panel-collapse'
			});

			$("#exampleWizardAccordion").wizard(options);
		})();

	})(document, window, jQuery);
</script>

@stop
