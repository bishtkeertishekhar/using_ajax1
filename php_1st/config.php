<?php
    $conn = mysqli_connect("localhost","root","","php_1st");
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// type one 
if(!empty($_POST['keyup'])){
	$name = $_POST['keyup'];
 $query = "SELECT * FROM user WHERE first_name = '$name'" ;

  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)>0){
   $name = mysqli_fetch_array($result);
    $content =  '<label>Last Name</label>
    			<input type="text" class="form-control" name="'. $name['last_name'] .'" value="'. $name['last_name'] .'">';
    $content .= '<label>Last Name</label>
    			<input type="text" class="form-control" name="full_name"
    			 value="'. $name['first_name'] . ' ' . $name['last_name'] .'">';

	 echo $content;
	}else{
		echo '<div class="form-control">No Data Found</div>';
	}
}
 //type two 
 /* if(!empty($_POST['keyup'])){
	$name = $_POST['keyup'];
 $query = "SELECT * FROM user WHERE first_name = '$name'" ;

  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)>0){
   $name = mysqli_fetch_array($result);
    echo json_encode($name);
	}else{
		echo json_encode("No Record Found");
	}
}
*/
?>