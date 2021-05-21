<?php

function giveBreaks($text)
{
    $arrayData = explode("\n", $text);

    for ($i = 0; $i < count($arrayData); $i++) {
        echo $arrayData[$i] . '<br>';
    }
}

function writeLog()
{
    $path = 'C:/xampp/htdocs/ProgramimiInternet_Gr10/public/log.txt';
    $myfile = fopen($path, "a") or die("Unable to open file!");
    if (isset($_SESSION['user_id'])) {
        file_put_contents($path, implode(", ", $_SESSION) . ', '. date("F d Y h:i:s A", time()) . "\n", FILE_APPEND);
    }
    __destructor($myfile);
}

function readLog(){
    $path = 'C:/xampp/htdocs/ProgramimiInternet_Gr10/public/log.txt';
    if (isset($_SESSION['user_id'])) {
       echo file_get_contents($path);
    }
}

function __destructor($file){
    fclose($file);
}

function giveBreaks2($text)
{
    $arrayData = explode("\n", $text);
    $arrayData2 = "";
    for ($i = 0; $i < count($arrayData); $i++) {
        $arrayData2 .= $arrayData[$i] . '<br>';
    }
    return $arrayData2;
}


function mailsender()
{
    if (isset($_POST['submit'])) {
        $to = strip_tags($_POST['myEmail']); // this is your Email address
        return $to;
    }
}


function mailsender2()
{
    if (isset($_POST['dergo'])) {
       $array= [ 
        $emri = strip_tags($_POST['emri']), 
        $mbiemri = strip_tags($_POST['mbiemri']),
        $vleresimi = strip_tags($_POST['vleresimi']),
        $komenti = strip_tags($_POST['komenti'])
    ];
        return $array;
    }
}
