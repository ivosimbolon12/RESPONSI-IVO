<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$ivo = new Person("ivo", "medan");

// tambahkan value nama di object
$ivo->nama = "ivo";

// panggil function sayHelloNull dengan parameter
$ivo->sayHelloNull("Kic");

// buat object dari kelas person
$simbolon = new Person("simbolon", "jepang");

// tambahkan value nama di object
$simbolon->nama = "simbolon";

// panggil function sayHelloNull dengan parameter null
$simbolon->sayHelloNull(null);
