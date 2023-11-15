<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person = new Person("ivo","medan");

// manipulasi properti nama, alamat, negara
$person->nama = "ivo";
$person->alamat = "medan";
$person->negara = "Jepang";

// menampilkan hasil
echo "nama = {$person->nama}" . PHP_EOL;
echo "alamat = {$person->alamat}" . PHP_EOL;
echo "negara = {$person->negara}" . PHP_EOL;
