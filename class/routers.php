<?php

use Class\Classes\Mvc\Router;
use Class\Classes\Mvc\UserController;

Router::get('/users', UserController::class, 'usersPage');
Router::get('photos', UserController::class, 'usersPhotosPage');