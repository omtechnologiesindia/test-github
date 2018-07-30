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



    public function addToCartNow($productArray) {
    	$prodId=$_SESSION['prodId']+1 ;
    	$_SESSION['prodId']=$prodId;
       $_SESSION['product'][$prodId]=$productArray;
       return $prodId;
    } 
    public function removeFromCart($prodId) {
    	
       unset($_SESSION['product'][$prodId]);
       
    } 

    if($notes !== ''){
					$outputData[]=$data[9];

					$outputData[]=$notes;
					echo($outputData[0]);
					echo("<br>");
					echo($outputData[1]);
					echo("<br>");

					fputcsv($file6, $outputData);
				}

} 




?>
