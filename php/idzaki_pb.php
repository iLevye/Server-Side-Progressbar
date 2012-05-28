<?php
/*
 * Server Side Progressbar v1.1
 * -------------------------------
 *
 * Author: Ibrahim OZKAN
 * E-Mail: idzaki@gmail.com
 *
 * Version 1.1 release date: 10.04.2011
 *
*/

$percent = 0;//define progressbar percent value

function idzaki_progressBar($pval,$pmax,$pdId){//Set progressbar cursor and send to browser
/*

$pval: Cursor value
$pmax: Maximum value of progressbar
$pdId: Progressbar HTML id
*/

	global $percent;
						
	$pper=floor($pval/($pmax/100)); //Calculating progressbar percent value
	
	if ($pper != $percent){//only if changed percent value
	    echo '<script language="javascript">setProgressbar('. $pdId .','. $pper .');</script>';//print javascript command
	
	    flush();//send javascript command to browser
	    ob_flush();//send javascript command to browser
	   }
	   
	  
	  if ($pper==100){
	  	$percent=0;//set percent value if percent = 100
	  }else{
	  	$percent=$pper;//set new percent value
	  }
	  
	  return true;
}

function idzaki_addLog($objId,$val){//Send log text to browser
	echo '<script language="javascript">addLog(\''. $objId .'\',\''. $val.'\');</script>';//print javascript command
		
	flush();//send javascript command to browser
	ob_flush();//send javascript command to browser
	
	return true;
}	

function idzaki_start(){//Turn on output buffering 
	if (ob_get_level() == 0) {
	    ob_start();
	}
}

function idzaki_stop(){//Flush (send) the output buffer
	ob_end_flush();
}
?>