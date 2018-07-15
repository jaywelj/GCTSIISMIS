<label class="btn btn-primary active">
    											<input type="radio" name="options" id="option1" autocomplete="off" checked> Active
    											
  												</label>


  												<?php  
if(isset($_POST['sub']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="sub_db";//database name  
$tbl_name="request_quote"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$checkbox1=$_POST['techno'];  
$chk="/";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($con,"insert into request_quote(technology) values ('$chk')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  

function createPetField() {
  var input = document.createElement('input');
  input.type = 'text';
  input.name = 'pet[]';
  return input;
}

var form = document.getElementById('myForm');
document.getElementById('addPet').addEventListener('click', function(e) {
  form.appendChild(createPetField());
});