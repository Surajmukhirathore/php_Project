<?php

// image upload function start
function upload_image($imagename,$directory)
 {
     //Targeting Folder
  $target1=$directory;

 $target1=$target1.uniqid().basename($_FILES[$imagename]['name']);

 //Getting Selected image Type
 $type1=pathinfo($target1,PATHINFO_EXTENSION);
 if ($type1=='') {
   $success="0";
   return $success;
 }
 //Allow Certain File Format To Upload
 if($type1!='jpg' && $type1!='jpeg' && $type1!='png' && $type1!='gif' && $type1!='JPG' && $type1!='JPEG' && $type1!='PNG'  && $type1!='GIF' && $type1!='ico' && $type1!='pdf' && $type1!='webp' && $type1!='jfif' && $type1!='avif'){
  echo "Only JPG,JPEG,PNG and GIF file format are allowed to Upload";
  $success="0";
   return $success;
 }else{
  //checking for Existing image File0
  if(file_exists($target1)){
   echo "File Already Exist";
   $success="0";
   return $success;
  }else{


   //Moving The Uploaded image file to Desired Directory
  $uplaod_success=move_uploaded_file($_FILES[$imagename]['tmp_name'],"".$target1);
     //   $upload_success=compressImage($_FILES[$image-name]['tmp_name'],$target1,60);
     if($uplaod_success)
     {
     $success="image uploaded";
     return  $target1;
     }else
     {
     return  $success="0";
     }

  }
}

}
// image upload function end
?>