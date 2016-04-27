<?php
require __DIR__.'/../vendor/autoload.php';
Zend\Mvc\Application::init(require __DIR__.'/../config/app.config.php')->run();
