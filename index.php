<?php

$obj = new main();

class main
{
	 function __construct()
	 {
 	$date = date('Y-m-d', time());
 	echo "The value of \$date: ".$date."<br>";

	 $tar = "2017/05/24";
 	echo "The value of \$tar: ".$tar."<br>";

	 $year = array("2012", "396", "300","2000", "1100", "1089");
	 echo "The value of \$year: ";
	 print_r($year) ;
	 echo '<br>';
	  var_dump($tar);

 	//$obj = new main();
 
	 answers::compareDate($date,$tar);
	 //answers::convert($date);
	 echo '<br>';
	 echo 'Replacing "-" in $date with "/" : '. answers::rString($date);
	 answers::searchString(answers::rString($date)); 
	 answers::countWords($date);
	 answers::strlength($date);
	 answers::rChr($date);
	 answers::lastTwo($date);
	 answers::convert(answers::rString($date));
	answers::leapyear($year);
  
	 echo '<br>';
	// echo 'This is a constructor ';
	 }
 } 
class answers
 {
	 public static function compareDate($date,$tar)
	 {
	 echo '<br>';
	 if (strcmp($date,$tar)>0)
	 { 
	 echo ' The future ';
	 }
	 elseif(strcmp($date,$tar)<0)
	 {
	 echo 'The past ';
 	} 
	 else
 	{
	 echo ' Oops ';
 	}
	 }
	 static public function convert($date)
	 {
	 echo '<br>';

	 echo 'The elements of $date array are: ';
	 $arr = explode("/",($date));
	// print_r($a);
	 // echo $a;
	   $a = count($arr);
         for($i=0;$i<$a;$i++)
    	 {      
       	echo    $arr[$i] . ' ';
	  }
	 } 

	 function rString($date)
	 {
	 echo '<br>';
	 $rplace = str_replace ("-", "/", $date);

	// echo ' the new date with / replaced is '. $rplace;
	 return $rplace;
	 }
	 function searchString($date)
	 {
	// $this->date 
	 echo '<br>';
	// echo $this->rString($date);
	 echo '/ appears in positions:';

	 for ($i=0;$i<substr_count($date, "/"); $i++)
	 {
	 $t = $t + 1;
	 $t = stripos($date,"/",$t);
	
	 echo  $t . ' ' ;
	// echo answers::rString($date);
	// echo $this->rString($date);
	 }
	 }
	 public static function countWords($date)
	 {
	 echo '<br>';
	 echo 'The number of words in $date is '.str_word_count($date);
	 }
	 public static function strLength($date)
	 {
	 echo '<br>';
	 echo 'the length of $date is '. strlen($date);
	 }
	
	 public static function rChr($date)
	 {

	  echo '<br>';
	  echo 'The ASCII value of the first character value string $date is '. ord($date);

	 }
	 public static function lastTwo($date)
	 {
	 echo '<br>';
	
	 echo 'The last two characters of date are: ';
	 $arr = str_split($date);
	 $a= count($arr);
	 for($i=0;$i<2;$i++)
	 {
	  $a = $a - 1;
	  echo $arr[$a] . ' ';
	 }
	 }

	 public function leapyear($year)
	 {

	 echo '<br>';
 	   foreach($year as $value)
	   {
             //   $year = array("2012", "396", "300","2000", "1100", "1089");
	 	for ($i=0; $i<1;$i++)
	 	
		    switch ($value)

	        	{

	        	case( ($value%4) == 0 and ($value%100)!= 0 or ($value%400)==0):
			 echo $value. ' True'.'<br>' ;


			break;			
			default:
			echo $value.' False '.'<br>' ;
			
			}
	 }

		
	 }

	 }
  
?>
