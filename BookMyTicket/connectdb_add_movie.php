<?php
    $conn=mysqli_connect("localhost","root","","moviedb");

    if($conn->connect_error){
        die("Connection failed : ", $conn->connect_error);   
    }

    $name=$_GET["name"];
    $seat=$_GET["seat"];

    $res=mysqli_query($conn, "insert into movies(name,seat) values('$name','$seat')");

    echo "done";



?>