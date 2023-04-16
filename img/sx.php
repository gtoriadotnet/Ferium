<?php
 
$secret_key = "finobeisgay";
$sharexdir = "sx/";
$domain_url = 'http://ferium.tk/';
 
function RandomString() {
	$key = mt_rand(100000,999999);
    return $key;
}
 
if(isset($_POST['secret']))
{
    if($_POST['secret'] == $secret_key)
    {
        $filename = getdate()[0];
        $target_file = $_FILES["sharex"]["name"];
        $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
 
        if (move_uploaded_file($_FILES["sharex"]["tmp_name"], $sharexdir.$filename.'.'.$fileType))
        {
            echo "http://ferium.tk/img/sx/". $filename .'.'.$fileType . " ";
        }
            else
        {
           echo 'File upload failed - CHMOD/Folder doesn\'t exist?';
        }  
    }
    else
    {
        echo 'Invalid Secret Key';
    }
}
else
{
    echo 'No post data recieved';
}
?>