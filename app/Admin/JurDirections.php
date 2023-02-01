<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\JurDirections;

AdminSection::registerModel(JurDirections::class, function (ModelConfiguration $model) {

    $model->setTitle('Напрямки роботи');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('text')->setLabel('Текст'),
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
                            AdminFormElement::text('text', 'Текст')->required(),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('textRU', 'Текст')->required(),
                        ]),
                    ]),
                ];
            }), 
        ]);

        return $form;
    });
});