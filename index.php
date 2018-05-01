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
            	<form method="POST" id="form">
				<div class="form-group has-success">
					<label class="form-control-label" for="inputSuccess1">Site Name:</label>
					<input type="text" value="" class="form-control is-valid" id="siteName" name="siteName" placeholder="Site Name" value="">
				</div>
				<div class="form-group has-success">
					<label class="form-control-label" for="inputSuccess1">Site URL:</label>
					<input type="text" value="" class="form-control is-valid" name="siteUrl" id="siteUrl" placeholder="Site URL">
				</div>
				<button type="submit" class="btn btn-block btn-info" name="submit" id="submit">SUBMIT</button>
			</form>
			</div>		
		</div>
    <div class="col-sm-6 mt-4">
            <div id="div1">
              <table id="mytable" class="table table-hover">
                <tr>
                  <th scope='col'>NO</th>
                  <th scope='col'>SITE NAME</th>
                  <th scope='col'>SITE URL</th>
                   <th scope='col'>ACTION</th>
                </tr>
              </table>
            </div>
        </div>
      </div>
<script src="assets/bootstrap.min.js"></script>
    			 	       <script>
                                    $(document).ready(function(){
                                        $(document).on('click','#submit',function(e){  
                                        e.preventDefault();     
                                           var siteName = $('#siteName').val();
                                           var siteUrl = $('#siteUrl').val();
                                             $.ajax({
                                              type: "POST",
                                          		datatype:"html",
                                                url: "page.php",
                                                data :{siteName:siteName,siteUrl:siteUrl, site:4512},
                                                success: function(data){
                                                  //response = $.parseJSON(data);
                                                  //$('#ids').text(data[0]);
                                                    console.log(data);
                                                },
                                                error: function(){
                                                    alert('error');
                                                }
                                            });
                                        });

                                        //show data from db
                                       $(document).on('click','#submit', function(e){
                                        e.preventDefault();
                                            var siteName = $('#siteName').val();
                                            var siteUrl = $('#siteUrl').val();
                                            $.ajax({
                                                type:'POST',
                                                datatype:'JSON',
                                                url:'page.php',
                                                data:{siteName:siteName,siteUrl:siteUrl, showData:454},
                                                success:function(data){
                                                 // alert(data);
                                                  var obj = JSON.parse(data);
                                                 var tr_str=$("<table class='table table-hover'>").attr("id","mytable");
                                                    $("#div1").append(tr_str);
                                                    for(var i=0;i<obj.length;i++)
                                                    {
                                                        var tr="<tr>";
                                                        var td1="<td>"+obj[i]["id"]+"</td>";
                                                        var td2="<td>"+obj[i]["sitename"]+"</td>";
                                                        var td3="<td>"+ '<a class="btn btn-default" target="_blank" href="'+obj[i]["siteurl"]+'">'+obj[i]["siteurl"]+'</a>' +"</td></tr>";

                                                       $("#mytable").append(tr+td1+td2+td3); 

                                                    }          console.log(data);
                                                },
                                                error:function(){
                                                    alert('aaaaaa');
                                                }
                                            });

                                       }); 
                               });



                /*$("#submit").click(function(){
                  $("#submit input[type='text']").each(function() {
                         this.value = '';
                 });
              });*/

                  </script>

</body>
</html>

