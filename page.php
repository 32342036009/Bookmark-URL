	<?php
			require_once('connection.php');
				 if(isset($_POST['site']))
				 {
		 			 $sql = "INSERT INTO bookmark(sitename,siteurl)VALUES('".$_POST['siteName']."' , '".$_POST['siteUrl']."')";
					 if($conn->query($sql)==TRUE){
						echo "1"; } else{ echo '0'; }
				 }

	// Show Data
	if(isset($_POST['showData'])){
		$query="select * from bookmark";
                		$result = $conn->query($query);
                		//print_r($result);
                	  if($result->num_rows > 0){
                	 	   while ($row = $result->fetch_assoc()) { ?>
                
                	 	   <?php $id 		 = $row['id'];
	                	 	   	 $siteName   = $row['sitename'];
	                	 	   	 $siteUrl    = $row['siteurl']; 
	                	 	   	 $JsonData[] = ['id' => $id,
	                	 	   				    'sitename' => $siteName,
	                	 	   				    'siteurl' =>  $siteUrl ];
	                	 
	                	 }

	                	 echo json_encode($JsonData);


	                	 	 //echo $arrayName[0][$id];
                	 	   	//print_r($arrayName);

	                	 	    //echo json_encode($arrayName ,true);
	                	 	 //    echo json_encode($sitename = $row['sitename'],true);
	                	 		// echo json_encode($siteurl =  $row['siteurl'],true);
									// echo $id = $row['id'];
									// echo $siteUrl = $row['sitename'];
									// echo $siteName = $row['siteurl'];
	                	 	      
					}			 
				}





?>
