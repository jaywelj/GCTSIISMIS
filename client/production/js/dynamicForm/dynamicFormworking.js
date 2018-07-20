var room = 1;
var formCount = 1;
function education_fields() {

  room++;
  formCount++;
  var objTo = document.getElementById('newTestFields');
  var divtest = document.createElement("div");
  divtest.setAttribute("class", "form-group removeclass"+room);
  var rdiv = 'removeclass'+room;
  divtest.innerHTML = ' <div class="col-sm-12"> <button class="btn btn-danger pull-right" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus " aria-hidden="true"></span> </button></div><h3 class="info-text">Test Result '+formCount+'</h3><div class="form-group label-floating"> <h4 class="info-text"> Date </h4> <input type="date" name="dateTestResultDate[]" id="dateTestResultDate[]"> </div> <div class="form-group label-floating"> <label class="control-label">Name</label> <div class="input-group"> <input type="text" class="form-control" name="txtbxTestResultName[]" id="txtbxTestResultName[]" > </div> </div> <div class="form-group label-floating"> <label class="control-label">RS</label> <div class="input-group"> <input type="text" class="form-control" name="txtbxTestResultRawScore[]" id="txtbxTestResultRawScore[]" > </div> </div> <div class="form-group label-floating"> <label class="control-label">PR</label> <div class="input-group"> <input type="text" class="form-control" name="txtbxTestResultPercentileRating[]" id="txtbxTestResultPercentileRating[]" > </div> </div> <div class="form-group label-floating"> <label class="control-label">Description</label> <div class="input-group"> <input type="text" class="form-control" name="txtareaTestResultDescription[]" id="txtareaTestResultDescription[]" > </div> </div>';

  objTo.appendChild(divtest);
}
function remove_education_fields(rid) {
 $('.removeclass'+rid).remove();
 formCount--;
}