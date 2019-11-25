<?php
require 'dbcon.class.php';

 class user{



    public function __construct(){
        $db=new BaseDonne;
        $this->cnx = $db->connect();


    }


public function signupp($name,$email,$pass){
    try{
    
        $repp='INSERT INTO sign_up VALUES ( :username,:useremail,:userpass);';
        $rep=$this->cnx->prepare($repp);
        $rep->bindParam(':username',$name);
        $rep->bindParam(':useremail',$email);
        $rep->bindParam(':userpass',$pass);
                $rep->execute();
     return $rep;
    }catch (Exception $e) {
        echo  $e->getMessage();
         }


}
    



}