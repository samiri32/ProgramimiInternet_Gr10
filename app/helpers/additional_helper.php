<?php 
function giveBreaks($text){
$arrayData=explode("\n",$text);

for($i=0;$i<count($arrayData);$i++)
{
 echo $arrayData[$i].'<br>';
}
}