<?php
include "_dbconnect.php";
$method=$_SERVER['REQUEST_METHOD'];

if($method=='POST')
{
    // $sno=$_POST['sno'];
    $email=$_POST['email'];
    // $pass=$_POST['pass'];
    $file=$_FILES['photo'];
    // echo var_dump($file);
    $filename=$file['name'];
    $filepath=$file['tmp_name'];
    $fileerror=$file['error'];
    if($fileerror==0){
        $destfile='upload/'.$filename;
        move_uploaded_file($filepath,$destfile);

        $sql="INSERT INTO `imageupdate` (`email`, `password`, `image`, `timestamp`) VALUES ('$email', '12345', '$destfile', current_timestamp())";
        $result=mysqli_query($conn, $sql);
        if($result){
            echo"data inserted successfully";
            header('location: showdata.php');
        }
        else
        {
            echo "data inserted is failed";
        }

    }
}
?>