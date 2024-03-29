<?php
// /Maximize script execution time
set_time_limit(600);

//Initial settings, Just specify Source and Destination Image folder.
$ImagesDirectory	= '/home/souq2594/public_html/assets/product/'; //Source Image Directory End with Slash
$DestImagesDirectory	= '/home/souq2594/public_html/assets/mobile/'; //Destination Image Directory End with Slash
$NewImageWidth 		= 200; //New Width of Image
$NewImageHeight 	= 200; // New Height of Image
$Quality 		= 80; //Image Quality

//Open Source Image directory, loop through each Image and resize it.
if($dir = opendir($ImagesDirectory)){
	while(($file = readdir($dir))!== false){

		$imagePath = $ImagesDirectory.$file;
		$destPath = $DestImagesDirectory.$file;
		$checkValidImage = @getimagesize($imagePath);

		if(file_exists($imagePath) && $checkValidImage) //Continue only if 2 given parameters are true
		{
			//Image looks valid, resize.
			if(resizeImage($imagePath,$destPath,$NewImageWidth,$NewImageHeight,$Quality))
			{
				echo $file.' resize Success!<br />';
				/*
				Now Image is resized, may be save information in database?
				*/

			}else{
				echo $file.' resize Failed!<br />';
			}
		}
	}
	closedir($dir);
}

//Function that resizes image.
function resizeImage($SrcImage,$DestImage, $MaxWidth,$MaxHeight,$Quality)
{
   	list($iWidth,$iHeight,$type)	= getimagesize($SrcImage);
    $ImageScale          	= min($MaxWidth/$iWidth, $MaxHeight/$iHeight);
    $NewWidth              	= ceil($ImageScale*$iWidth);
    $NewHeight             	= ceil($ImageScale*$iHeight);
    $NewCanves             	= imagecreatetruecolor($NewWidth, $NewHeight);

	switch(strtolower(image_type_to_mime_type($type)))
	{
		case 'image/jpeg':
			$NewImage = imagecreatefromjpeg($SrcImage);
			break;
		case 'image/png':
			$NewImage = imagecreatefrompng($SrcImage);
			break;
		case 'image/gif':
			$NewImage = imagecreatefromgif($SrcImage);
			break;
		default:
			return false;
	}

	// Resize Image
    if(imagecopyresampled($NewCanves, $NewImage,0, 0, 0, 0, $NewWidth, $NewHeight, $iWidth, $iHeight))
    {
        // copy file
        if(imagejpeg($NewCanves,$DestImage,$Quality))
        {
            imagedestroy($NewCanves);
            return true;
        }
    }
}
