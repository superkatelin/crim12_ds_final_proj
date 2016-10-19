<?php

define('DB_CONNECT','mysql:host=localhost;dbname=crimson12db');
define('DB_USER','crimson12');
define('DB_PASSWORD','rose-likely-iceland-67');

set_include_path(__DIR__);

//any models will be required below
require 'models/client.php';
require 'models/sensor.php';
require 'models/site.php';
