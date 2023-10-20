<?php
// memanggil suatu file tersebut, lalu dalam file tersebut memanggil semua file2 lain yang akan digunakan

require_once 'core/App.php' ;
require_once 'core/Controller.php' ;
require_once 'config/Config.php' ;

// require_once berfungsi untuk menyertakan sebuah file PHP kedalam file PHP lain
// dan memastikan file yang disertakan tersebut hanya dieksekusi sekali 
// saja meskipun disertakan beberapa kali dalam beberapa baris program.

$app = new APP() ;