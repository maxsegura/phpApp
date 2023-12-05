<?php

use Framework\App;

require '../vendor/autoload.php';

require '../framework/bootstrap.php';

App::get('router')->redirect($_SERVER['REQUEST_URI']);