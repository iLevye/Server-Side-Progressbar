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
function setProgressbar(object_id,object_value){
//Print progressbar value
document.getElementById('pb_value_'+object_id).innerHTML='%'+object_value;
//Set progressbar cursor
document.getElementById('pb_graph_'+object_id).style.width=object_value+'%';
}

function addLog(object_id,object_value){
//Add new text to log area
document.getElementById(object_id).innerHTML+= object_value + '<br/>';
//scroll down
document.getElementById(object_id).scrollTop = document.getElementById(object_id).scrollHeight;
}