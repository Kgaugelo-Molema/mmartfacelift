<?php
    $album = isset($_GET["album"]) ? $_GET["album"] : "Uploads";
   // if ($_SERVER['REQUEST_METHOD'] == 'POST')
   // {
       // if (!isset($_POST["env"])) {
            // $msg = "Only image files can be uploaded [*.jpg;*.jpeg;*.png;*.gif]";
            // echo '<span style="color:red;">'.$msg.'</span>';
            // exit;
       // }
       // $env = $_POST["env"];
   // }

	$msg = "";
	$notify = "";

	$uniqueId = "Null";
	if (isset($_GET["id"])) {   
		$uniqueId = $_GET["id"];
	}
	if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_FILES['file-6'])) {		
		//$uniqueId = $_POST["uniqueid"];
		$randkey = rand(1000,100000);
		//$guidkey = bin2hex((string)$randkey);
		$guidkey = bin2hex(openssl_random_pseudo_bytes(16));
		$targetfilename = rand(1000,100000)."-".$_FILES['file-6']['name'];
		$file_loc = $_FILES['file-6']['tmp_name'];
		$file_size = $_FILES['file-6']['size'];
		$file_type = $_FILES['file-6']['type'];

	$folder = isset($_POST['imgfolder']) ? $_POST['imgfolder'] : "../../$album/";			
	 move_uploaded_file($file_loc,$folder.$targetfilename);

	 // Valid file extensions
	 $extensions_arr = array("image/jpg","image/jpeg","image/png","image/gif");
         if( !in_array($file_type,$extensions_arr) ) {
            $msg = "Only image files can be uploaded [*.jpg;*.jpeg;*.png;*.gif]";
         }
	 // Check extension
	 if( in_array($file_type,$extensions_arr) ){

					$notify = "Image uploaded successfully.";
					$gal = isset($_POST['gallerypage']) ? $_POST['gallerypage'] : "gallery.php";
                    header("Location:$gal");
	 } 
	}
	 
?>
