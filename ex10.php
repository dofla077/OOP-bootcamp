<?php

use Acme\AuthController;
use Acme\RegisterUser;

$registraion = new RegisterUser();

$authController = new AuthController($registraion);

$authController->register();