<?php

use Ductong\BaseMvc\Controllers\Admin\UserController;
use Ductong\BaseMvc\Controllers\Admin\CategoryController;
use Ductong\BaseMvc\Controllers\Admin\DashboardController;
use Ductong\BaseMvc\Controllers\Admin\ProductController;
use Ductong\BaseMvc\Controllers\Client\CartController;
use Ductong\BaseMvc\Controllers\Client\HomeController;
use Ductong\BaseMvc\Controllers\Client\LogInController;
use Ductong\BaseMvc\Controllers\Client\ProDetailController;
use Ductong\BaseMvc\Controllers\Client\ProductsController;
use Ductong\BaseMvc\Controllers\Client\SignUpController;
use Ductong\BaseMvc\Router;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/client/home', HomeController::class, 'index');
$router->addRoute('/client/products', ProductsController::class, 'index');
$router->addRoute('/client/cart', CartController::class, 'index');
$router->addRoute('/client/product-detail', ProDetailController::class, 'index');
$router->addRoute('/client/login', LogInController::class, 'index');
$router->addRoute('/client/signup', SignUpController::class, 'index');

$router->addRoute('/admin/dashboard', DashboardController::class, 'index');
$router->addRoute('/admin/master', DashboardController::class, 'index');

$router->addRoute('/admin/users', UserController::class, 'index');
$router->addRoute('/admin/users/create', UserController::class, 'create');
$router->addRoute('/admin/users/update', UserController::class, 'update');
$router->addRoute('/admin/users/delete', UserController::class, 'delete');

$router->addRoute('/admin/categories', CategoryController::class, 'index');
$router->addRoute('/admin/categories/create', CategoryController::class, 'create');
$router->addRoute('/admin/categories/update', CategoryController::class, 'update');
$router->addRoute('/admin/categories/delete', CategoryController::class, 'delete');

$router->addRoute('/admin/products', ProductController::class, 'index');
$router->addRoute('/admin/products/create', ProductController::class, 'create');
$router->addRoute('/admin/products/update', ProductController::class, 'update');
$router->addRoute('/admin/products/delete', ProductController::class, 'delete');