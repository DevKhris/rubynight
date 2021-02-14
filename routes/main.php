<?php

/**
 *  * Main routes 
 *
 * @category Framework
 * @package  RubyNight;
 * @author   Christian Hernandez (@DevKhris) <devkhris@outlook.com>
 * @license  MIT https://github.com/DevKhris/rubynight/blob/main/LICENSE
 * @link     Repository https://github.com/DevKhris/rubynight
 */

use RubyNight\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Main routes 
|--------------------------------------------------------------------------
 */

$app->route->get('/', [IndexController::class, 'index']);
