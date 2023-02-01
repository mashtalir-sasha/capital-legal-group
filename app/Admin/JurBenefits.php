<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\JurBenefits;

AdminSection::registerModel(JurBenefits::class, function (ModelConfiguration $model) {

    $model->setTitle('Переваги');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('text')->setLabel('Текст'),
            AdminColumn::image('image')->setLabel('Іконка')->setImageWidth('50px'),
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
                            AdminFormElement::text('title', 'Заголовок')->required(),
                            AdminFormElement::text('text', 'Текст')->required(),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('titleRU', 'Заголовок')->required(),
                            AdminFormElement::text('textRU', 'Текст')->required(),
                        ]),
                    ]),
                ];
            }, 8)->addColumn(function () {
                return [
                    AdminFormElement::image('image', 'Іконка в svg')->required(),
                ];
            }, 4), 
        ]);

        return $form;
    });
});