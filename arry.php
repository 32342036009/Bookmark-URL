<?php 

	//arrary_map

	/*function cube($v){
		return ($v*$v*$v);
	}

	$first = [1,2,3,4,5];
	echo '<pre>';
	print_R(array_map("cube", $first));*/

// $a1=['alex'=>'one', 'doran'=>'two', 'jhon'=> 'three'];
// echo '<pre>';
// print_r(array_search('two', $a1));


//	$arr = "nainital almora ranikhet haldwani";
	// //echo "<pre>";	
	// $array = explode(' ', $arr);
	// 		 for($i=3; $i>=0; $i--){
	// 		 	echo ucfirst($array[$i].' ');
	// 		 }
//echo $array[$i];

	// $arr1 = ['nainital', 'almora', 'ranikhet', 'haldwani'];
	// $arr2 = ['haridwar', 'dehradun', 'pithoragarh' ,'garwal'];
	// foreach ([$arr1,$arr2] as  $value) {
	// 	    foreach ($value as $item) {

	// 	 echo '<pre>';
	// 	 print_R($item);
	// 	//echo $item.;
	// }
	// }



// $url = 'https://jsonplaceholder.typicode.com/posts';
// echo $ch = curl_init($url);
// $userData = array(
//     'name' => 'Rohit Kumar',
//     'email' => 'hi@iamrohit.in',
//     'city'=>'Kanpur',
//     'mobile'=>'0000000000'  
// );
// $dataString= json_encode(array("userData" => $userData));
// curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
//     'Content-Type: application/json',                                                                                
//     'Content-Length: ' . strlen($dataString))                                                                       
// );   
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($ch);
// curl_close($ch);


// $data = json_decode(file_get_contents('php://input'), true);
// print_r($data);

// $string = "$125: Potenza S04 PP, Potenza RE050, Potenza RE050A, Potenza RE11, Poteza RE71R
// $50: DriveGuard, Potenza RE980AS, Dueler A/T Revo 3, Dueler H/T 685, Dueler HP Sport AS.
// $75: Turanza Serenity Plus, Dueler H/L Alenza, Dueler H/L Alenza Plus
// $50: Ecopia EP 422, Ecopia EP422 Plus, Ecopia H/L 422 Plus, Potenza RE760 Sport, Potenza RE960AS PP RFT, Potnza RE970AS PP,Potenza RE97AS, Dueler H/L Ecopia 422, Dueler A/T REVO) 2.";
// $string = strip_tags($string);
// if (strlen($string) > 100) {

//     // truncate string
//     $stringCut = substr($string, 0, 100);
//     $endPoint = strrpos($stringCut, ' ');

//     //if the string doesn't contain any space then it will cut without word basis.
//     $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
//     $string .= '... <a href="/this/story">Read More</a>';
// }
//echo $string;
// function fibonacci($n,$first = 0,$second = 1)
// {
    
//     $fib = [$first,$second];
//     for($i=1;$i<$n;$i++)
//     {
//         $fib[] = $fib[$i]+$fib[$i-1];
//     }
//     return $fib;
// }
// echo "<pre>";
// print_r(fibonacci(10));


/*$i=0;
	echo $a = 0;
	echo $b=1;
	while ($i<= 10) {
 			echo $temp = $a+$b ." ";
 			$a = $b;
 			$b = $temp;
 			$i++;
	}*/



	/*$array = [10,50,5,22,11,2];
		$min = $array[0];
	foreach ($array as $value) {
		if($value > $min){
			$min = $value;
		}

	}
	echo $min;*/

/*for($i=0; $i<=4; $i++ ){
	for ($j=0; $j <= $i ; $j++) { 
		echo '* ';
			}
			echo "<br/>";
}*/
/*for($i=0; $i<=5; $i++ ){
	for ($j=5; $j >$i ; $j--) { 
		echo '* ';
			}
			echo "<br/>";
}*/



/*for($i=0; $i<=5; $i++ ){
	for ($j=0; $j <= $i ; $j++) { 
		echo '* ';
			}
			echo "<br/>";
}
for($i=0; $i<=5; $i++ ){
	for ($j=4; $j >= $i ; $j--) { 
		echo '* ';
			}
			echo "<br/>";
} */

/*for($i=1; $i<=5; $i++ ){
	for ($j=$i; $j >=1 ; $j--) { 
		echo $j;
			}
			echo "<br/>";
}*/

/*for($i=1; $i<=5; $i++ ){
	for ($j=$i; $j >=1 ; $j--) { 
		echo $j." " ;
			}
			echo "<br/>";
}*/


/*for($i=1; $i<=5; $i++ ){
	for ($j=5; $j >=$i ; $j--) { 
		echo $j." " ;
			}
			echo "<br/>";
}*/

/*for($i=1; $i<=5; $i++ ){
	for ($j=1; $j<=$i ; $j++) { 
		echo $j." " ;
			}
			echo "<br/>";
}*/	


/*for($i=0;$i<=9;$i++){ 
    for ($d=10-$i; $d > 0; $d--)  {
         echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
         echo " ".$i." ";
    }
     echo "<br>";
 }*/

/*$array=['2','4','8','5','1','7','6','9','10','3'];
foreach ( $array as $item ) {
print_R($item['0']); */
//     if($item[0] > $item[0]+1 ){
// 		$temp      = $item[0]+1;
// 		$item[0]+1 = $item[0];
//  		$item[0]   = $temp;
// }
//}
//print_r($array);






// $arr = ['2','4','8','5','1','7','6','9','10','3'];
// for($i= 0; $i < count($arr); $i++){
// 	for ($j=0; $j <  count($arr)-1; $j++) { 
// 		if($arr[$j] > $arr[$j+1] ){
// 			$temp      = $arr[$j+1];
// 			$arr[$j+1] = $arr[$j];
// 			$arr[$j]   = $temp;
// 		}
// 	}
// }
// echo '<br><pre>';
// print_r($arr);

/*
$array=['2','4','8','5','1','7','6','9','10','3'];
$arr2 = count($array);
// echo "Unsorted array is: ";
// echo "<br /> <pre>";
print_r($arr2); die;
for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if($array[$i] > $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

echo "Sorted Array is: ";
echo "<br /><pre>";
print_r($array);*/


/*Function over loading*/
/*class Foo {
   function myFoo($a, $b, $c) {
      return $a+$b+$c;
   }




}

class Bar extends Foo {
   function Foobar($x, $y, $z) {
      return $z+$y+$z;
   }
}

$foo = new Foo;
$bar = new Bar;
/*echo($foo->myFoo()); //"Foo"
echo($bar->myFoo()); //"Bar"*/



/* echo ($bar->Foobar(10,10,10));
echo '<br>';
echo ($bar->myFoo(20,20,20));*/




/*Function overridding*/



class Foo {
   function myFoo() {
      return "Foo";
   }
}

class Bar extends Foo {
   function myFoo() {
      return "Bar";
   }
}

$foo = new Foo;
$bar = new Bar;
echo($foo->myFoo()); //"Foo"
//echo($bar->myFoo()); //"Bar"































