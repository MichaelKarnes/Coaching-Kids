<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';

if(isset($_FILES['file'])) {
    $file = $_FILES['file'];
    
    // File properties
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    // Work out the file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    if(isset($_POST['filename'])) {
        $file_destination = 'C:\\Users\\Michael\\Documents\\My Web Sites\\EmptySite\\images\\'.$_POST['filename'].".jpg";
    }

    $allowed = array('bmp', 'gif', 'jpg', 'png');

    if(!in_array($file_ext, $allowed)) {
        Session::put("error", "File must be an image.");
        Redirect::to($_SERVER['HTTP_REFERER']);
        die();
    }

    if($file_error != 0) {
        Session::put("error", "A file error was encountered.");
        Redirect::to($_SERVER['HTTP_REFERER']);
        die();
    }

    if($file_size > 2097152) {
        Session::put("error", "File too large.");
        Redirect::to($_SERVER['HTTP_REFERER']);
        die();
    }

    if(!move_uploaded_file($file_tmp, $file_destination)) {
        Session::put("error", "Could not upload image.");
        Redirect::to($_SERVER['HTTP_REFERER']);
        die();
    }
    header("Refresh:0; url=".$_SERVER['HTTP_REFERER']);
    die();
}
?>