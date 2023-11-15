<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("ivo");
var_dump($company);

$company->programmer = new BackendProgrammer("anas");
var_dump($company);

$company->programmer = new FrontendProgrammer("anus");
var_dump($company);

sayHelloProgrammer(new Programmer("ivo"));
sayHelloProgrammer(new BackendProgrammer("anas"));
sayHelloProgrammer(new FrontendProgrammer("anus"));