<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/JobBoard.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        $first_job = new Job();
    })
