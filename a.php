<?php

require("vendor/autoload.php");

use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;

(new Logger('sample'))->pushHandler(new StreamHandler('log.log', Logger::INFO))->info('test');

