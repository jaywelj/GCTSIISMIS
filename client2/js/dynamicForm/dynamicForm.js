var room = 0;
function education_fields() {
  room++;
  formCount++;
  var objTo = document.getElementById('newTestFields')
  var divtest = document.createElement("div");
  var rdiv = 'removeclass'+room;
  divtest.setAttribute("class", "form-group "+rdiv);
  divtest.innerHTML = ' <div > <button class="btn btn-danger pull-right" type="button" onclick="remove_education_fields('+ room +');"> <h4 class="glyphicon glyphicon-minus " aria-hidden="true"></h4> </button></div><div class="x_panel"><span class="section" style="margin-left:90px;">Test Result '+formCount+'</span><div class="form-group"><label class="control-label col-md-3 col-sm-3">Date Of Test</label><div class="col-md-6 col-sm-6"><input id="dateTestResultDateNew" name="dateTestResultDateNew[]" value="" class="date-picker form-control col-md-7 col-xs-12" type="date"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Name of Test <span class="" style="color:red">*</span></label><div class="col-md-6 col-sm-6"><input required="required" id="txtbxTestResultNameNew" name="txtbxTestResultNameNew[]" value="" type="text" class="form-control col-md-7 col-xs-12" style="text-transform:capitalize;"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Raw Score(RS) <span class="" style="color:red">*</span></label><div class="col-md-6 col-sm-6"><input required="required" id="txtbxTestResultRawScoreNew" name="txtbxTestResultRawScoreNew[]" value="" type="number" class="form-control col-md-7 col-xs-12" data-validate-minmax="0,9999"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Percentile Rating(PR) <span class="" style="color:red">*</span></label><div class="col-md-6 col-sm-6"><input required="required" id="txtbxTestResultPercentileRatingNew" name="txtbxTestResultPercentileRatingNew[]" value="" type="number" class="form-control col-md-7 col-xs-12" step=".25" data-validate-minmax="1,100"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Description <span class="" style="color:red">*</span></label><div class="col-md-6 col-sm-6"><textarea class="form-control" name="txtareaTestResultDescriptionNew[]" id="txtareaTestResultDescriptionNew" required="required"></textarea></div></div></div>';

  objTo.appendChild(divtest)
}
function remove_education_fields(rid) {
 $('.removeclass'+rid).remove();
 formCount--;
}