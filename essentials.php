<?php

//frontend
define('SITE_URL','http://127.0.0.1/SALON-project2_Copy');
define('UPLOAD_IMG_PATH',SITE_URL.'images/about/');
define('FACILITIES_IMG_PATH',SITE_URL.'images/facilities/');
define('SERVICE3_IMG_PATH',SITE_URL.'images/service3/');


//backend upload 
define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/SALON-project2_Copy/images/');
define('ABOUT_FOLDER', 'about/');
define('FACILITIES_FOLDER','facilities/');
define('SERVICE3_FOLDER','service3/');


function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo"<script>window.location.href='index2.php'</script>";
        exit;
    }
 
}

    function redirect($url){
        echo"<script>window.location.href='$url'</script>";
        exit;
    }

    function alert($type, $msg){
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert

    <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    

    alert;

}

function uploadImage($iamge,$folder)
{
    $valid_mime = ['image/jpeg','image/png','image/webp'];
    $img_mime = $iamge['type'];

    if(!in_array($img_mime,$valid_mime))
    {
        return 'inv_img';
    }
    else if(($iamge['size']/(102424*102424))>2)
    {
        return 'inv_size';
    }
    else
    {
        $ext = pathinfo($iamge['name'],PATHINFO_EXTENSION);
        $rname = 'IMG_'.random_int(11111,99999).".$ext";

        $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;

        if(move_uploaded_file($iamge['tmp_name'],$img_path))
        {
            return $rname;
        }
        else
        {
            return 'upd_failed';
        }
    }
}


/* function uploadSVGImage($iamge,$folder)
{
    $valid_mime = [''];
    $img_mime = $iamge['type'];

    if(!in_array($img_mime,$valid_mime))
    {
        return 'inv_img';
    }
    else if(($iamge['size']/(102424*102424))>1)
    {
        return 'inv_size';
    }
    else
    {
        $ext = pathinfo($iamge['name'],PATHINFO_EXTENSION);
        $rname = 'IMG_'.random_int(11111,99999).".$ext";

        $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
        if(move_uploaded_file($iamge['tmp_name'],$img_path))
        {
            return $rname;
        }
        else
        {
            return 'upd_failed';
        }
    }
} */


?>;