<?php

// buat namespace

// import data dari conflict
require "conflict.php";
// buat obeject dari namespace yang di buat
$conflict1 = new data\satu\Conflict1();
$conflict2 = new data\dua\Conflict2();
// import data helper
require "helper.php";
// tampilkan helper menggunakan echo
echo Helper\APPLICATION .PHP_EOL;
// masukan Helper\helpMe();
Helper\helpme();
