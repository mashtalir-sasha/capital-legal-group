<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\MainTeam;

AdminSection::registerModel(MainTeam::class, function (ModelConfiguration $model) {

    $model->setTitle('Команда');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('name')->setLabel('Ім\'я'),
            AdminColumn::image('image')->setLabel('Фото'),
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
                            AdminFormElement::text('name', 'Ім\'я')->required(),
                            AdminFormElement::text('position', 'Посада')->required(),
                            AdminFormElement::text('number', 'Інформація числом'),
                            AdminFormElement::textarea('text', 'Текстовий опис')->required(),    
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('nameRU', 'Имя')->required(),
                            AdminFormElement::text('positionRU', 'Должность')->required(),
                            AdminFormElement::text('numberRU', 'Информация числом'),
                            AdminFormElement::textarea('textRU', 'Текстовое описание')->required(), 
                        ]),
                    ]),
                ];
            })->addColumn(function () {
                return [
                    AdminFormElement::image('image', 'Фото')->required(),
                ];
            }), 
        ]);

        return $form;
    });
});