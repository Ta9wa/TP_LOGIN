<?php


require 'class/user.class.php';
//include 'signup.phtml';
if(isset($_POST['signup']))
{
$username=$_POST['user_name'];
//var_dump($username);
$email=$_POST['email'];
$pass=$_POST['password'];
var_dump($pass);
$passc=$_POST['conf_pass'];

if(!preg_match("/^[a-zA-Z0-9 ]+$/",$username)){
    $nom_erreur="Erreur nom";
    goto stop;
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_erreur="erreur email";
    goto stop;
}

if(strlen($pass)<6){
    $pass_erreur="erreur pass";
    goto stop;
}

if($pass!= $passc){
    $txt="doesn't match";
    goto stop;
}
$si= new user;
$mdp = password_hash($pass, PASSWORD_DEFAULT);
//var_dump($mdp);
$si->signupp($username,$email,$mdp);
//header('Location:principale.php');
}

stop:
include 'signup.phtml';

 