<?php
    $CN=mysqli_connect("localhost","root","");
    $DB=mysqli_select_db($CN,"messapp");

    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $IQ="insert into registration(Name,Email,Password) values('$Name','$Email','$Password')";

    $R=mysqli_query($CN,$IQ);

    if($R)
    {
        $Message="Registerd Successfully";
    }
    else{
        $Message="Server Error ....Please Try Later";
    }
    $Response[]=array("Message"=>$Message);
    echo json_encode($Response);
?>