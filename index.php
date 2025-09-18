<?php
require_once 'Layouts/ClassAutoLoad.php';

$ObjSendMail=new SendMail();
$layoutInstance = new Layouts();
$formsInstance = new Forms();

$layoutInstance->heading($conf);
$layoutInstance->welcome();
$formsInstance->signup();
$layoutInstance->footer($conf);
