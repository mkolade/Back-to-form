<?php

$error_status = FALSE;

if(empty($_POST['first']))
{
    $err_firstname = "Please Input Your Firstname";
    $error_status = TRUE;
}

if(empty($_POST['last']))
{
    $err_lastname = "Please Input Your Lastname";
    $error_status = TRUE;
}

if(empty($_POST['email']))
{
    $err_email = "Please Input Your Email";
    $error_status = TRUE;
}

if(empty($_POST['number']))
{
    $err_number = "Please Input Your Phone Number";
    $error_status = TRUE;
}

if(empty($_POST['country']))
{
    $err_country = "Please Input Your Country";
    $error_status = TRUE;
}

if(empty($_POST['state']))
{
    $err_state = "Please Input Your State";
    $error_status = TRUE;
}

if(empty($_POST['address']))
{
    $err_address = "Please Input Your Address";
    $error_status = TRUE;
}

   if($error_status === FALSE)
   {
    echo "Validation Succesful,Save Record In Database";
    exit;
   }
?>