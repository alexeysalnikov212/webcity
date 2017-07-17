<?php

    /**
     * config.php
     *
     * Configures app.
     */

    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require("helpers.php");

    // WC Library
    require("library/WC.php");
    WC::init(__DIR__ . "/../config/db.config.json");

    // enable sessions
    session_start();

    // require authentication for all pages except /login.php, /logout.php, /register.php and /index.php
    if (!in_array($_SERVER["PHP_SELF"], ["/login.php", "/logout.php", "/register.php", "/index.php"]))
    {
        if (empty($_SESSION["id"]))
        {
            return;
            //redirect("index.php");
        }
    }

?>
