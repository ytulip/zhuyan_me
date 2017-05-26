<?php

Route::get('/k',function(){
    $a = \App\Core\Request::getAttribute('a',0);
    $b = \App\Core\Request::getAttribute('b',0);
    echo $a + $b;
    exit;
});

Route::controller('/index','IndexController');
