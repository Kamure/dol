<?php
require_once 'ClassAutoLoad.php';


$layoutInstance->heading($conf);
$layoutInstance->welcome($conf);
$formsInstance->login();
$layoutInstance->footer($conf);
