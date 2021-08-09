<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Yiisoft\Yii\View\ViewRenderer;

class HelloController
{
    private ViewRenderer $viewRenderer;

    public function __construct(ViewRenderer $viewRenderer)
    {
        $this->viewRenderer = $viewRenderer->withControllerName('hello');
    }

    public function say(ServerRequestInterface $request): ResponseInterface
    {
        $message = $request->getAttribute('message', 'Hello!');

        return $this->viewRenderer->render('say', [
            'message' => $message,
        ]);
    }
}
