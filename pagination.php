<?php
			$hostname = 'localhost'; // your mysql hostname
			$username = 'root';   // Your mysql db username
			$password = '';   // You mysql db password
			$database = 'countrydb';       // mysql db name
			$con = mysqli_connect($hostname, $username, $password, $database); 

 ?>

<html>
   
   <head>
      <title>Paging Using PHP</title>
   </head>
   
   <body>
      <?php
      $hostname = 'localhost'; // your mysql hostname
			$username = 'root';   // Your mysql db username
			$password = '';   // You mysql db password
			$database = 'countrydb';       // mysql db name
			$conn = mysql_connect($hostname, $username, $password, $database) or die ("Could not connect to MySQL");
			 $rec_limit = 10;
        
           /* Get total number of records */
         $sql = "SELECT count(name) FROM countries ";
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         $row = mysql_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'page'} ) ) {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }else {
            $page = 0;
            $offset = 0;
         }
         
         $left_rec = $rec_count - ($page * $rec_limit);
         $sql = "SELECT id, name, sortname ". 
            "FROM countries ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysql_query( $sql, $conn );
         
         if(! $retval ) {
            die('Could not get data: ' . mysql_error());
         }
         
         while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
            echo "EMP ID :{$row['id']}  <br> ".
               "EMP NAME : {$row['sortname']} <br> ".
                "EMP SALARY : {$row['name']} <br> ".
               "--------------------------------<br>";
         }
         
         if( $page > 0 ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a> |";
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $page == 0 ) {
            echo "<a href = \"$_PHP_SELF?page = $page\">Next 10 Records</a>";
         }else if( $left_rec < $rec_limit ) {
            $last = $page - 2;
            echo "<a href = \"$_PHP_SELF?page = $last\">Last 10 Records</a>";
         }
         
         mysql_close($conn);
      ?>
      
   </body>
</html>