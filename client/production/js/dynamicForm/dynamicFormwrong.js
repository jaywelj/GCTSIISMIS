function displayResult()
{
var table=document.getElementById("myTable");
var row=table.insertRow(x);
var cell1=row.insertCell(0);
var cell2=row.insertCell(1);
var cell3=row.insertCell(2);
var cell4=row.insertCell(3);
cell1.innerHTML="<input type='text' value='0' id='name' name='name[]' placeholder='Enter Name'>";
cell2.innerHTML="<input type='text' id='relationship' name='relationship[]' placeholder='Relationship'>";
cell3.innerHTML="<input type='date' id='birthday' name='birthday[]' placeholder='Birthday'>";
cell4.innerHTML="<input type='text' id='school' name='school[]' placeholder='School'>";
x++;
}