jQuery(function ($) {
	

	var typeUserDisabledAttrs = {
		autocomplete: ['access']
	};

	var typeUserAttrs = {
		text: {
			className: {
				label: 'Class',
				options: {
					'red form-control': 'Red',
					'green form-control': 'Green',
					'blue form-control': 'Blue'
				},
				style: 'border: 1px solid red'
			}
		}
	};

	// test disabledAttrs
	var disabledAttrs = ['placeholder'];
	// test disabled fields
	var disabledFields = ['hidden', 'file', 'autocomplete', 'starRating', 'button', 'number', 'paragraph', 'textarea','date'];
	var fbRender = document.getElementById('stage1');
	var xmldata;
	var xhttp = new XMLHttpRequest();
	xhttp.open("POST","assets/xml/"+xmldataFileName, true);
	xhttp.send();
	xhttp.onreadystatechange = function(){
		if (this.readyState == 4 && this.status == 200) {
			var xmldata = this.responseText;
			var fbOptions = {
				subtypes: {
					text: ['datetime-local']
				},
				onSave: function (e, formData) {
					var xmldata = formBuilder.actions.getData('xml');

					var surveyFormName = document.getElementById("txtbxSurveyFormName").value;
					var surveyFormDetails = document.getElementById("txtareaSurveyFormDetails").value;
					$.ajax({
						url: "surveySurveyFormXMLEdit.php",
						method: "post",
						data: {
							xmldataFileName: xmldataFileName,
							xmldata: xmldata,
							surveyFormName: surveyFormName,
							surveyFormDetails: surveyFormDetails
						},
						success: function (data) {
							$('#xmldatadiv').html(data);
						}
					});
					var  fbOptions2 = {
						formData: xmldata,
						dataType: 'xml'
					};

					toggleEdit();
					$('.render-wrap').formRender(fbOptions2);
				},
				stickyControls: {
					enable: true
				},
				sortableControls: true,
				typeUserDisabledAttrs: typeUserDisabledAttrs,
				typeUserAttrs: typeUserAttrs,
				disableInjectedStyle: false,
				disableFields: disabledFields,
				disabledAttrs: disabledAttrs,
				dataType: 'xml',
				formData: xmldata,
				disabledFieldButtons: {
					text: ['copy']
				}

				// controlPosition: 'left'
				// disabledAttrs
			};
			var editing = true;

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
					},
					
				};
			});

			document.getElementById('edit-form').onclick = function () {
				toggleEdit();
			};
		}
	};
});
