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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<title>iDzaKi Server Side ProgressBar</title>

<link rel="stylesheet" type="text/css" href="idzaki_pb.css" /> 

<script src="js/idzaki_pb.js" type="text/javascript"></script>

<?php include "php/idzaki_pb.php";?>

</head>

<body>

<h1>iDzaKi Server Side ProgressBar</h1>

<h2>Loading from database</h2>

<h2 id="pb_value_1">%0</h2>

<div class="idzaki_pb">
	<div id="pb_graph_1" class="idzaki_pb_completed pb_blue" style="width: 0%">
	</div>
</div>

<h2>Uploading your files</h2>

<h2 id="pb_value_2">%0</h2>

<div class="idzaki_pb">
	<div id="pb_graph_2" class="idzaki_pb_completed pb_green" style="width: 0%">
	</div>
</div>

<h2>Executing Queries </h2>

<h2 id="pb_value_3">%0</h2>

<div class="idzaki_pb">
	<div id="pb_graph_3" class="idzaki_pb_completed pb_red" style="width: 0%">
	</div>
</div>

<h2>Updating to database</h2>

<h2 id="pb_value_4">%0</h2>

<div class="idzaki_pb">
	<div id="pb_graph_4" class="idzaki_pb_completed pb_yellow" style="width: 0%">
	</div>
</div>

<div class="content">

		<div class="log_area" id="logs"></div>

</div>


<?php

idzaki_start();//Turn on output buffering 

echo str_pad(' ',4096)."<br />\n"; //Sending 4kb data to browser

idzaki_addLog('logs','Loading from database...'); //Send log text to browser
		
$max_value=150;		//set Maximum value of progressbar-1

for ($cursor=1;$cursor<=$max_value;$cursor++){ //Only test loop for forward to progressbar-1
		
		usleep(10000);// waiting 10000 ms
		idzaki_progressBar($cursor,$max_value,1); //Set progressbar-1 cursor and send to browser
		
		
}

idzaki_addLog('logs','Loading Complete...');//Send log text to browser

idzaki_addLog('logs','---------------------------------------');//Send log text to browser



idzaki_addLog('logs','Uploading your files...');//Send log text to browser

idzaki_addLog('logs','---------------------------------------');//Send log text to browser

usleep(1000000);// waiting 1000000 ms




$random_filename=rand(1, 9999) . '.jpg'; //Create random file name for test logs

idzaki_addLog('logs','Uploading '. $random_filename .'...');//Send log text to browser

$max_value=600;	//set Maximum value of progressbar-2

for ($cursor=1;$cursor<=$max_value;$cursor++){//Only test loop for forward to progressbar-2
		
$random_int = rand(1, 50);//Create random number for test logs
		
		
		usleep(10000);// waiting 10000 ms
		idzaki_progressBar($cursor,$max_value,2);//Set progressbar-2 cursor and send to browser
		
if ($random_int == 5 ){//only if random number = 5 then send log to browser ( 1/50 chance )
idzaki_addLog('logs',$random_filename .' is uploaded.');//Send log text to browser


idzaki_addLog('logs','---------------------------------------');//Send log text to browser
$random_filename=rand(1, 9999) . '.jpg';//Create new random file name for test logs
idzaki_addLog('logs','Uploading '. $random_filename .'...');//Send log text to browser
}

		
}
idzaki_addLog('logs',$random_filename .' is uploaded.');//Send log text to browser
idzaki_addLog('logs','---------------------------------------');//Send log text to browser

usleep(1000000);// waiting 1000000 ms

idzaki_addLog('logs','Executing Queries...');//Send log text to browser


$max_value=80;	//set Maximum value of progressbar-3

for ($cursor=1;$cursor<=$max_value;$cursor++){//Only test loop for forward to progressbar-3
		
		usleep(10000);// waiting 10000 ms
		idzaki_progressBar($cursor,$max_value,3);//Set progressbar-3 cursor and send to browser
		
		
}
idzaki_addLog('logs','Queries Executed Successfully.');//Send log text to browser
idzaki_addLog('logs','---------------------------------------');//Send log text to browser

usleep(1000000);// waiting 1000000 ms

idzaki_addLog('logs','Updating to database...');//Send log text to browser

$max_value=20;	//set Maximum value of progressbar-4

for ($cursor=1;$cursor<=$max_value;$cursor++){//Only test loop for forward to progressbar-4
		
		usleep(10000);// waiting 10000 ms
		idzaki_progressBar($cursor,$max_value,4);//Set progressbar-4 cursor and send to browser
		
		
}
idzaki_addLog('logs','Database is Updated.');//Send log text to browser

	
	idzaki_stop();//Flush (send) the output buffer



?>


<div class="content">
<a class="idzaki_btn" href="index.php">Try Again</a>
</div>

</body>

</html>
