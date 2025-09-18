<?php
require_once 'conf.php';
require_once 'Globals/SendMail.php';

$mailCnt=[
    'mail_from'=>$conf['site_email'],
    'name_from'=>$conf['site_name'],
    'mail_to'=>'ufreex.niccur@gmail.com',
    'name_to'=>'Kamure Beyonce, Receiver',
    'subject'=>'🔐 BankSecure: Your Digital Vault Is Ready',
    'body'=>'Hello <b>BankSecure</b> member,<br><br>Your account has been activated.<br>Access your dashboard, track your balance, and move money with confidence.<br><br><i>Security is not a feature it is our foundation.</i>',
    'altbody'=>' Hello BankSecure member, Your account has been activated. Access your dashboard, track your balance, and move money with confidence. Security is not a feature it is our foundation.',
    

];


$ObjSendMail=new SendMail();
$ObjSendMail->Send_Mail($conf,$mailCnt);
