<?php
// manage/process and store streams
foreach($_POST as $k => $p){
 if($k=='base64data'){
 	$w3stream = substr(trim($p), 22);
 	//file_put_contents('F:\log_code.txt', $p);
 	$w3stream = base64_decode($w3stream);
 } else {
	 $fname = $p;
  }
}
file_put_contents('F:\log_code.txt', $w3stream);
if(!file_put_contents( "./".$fname, $w3stream )){
 echo"w3FWerror - the file not createt"; // ERROR: the file has not been created
	exit;
}


?>