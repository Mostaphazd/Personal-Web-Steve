<?php
if (!isMissing()) {
    $UserName = $_POST['username'];
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Password = $_POST['password'];
    $Email = $_POST['email'];
    $DOB = $_POST['dob'];
    $Sex = $_POST['sex'];
}

$formData = [
    'Name' => $UserName,
    'Password' => $Password,
    'FirstName' => $FirstName,
    'LastName' => $LastName,
    'Email' => $Email,
    'DateOfBirth' => $DOB,
    'Sex' => $Sex
];

if(file_exists('List_of_Users.csv')){
    if(User_Exists($UserName)){
        echo '<script>alert("Username Already exists, please change your credentials and try again")</script>'; 
        echo '<script>window.location.href = "../Pages/signup.html";</script>';
    }
    else{
        $List_of_Users = 'List_of_Users.csv';
        $fp = fopen($List_of_Users, 'a+');
        $csvData = implode(',', $formData) . "\n"; 
        fwrite($fp, $csvData);
        fclose($fp);
        echo '<script>alert("Great, you are signed up. Please use your credentials to login")</script>'; 
        echo '<script>window.location.href = "../index.php";</script>';
    }
}
else{
    $List_of_Users = 'List_of_Users.csv';
    $fp = fopen($List_of_Users, 'a+');
    fputcsv($fp, array_keys($formData));
    fputcsv($fp, $formData);
    fclose($fp);
    echo '<script>alert("Great, you are signed up. Please use your credentials to login")</script>'; 
    echo '<script>window.location.href = "../index.php";</script>';
}



function User_Exists($UN){
    if (($handle = fopen("List_of_Users.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $value = empty($data[0]) ? "&nbsp;" : $data[0];
            if($value == $UN){
                return 1;
            }
        }
        fclose($handle);
    }
}
function isMissing(){
    if (isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname'])
        && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['dob'])) {
        return 0;
    } else {
        return 1;
    }
}

