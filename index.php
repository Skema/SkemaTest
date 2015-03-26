<?php

require_once 'vendor/autoload.php';

use Testify\Testify;

error_reporting(E_ALL);
ini_set( 'display_errors','1');

RedBeanPHP\R::setup('mysql:host=localhost;dbname=skema', 'skema', 'skema');

RedBeanPHP\R::nuke();

SkemaTest\Runner::run($tf = new Testify('Skema Test Suite'));

$tf();