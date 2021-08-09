<?php

declare(strict_types=1);

use App\Controller\HelloController;
use App\Controller\SiteController;
use Yiisoft\Router\Route;

return [
    Route::get('/')->action([SiteController::class, 'index'])->name('home'),
    Route::get('/say[/{message}]')->action([HelloController::class, 'say'])->name('hello/say'),
];
