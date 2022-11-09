<?php

require_once './autoload.php';

use Class\Classes\Mvc\Router;
use Class\Classes\Mvc\UserController;

Router::get('/class/users', UserController::class, 'usersPage');
Router::get('/class/photos', UserController::class, 'usersPhotosPage');
Router::get('/class/user-files', UserController::class, 'usersFilesPage');