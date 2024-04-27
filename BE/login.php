<?php
session_start();


if (!isMissing()) {
    $UserName = $_POST['username'];
    $Password = $_POST['password'];
}   
if(User_Exists($UserName,$Password)){
    $_SESSION['username'] = $UserName;
    echo '<script>window.location.href = "../Pages/home.php";</script>';
}
else{
    echo '<script>alert("Oops, Username or password incorrect, please try again")</script>'; 
    echo '<script>window.location.href = "../index.php";</script>';
}



function User_Exists($UN,$PASS){
    $path = '../BE/List_of_Users.csv';
    if($handle = fopen($path, "r")!=FALSE){
        $handle = fopen($path, "r");
        while (($data = fgetcsv($handle)) !== FALSE) {
            if ($data[0] == $UN && $data[1] == $PASS) {
                return 1;
            }
        }
    }
    return 0;
}
function isMissing(){
    if (isset($_POST['username']) && isset($_POST['password'])){
        return 0;
    } else {
        return 1;
    }
}

