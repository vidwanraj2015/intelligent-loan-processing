
<?php

session_start();
include('db.php');


if(is_uploaded_file($_FILES['myfile']['tmp_name']) && getimagesize($_FILES['myfile']['tmp_name']) != false)
    {
  
    $size = getimagesize($_FILES['myfile']['tmp_name']);
    $type = $size['mime'];
    $imgfp = fopen($_FILES['myfile']['tmp_name'], 'rb');
    $size = $size[3];
    $name = $_FILES['myfile']['name'];
    $maxsize = 99999999;
	
	if($_FILES['myfile']['size'] < $maxsize )
	{
		  $imgfp = fopen($_FILES['myfile']['tmp_name'], 'rb');
		$quer = "UPDATE `docs` SET `aadhar`='$imgfp' WHERE email='pranay@gmail.com'";
		if($conn->query($quer))
{
	echo "succesfull";
	
}
else{
	echo "error";
}

	}
	   else{
		   echo "sizes error";
	   }
	}
	else{
		echo "unsupported image format";
	}

// $imagetmp = addslashes(file_get_contents ($_FILES['myfile']['tmp_name']));





?>

