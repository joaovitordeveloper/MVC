<?php

use app\classes\Uri;
use core\Controller;

require '../bootstrap.php';

try {
    $controller = new Controller;
    $controller = $controller->load();
} catch (\Throwable $th) {
    dd($th->getMessage());
}


dd($controller);