<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\VidkryttiaTarif;

AdminSection::registerModel(VidkryttiaTarif::class, function (ModelConfiguration $model) {

    $model->setTitle('Варіанти пропозицій');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('name')->setLabel('Назва'),
            AdminColumn::text('title')->setLabel('Заголовок'),
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
                            AdminFormElement::text('name', 'Назва')->required(),
                            AdminFormElement::text('title', 'Заголовок')->required(),  
                            AdminFormElement::ckeditor('text', 'Опис')->required(), 
                            
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('nameRU', 'Название')->required(),
                            AdminFormElement::text('titleRU', 'Заголовок')->required(),
                            AdminFormElement::ckeditor('textRU', 'Описание')->required(),
                            
                        ]),
                    ]),
                    AdminFormElement::text('price', 'Ціна')->required(),
                ];
            }), 
        ]);

        return $form;
    });
});