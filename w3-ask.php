<?php
// manage/process and store streams
foreach($_POST as $k => $p){
 if($k=='base64data'){
 	$w3stream = base64_decode(substr(trim($p), 22));
 } else {
	 $fname = $p;
  }
}
if(!file_put_contents( "./".$fname, $w3stream )){
 echo"w3FWerror - file wav not created"; // ERROR: the file has not been created
	exit;
}


?>
