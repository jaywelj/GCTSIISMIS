jQuery(function ($) {

	var typeUserDisabledAttrs = {
		autocomplete: ['access']
	};

	// test disabledAttrs
	var disabledAttrs = ['placeholder'];
	// test disabled fields
	var disabledFields = ['hidden', 'file', 'autocomplete', 'starRating', 'button', 'number', 'paragraph', 'textarea', 'date'];
	var actionButtons = [
	{
		id: "btnBack",
		className: "btn btn-warning btn-lg",
		label: "Back",
		type: "button",
		events: {
			click: function() {
				window.location.href = "surveySurveyForms.php";
			}
		}
	}
	];
	var fbOptions = {
		subtypes: {
			text: ['datetime-local']
		},
		onSave: function (e, formData) {
			var xmldata = formBuilder.actions.getData('xml');
			var surveyFormName = document.getElementById("txtbxSurveyFormName").value;
			var surveyFormDetails = document.getElementById("txtareaSurveyFormDetails").value;

			$.ajax({
				url: "surveySurveyFormXMLWrite.php",
				method: "post",
				data: {
					xmldata: xmldata,
					surveyFormName: surveyFormName,
					surveyFormDetails: surveyFormDetails
				},
				success: function (data) {
					alert("SUCCESSFUL WRITE");
					$('#xmldatadiv').html(data);
				}
			});

			toggleEdit();
			$('.render-wrap').formRender({
				formData: formData,
			});
		},
		stickyControls: {
			enable: true
		},
		sortableControls: true,
		typeUserDisabledAttrs: typeUserDisabledAttrs,
		disableInjectedStyle: false,
		disableFields: disabledFields,
		disabledAttrs: disabledAttrs,
		disabledActionButtons: ['data'],
		actionButtons,actionButtons,
		//replaceFields: replaceFields,
		disabledFieldButtons: {
			text: ['copy']
		}
		// controlPosition: 'left'
		// disabledAttrs
	};
	var formData = window.sessionStorage.getItem('formData');

	window.sessionStorage.setItem('formData',"");
	var editing = true;

	if (formData) {
		fbOptions.formData = JSON.parse(formData);
	}

	/**
	 * Toggles the edit mode for the demo
	 * @return {Boolean} editMode
	 */
	 function toggleEdit() {
	 	document.body.classList.toggle('form-rendered', editing);

	 	return editing = !editing;
	 }


	 var formBuilder = $('.build-wrap').formBuilder(fbOptions);
	 var fbPromise = formBuilder.promise;

	 fbPromise.then(function (fb) {
	 	var apiBtns = {
	 		showData: fb.actions.showData,
	 		clearFields: fb.actions.clearFields,
	 		
	 		testSubmit: function () {
	 			var formData = new FormData(document.forms[0]);
	 			console.log('Can submit: ', document.forms[0].checkValidity());
				// Display the key/value pairs
				console.log('FormData:', formData);
				for (var pair of formData.entries()) {
					console.log(pair[0] + ': ' + pair[1]);
				}
			}
		};
	});
	});
