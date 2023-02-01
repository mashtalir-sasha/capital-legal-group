<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\DosReceive;

AdminSection::registerModel(DosReceive::class, function (ModelConfiguration $model) {

    $model->setTitle('Що отримуєте');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
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
                            AdminFormElement::textarea('title', 'Заголовок')->required()->setRows(3),
                            
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required()->setRows(3),
                            
                        ]),
                    ]),
                ];
            }, 8)->addColumn(function () {
                return [
                    AdminFormElement::image('image', 'Іконка (в форматі SVG)')->required(),
                ];
            }, 4)
        ]);

        return $form;
    });
});