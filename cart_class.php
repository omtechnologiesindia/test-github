<?php
class omtechCart { 
    
    
    public function __construct(){
    	if(!isset($_SESSION)) {
    		session_start();

    	}
        if(!isset($_SESSION['prodId'])) {

            $_SESSION['prodId']=0;
        }

    }



    public function addToCart($productArray) {
    	$prodId=$_SESSION['prodId']+1 ;
    	$_SESSION['prodId']=$prodId;
       $_SESSION['product'][$prodId]=$productArray;
       return $prodId;
    } 
    public function removeFromCart($prodId) {
    	
       unset($_SESSION['product'][$prodId]);
       
    } 
    public function cartContentAsArray() {
    	
       
       return $_SESSION['product'];
    } 
} 




?>
