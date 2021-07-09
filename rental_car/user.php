<?php

#include 'view/header.php';
require_once 'controller/CarsController.php';

$controller = new CarsController();

$controller->handleUserRequest();

?>
