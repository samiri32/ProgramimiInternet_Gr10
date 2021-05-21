<?php 

function giveBreaks($text){
$arrayData=explode("\n",$text);

for($i=0;$i<count($arrayData);$i++)
{
 echo $arrayData[$i].'<br>';
}
}

function giveBreaks2($text){
    $arrayData=explode("\n",$text);
    $arrayData2 = "";
    for($i=0;$i<count($arrayData);$i++)
    {
     $arrayData2 .= $arrayData[$i].'<br>';
    }
    return $arrayData2;
    }

function mailsender(){
    if (isset($_POST['submit'])) {
        $to = $_POST['myEmail']; // this is your Email address
        return $to;
    }
}