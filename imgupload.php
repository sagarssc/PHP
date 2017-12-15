<?php
$target_dir="uploads/";
$target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"]))
{
	$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check!==false)
	{
		echo"File is an image-".$check[mime].".";
		$uploadOK=1;
	}
	else {
		echo"File i not an image.";
		$uploadOK=0;
		
	}
}
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
{
	echo"The file".basename(
		$_FILES["fileToUpload"]["name"])."has been uploaded.";
	}
		else 
		{
			echo"sorry ,there was an error uploading your file.";
			
	}

?>
