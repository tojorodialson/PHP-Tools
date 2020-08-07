<?php
//upload file
if(isset($_FILES["item_file"])){
	$output_dir = "uploads/";//file destination 
	$ret = array();

	//You need to handle  both cases
	//If Any browser does not support serializing of multiple files using FormData() 
	if(!is_array($_FILES["item_file"]["name"])){ //single file
 	 	$fileName = $_FILES["item_file"]["name"];
 		move_uploaded_file($_FILES["item_file"]["tmp_name"], $output_dir.$fileName);
    	$ret[]= $fileName;
	}else{  //Multiple files, file[]
	  $fileCount = count($_FILES["item_file"]["name"]);
	  for($i=0; $i < $fileCount; $i++){
	  	$fileName = $_FILES["item_file"]["name"][$i];
		move_uploaded_file($_FILES["item_file"]["tmp_name"][$i],$output_dir. $fileName);
		$msg= 'Upload success'; //Success message
	  }
	
	}
 }
 ?>
 <input type="file" name="item_file[]"></div>
 <button type="submit">Start Upload</button>
