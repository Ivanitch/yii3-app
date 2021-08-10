<?php

namespace App\Controller;

use App\Form\HelloForm;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Yiisoft\Http\Method;
use Yiisoft\Validator\Validator;
use Yiisoft\Yii\View\ViewRenderer;

class HelloController
{
    private ViewRenderer $viewRenderer;

    public function __construct(ViewRenderer $viewRenderer)
    {
        $this->viewRenderer = $viewRenderer->withControllerName('hello');
    }

    public function say(ServerRequestInterface $request, Validator $validator): ResponseInterface
    {
        $form = new HelloForm();

        if ($request->getMethod() === Method::POST) {
            $form->load($request->getParsedBody());
            $validator->validate($form);
        }

        return $this->viewRenderer->render('say', [
            'form' => $form,
        ]);
    }
}
