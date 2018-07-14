var room = 1;
var formCount = 1;
function education_fields() {
 
    room++;
    formCount++;
    var objTo = document.getElementById('newTestFields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = ' <div> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus " aria-hidden="true"></span> </button></div> <div class="form-group label-floating">  <h4 class="info-text">Date </h4> <input type="date" name="txtbxStudentTestResultDate[]"> <div class="form-group label-floating"> <label class="control-label">Name</label> <div class="input-group"><input type="text" class="form-control" name="txtbxStudentResultName[]"></div></div> <div class="form-group label-floating"> <label class="control-label">Name</label> <div class="input-group"> <input type="text" class="form-control" name="txtbxStudentResultName[]"> </div> </div> <div class="form-group label-floating"> <label class="control-label">RS</label> <div class="input-group"> <input type="text" class="form-control" name="txtbxStudentRS[]"> </div> </div> <div class="form-group label-floating"> <label class="control-label">PR</label> <div class="input-group"> <input type="text" class="form-control" name="txtbxStudentPR[]"> </div> </div> </div> </div> ';    
    objTo.appendChild(divtest)
}
function remove_education_fields(rid) {
   $('.removeclass'+rid).remove();
   formCount--;
}
