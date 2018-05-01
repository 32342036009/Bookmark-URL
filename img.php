<input id="sortpicture" type="file" name="sortpic" />
<button id="upload">Upload</button>



<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
	$("#photoimg").live('change',function(){}) 
// photoimg is the ID name of INPUT FILE tag and 

$('#imageform').ajaxForm()
  $(document).ready(function()
  {
    $('#photoimg').live('change', function()
    {
      $("#preview").html('');
      $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
      $("#imageform").ajaxForm(
      {
        target: '#preview'
      }).submit();
    });
  });
</script>
