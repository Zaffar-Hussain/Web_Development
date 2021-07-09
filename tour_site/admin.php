<?php

#include 'view/header.php';
require_once 'controller/ToursController.php';

$controller = new ToursController();

$controller->handleAdminRequest();

?>