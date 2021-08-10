<?php

namespace App\Form;

use Yiisoft\Form\FormModel;
use Yiisoft\Validator\Rule\Required;

class HelloForm extends FormModel
{
    private string $message = '';

    public function getMessage(): string
    {
        return $this->message;
    }

    public function attributeLabels(): array
    {
        return [
            'message' => 'Message',
        ];
    }

    public function getRules(): array
    {
        return [
            'message' => [
                Required::rule()
            ]
        ];
    }
}
