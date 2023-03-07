<?php
    $CN=mysqli_connect("localhost","root","");
    $DB=mysqli_select_db($CN,"messapp");

    $FindName=$_POST["FindName"];
    $SQ="select * from registration where Name=$FindName";
    $Table=mysqli_query($CN,$SQ);
    if(mysqli_num_rows($Table)>0)
    {
        $Row=mysqli_fetch_assoc($Table);
        $Name=$Row["Name"];
        $Email=$Row["Email"];
        $password=$Row["Password"];
    }
    else{
        $Name="";
        $Email="";
        $Password="";
    }

    $Response[]=array("Name"=>$Name,"Email"=>$Email,"Password"=>$Password);
    echo json_encode($Response);
?>