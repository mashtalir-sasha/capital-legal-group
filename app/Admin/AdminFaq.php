<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\AdminFaq;

AdminSection::registerModel(AdminFaq::class, function (ModelConfiguration $model) {

    $model->setTitle('Питання - відповідь');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('question')->setLabel('Питання'),
            AdminColumn::text('created_at')->setLabel('Дата створення'),
            AdminColumn::text('updated_at')->setLabel('Дата зміни')
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()->addColumn(function () {
                return [
                    AdminDisplay::tabbed([
                        'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('question', 'Питання')->required(),
                            AdminFormElement::ckeditor('answer', 'Відповідь')->required(),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('questionRU', 'Вопрос')->required(),
                            AdminFormElement::ckeditor('answerRU', 'Ответ')->required(),
                        ]),
                    ]),
                ];
            }), 
        ]);

        return $form;
    });
});