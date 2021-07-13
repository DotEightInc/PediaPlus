<!DOCTYPE html>
<html>
<body>

<p>Click on the button to copy the text from the text field. Try to paste the text (e.g. ctrl+v) afterwards in a different window, to see the effect.</p>

<input type="text" value="Hello World" id="myInput">
<button onclick="myFunction()">Copy text</button>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>

</body>
</html>


/** COPY REFERRAL LINK TO CLIPBOARD */
$("#copy").click(function() 
{

	$('#copy').text("Copied!");
})
})