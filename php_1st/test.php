<?php 
	 $file_change_time = fopen('index.php','r');
	 $file_change_time = fstat($file_change_time);
    // $file_change_time = date('Y-m-d H:i:m:s', $file_change_time);
	 print_r($file_change_time) ;

?>