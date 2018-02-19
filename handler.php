<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )
 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;

$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['name','email'])->areRequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('message')->maxLength(6000);

   /* $pp->SMTPDebug = 2;                                 // Enable verbose debug output */
    $pp->isSMTP();                                      // Set mailer to use SMTP
    $pp->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $pp->SMTPAuth = true;                               // Enable SMTP authentication
    $pp->Username = 'gigirajnjak@example.com';                 // SMTP username
    $pp->Password = 'mihajlo2012';                           // SMTP password
    $pp->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $pp->Port = 587;   

$pp->sendEmailTo('gogashkk@gmail.com'); // ← Your email here
echo $pp->process($_POST);