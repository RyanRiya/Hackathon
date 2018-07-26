<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="/uploadify/uploadify.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/uploadify/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/uploadify/swfobject.js"></script>
<script type="text/javascript" src="/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#file_upload').uploadify({
    'uploader'  : '/uploadify/uploadify.swf',
    'script'    : '/uploadify/uploadify.php',
    'cancelImg' : '/uploadify/cancel.png',
    'folder'    : '/uploads',
	'onComplete'  : function(event, ID, fileObj, response, data) {
      $("#img").attr("src", "uploads/" + fileObj.name);
    },
    'auto'      : true
  });
});
function showPic(pic){
	$("#img").attr("src", "uploads/" + pic);
}
</script>
</head>
<body>
<img id="img" src="images/defaultimage.jpg" width="100" height="100" />
<form method="post" enctype="multipart/form-data">
<input type="file" id="file_upload" name="file_upload" />
<input type="submit" />
</form>
</body>
</html>