<?php
// Connect to database
$connection = mysqli_connect(
    'localhost',
    'root',
    '1234',
    'certificate_project'
);

//Check if there is post from index form or not
if (isset($_POST['name'])){
    $name = $_POST['name'];
    $course = $_POST['course'];

    //make direction for the user certificate
    $path = "../certificates/".$name;
    mkdir($path);

    //get the image and move it to the user certificate directory
    $tmp = $_FILES['img']['tmp_name'];
    $ext = explode("/", $_FILES['img']['type'])[1];
    $img_name = $name.".".$ext;
    $img_path = "../certificates/$name/$img_name";
    move_uploaded_file($tmp, $img_path);

    //get the certificate content and make certificate file for user
    $content = file_get_contents('../template/certificate_file.html');
    $certificate = $name.".html";
    $fie = fopen("../certificates/$name/$certificate", "w");
    $new_content = str_replace('name', $name, $content);
    $new_content = str_replace('course', $course, $new_content);
    $new_content = str_replace('image', $img_name, $new_content);
    fwrite($fie, $new_content);

    //insert data of the certificate to database
    mysqli_query($connection, "insert into `certificates`(`path`, `name`, `img`) values('$path', '$name', '$img_path')");
    if (mysqli_affected_rows($connection)>0){
        //if the certificate is done make done alert and go to certificate page
        echo "<script type = 'text/javascript'>alert('Done!');</script>";
//        sleep(2);
        header("Refresh: 1 URL= ../certificates/$name/$certificate");
    }

}