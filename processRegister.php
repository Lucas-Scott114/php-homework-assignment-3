<?php
include('db.php');
if(isset($_POST['submit'])){
    $fname= trim($_POST['fname']);
    $lname= trim($_POST['lname']);
    $email= trim($_POST['email']);
    $company= trim($_POST['companyName']);
    $surveyInfo= ($_POST['options']);
    $uname= trim($_POST['uname']);
    $pword= trim($_POST['pword']);
    $confirmPword = trim($_POST['confirmPword']);
    echo($surveyInfo);
}
?>