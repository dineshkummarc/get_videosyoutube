<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>

		<h3 class="text-primary">PHP - Get Videos from YouTube Channel</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<button type="button" class="btn btn-primary" id="search"><span class="glyphicon glyphicon-search"></span> Get Video</button>
		<div id="result"></div>

<script src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#search').on('click', function(){
			$('#result').load('get_video.php');
		});
	});
</script>
</body>
</html>