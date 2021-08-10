<?php

use Yiisoft\Form\Widget\Field;
use Yiisoft\Form\Widget\Form;
use Yiisoft\Html\Html;

/* @var \App\Form\HelloForm $form */
/* @var string $csrf */
/* @var \Yiisoft\Router\UrlGeneratorInterface $url */

?>


<?php if (!empty($form->getMessage())): ?>
    <div class="notification is-success">
        The message is: <?= Html::encode($form->getMessage()) ?>
    </div>
<?php endif ?>

<?= Form::widget()
    ->action($url->generate('hello/say'))
    ->options([
        'csrf' => $csrf,
    ])
    ->begin() ?>

<?= Field::widget()->config($form, 'message') ?>

<?= Html::submitButton('Say') ?>

<?= Form::end() ?>
