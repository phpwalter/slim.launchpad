<?php

    require_once ROOT_PATH . 'vendor' . __DS__ . 'autoload.php';

    /** @var \Slim\App $app */
    $app = new \Slim\App(require BOOTSTRAP_PATH . 'settings.php');

    require BOOTSTRAP_PATH . 'dependencies.php';

    require MIDDLEWARE_PATH . 'middleware.php';

    require ROUTES_PATH . 'routes.php';
