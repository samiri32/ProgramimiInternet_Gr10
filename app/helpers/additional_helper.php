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
        file_put_contents($path, printf(implode(", ", $_SESSION) . ', '. date("F d Y h:i:s A", time()) . "\n"), FILE_APPEND);
    }
    __destructor($myfile);
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
        $to = $_POST['myEmail']; // this is your Email address
        return $to;
    }
}
