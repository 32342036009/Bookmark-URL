<?php 
 $url = "https://ajax.googleapis.com/ajax/services/search/images?".
"v=1.0&q=indian%20institue%20of%20techology";
$jk=file_get_contents($url);
$json = json_decode($jk, true);
echo $json["responseData"]["results"][0]["url"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookmark URL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
<body>
    <div class="container">
	<h3><strong>Bookmark Your Website!.</strong></h3>
		<div class="row">
		<div class="col-sm-6">
            <div id='errors'></div>
            	<form method="POST" id="form" class="ajax">
				<div class="form-group has-success">
					<label class="form-control-label" for="inputSuccess1">Site Name:</label>
					<input type="text" value="" class="form-control is-valid" id="siteName" name="siteName" placeholder="Site Name" value="">
				</div>
				<div class="form-group has-success">
					<label class="form-control-label" for="inputSuccess1">Site URL:</label>
					<input type="text" value="" class="form-control is-valid" name="siteUrl" id="siteUrl" placeholder="Site URL">
				</div>
				<button type="submit" class="btn btn-block btn-info" id="submit">SUBMIT</button>
			</form>
			</div>		
</div>
</div>


					<script>
						$(document).ready(function(){
							$('form.ajax').on('submit', function(){
								var that = $(this),
									data= {siteName:siteName};
									that.find('[name]').each(function(index, value){
										var that  = $(this),
											name  = that.attr('name'),
											value = that.val();
											data['name'] = value;
										
									});


									$.ajax({
											url: 'page.php',
											method:'post',
											data: {siteName:siteName},
											success: function(responce){
												console.log(responce);
											},

									});


							});

							return false;

						});


					</script>







</body>
</html>