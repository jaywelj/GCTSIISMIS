var room = 1;
var formCount = 1;
function education_fields() {

  room++;
  formCount++;
  var objTo = document.getElementById('newTestFields');
  var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
  divtest.innerHTML = ' <div > <button class="btn btn-danger pull-right" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus " aria-hidden="true"></span> </button></div><div class="x_panel"><span class="section" style="margin-left:90px;">Test Result '+formCount+'</span><div class="form-group"><label class="control-label col-md-3 col-sm-3">Date Of Test<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="dateTestResultDate[]" name="dateTestResultDate[]" value="" class="date-picker form-control col-md-7 col-xs-12" type="date"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Name of Test <span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="txtbxTestResultName[]" name="txtbxTestResultName[]" value="" type="text" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Raw Score(RS) <span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="txtbxTestResultRawScore[]" name="txtbxTestResultRawScore[]" value="" type="text" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Percentile Rating(PR) <span class="required">*</span></label><div class="col-md-6 col-sm-6"><input id="txtbxTestResultPercentileRating[]" name="txtbxTestResultPercentileRating[]" value="" type="text" class="form-control col-md-7 col-xs-12"></div></div><div class="form-group"><label class="control-label col-md-3 col-sm-3"  >Description<span class="required">*</span></label><div class="col-md-6 col-sm-6"><textarea class="form-control" name="txtareaTestResultDescription[]" id="txtareaTestResultDescription[]" required=""></textarea></div></div></div>';

  objTo.appendChild(divtest);
}
function remove_education_fields(rid) {
 $('.removeclass'+rid).remove();
 formCount--;
}