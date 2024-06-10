<?php

use App\MVC\App as App;

session_start();

require "../vendor/autoload.php";
require "../routes/web.php";

App::run();
