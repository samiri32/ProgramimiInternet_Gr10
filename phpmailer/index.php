<?php
/*##########Script Information#########
  # Purpose: Send mail Using PHPMailer#
  #          & Gmail SMTP Server 	  #
  # Created: 24-11-2019 			  #
  #	Author : Hafiz Haider			  #
  # Version: 1.0					  #
  # Website: www.BroExperts.com 	  #
  #####################################*/

//Include required PHPMailer files
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';
include '../ProgramimiInternet_Gr10/app/helpers/additional_helper.php';
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
$mail = new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//Define smtp host
$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
$mail->SMTPSecure = "tls";
//Port to connect smtp
$mail->Port = "587";
//Set gmail username
$mail->Username = "bibliotekabsd@gmail.com";
//Set gmail password
$mail->Password = "sinani123";
//Email subject
$subjekti = "BIBLIOTEKA SINAN DOBREVA";
$mail->Subject = $subjekti;
//Set sender email
$mail->setFrom('bibliotekabsd@gmail.com');
//Enable HTML
$mail->isHTML(true);
//Attachment
// $mail->addAttachment('img/sinani.jpg');
//Email body
if (isset($_POST['submit'])) {
	$a = giveBreaks2("Miresevini ne Biblioteken 'Sinan Dobreva'.


MISIONI
BSD eshte institucion kulturor, edukues e informues qe grumbullon dhe ruan koleksionet e veta nga fushat e ndryshme te krijimtarise intelektuale me qellim qe ti beje te njohura shfrytezuesve per ti studiuar dhe per ti lene trashegim gjeneratave te ardhshme.

OFERTAT
Biblioteka BSD ofron qasje ne materialin bibliotekar per te gjithe perdoruesit e qytetit te Prishtines me rrethine, pavaresisht nga raca, kombesia, gjinia, mosha, besimi fetar, gjuha apo paaftesite fizike, dhe informon e ndihmon ata ne perdorimin e gjetjen e tyre.

BASHKEPUNETORET
Biblioteka 'Sinan Dobreva' bashkepunon me bibliotekat ne vend dhe jashte vendit; Bashkepunon me institucionet kulturore, shtepite botuese, shkollat dhe me komunitetin me qellim te nxitjes se interesimit per librin dhe te mesuarit gjate gjithe jetes.

Ju mirepresim!");
	$mail->Body = $a;

	$mail->addAddress(mailsender());
} else {
	if (isset($_POST['komenti'])) {
		if (isset($_POST['emri']) || isset($_POST['mbiemri']) || isset($_POST['vleresimi'])) {
			$subjekti2 = ($_POST['emri']) . " " . ($_POST['mbiemri']) . " " . ($_POST['vleresimi']);
			$mail->Subject = $subjekti2;
			var_dump("arbresha2");
		}
		$b = giveBreaks2($_POST['komenti']);
		$mail->Body = $b;
		$mail->addAddress('bibliotekabsd@gmail.com');
		var_dump("arbresha3");
	}
}
//Finally send email
if ($mail->send()) {
	header('location:' . '../ProgramimiInternet_Gr10');
} else {
	echo "Ka ndodhur nje gabim! Ju lutem provoni perseri.";
}
//Closing smtp connection
$mail->smtpClose();
