<?php
include_once "Router.php";

Router::getInstance()->handleGet("/", function () {
    require_once('components/header.php');
    require_once('components/main.php');
    require_once('components/connect.php');
    require_once('components/footer.php');
});

Router::getInstance()->handleGet("/why", function () {
    require_once('components/header.php');
    require_once('components/why.php');
    require_once('components/connect.php');
    require_once('components/footer.php');
});

Router::getInstance()->handleGet("/works", function () {
    require_once('components/header.php');
    require_once('components/works.php');
    require_once('components/connect.php');
    require_once('components/footer.php');
});

Router::getInstance()->handleGet("/project", function () {
    require_once('components/header.php');
    require_once('components/project.php');
    require_once('components/connect.php');
    require_once('components/footer.php');
});

Router::getInstance()->handleGet("/login", function () {
    require_once('components/header.php');
    require_once('components/login.php');
    require_once('components/footer.php');
});

Router::getInstance()->handleGet("/profile", function () {
    require_once('components/header.php');
    require_once('components/profile.php');
    require_once('components/footer.php');
});

Router::getInstance()->handleGet("/quit", function () {
    unset($_COOKIE['insta']);
    setcookie('insta', null, -1, '/');
    header("Location: /login");
});

Router::getInstance()->{$_SERVER["REQUEST_URI"]};
?>