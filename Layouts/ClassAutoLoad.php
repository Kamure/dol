<?php


require_once 'conf.php';
$directory=[
    'Layouts/',

    'Forms/',
    'Globals/'
];

spl_autoload_register(function($className) use ($directory){
    foreach($directory as $dir){
        $filePath=__DIR__ . '/../' . $dir . '/' . $className . '.php';
        if(file_exists($filePath)){
            require_once $filePath;
            return;
        }
    }

});




