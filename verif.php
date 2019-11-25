<?php


require 'class/user.class.php';

$username=$_POST['user_name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$passc=$_POST['conf_pass'];
if(isset($_POST['signup']))
{
if(!preg_match("/^[a-zA-Z0-9 ]+$/",$username)){
    $n_erreur="Erreur nom";
    goto stop;
}}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $em_erreur="erreur email";
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
var_dump($mdp);
$si->signupp($username,$email,$mdp);


stop:
include 'signup.phtml';
 