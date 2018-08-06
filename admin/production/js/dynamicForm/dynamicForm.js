var room = 0;
function education_fields() {
  room++;
  formCount++;
  var objTo = document.getElementById('newTestFields')
  var divtest = document.createElement("div");
  var rdiv = 'removeclass'+room;
  divtest.setAttribute("class", "form-group "+rdiv);
  divtest.innerHTML = ' <div > <button class="btn btn-danger pull-right" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus " aria-hidden="true"></span> </button></div><div class="x_panel"><span class="section" style="margin-left:90px;">Test Result '+formCount+'</span><div class="form-group"><label class="control-label col-md-3 col-sm-3">Date Of Test<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="dateTestResultDateNew" name="dateTestResultDateNew[]" value="" class="date-picker form-control col-md-7 col-xs-12" type="date"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Name of Test <span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="txtbxTestResultNameNew" name="txtbxTestResultNameNew[]" value="" type="text" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Raw Score(RS) <span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="txtbxTestResultRawScoreNew" name="txtbxTestResultRawScoreNew[]" value="" type="number" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Percentile Rating(PR) <span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="txtbxTestResultPercentileRatingNew" name="txtbxTestResultPercentileRatingNew[]" value="" type="number" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Description<span class="required">*</span></label><div class="col-md-6 col-sm-6"><textarea class="form-control" name="txtareaTestResultDescriptionNew[]" id="txtareaTestResultDescriptionNew" required=""></textarea></div></div></div>';

  objTo.appendChild(divtest)
}
function remove_education_fields(rid) {
 $('.removeclass'+rid).remove();
 formCount--;
}