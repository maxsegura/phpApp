<?php

use Framework\App;

$tasks = App::get('database')->selectAll('tasks');



