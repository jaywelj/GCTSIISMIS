<!DOCTYPE html>
<html>
<body>

<h2>Using the XMLHttpRequest object</h2>

<button type="button" onclick="loadXMLDoc()">Change Content</button>

<p id="demo"></p>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
      alert(this.responseText)
    }
  };
  xhttp.open("GET", "xml1.xml", true);
  xhttp.send();
}
</script>

</body>
</html>
