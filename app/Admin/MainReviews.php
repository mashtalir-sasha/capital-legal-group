<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\MainReviews;

AdminSection::registerModel(MainReviews::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('title')->setLabel('Назва'),
            AdminColumn::image('image')->setLabel('Фото'),
            AdminColumn::text('updated_at')->setLabel('Дата створення'),
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
                            AdminFormElement::text('title', 'Назва компанії')->required(),    
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('titleRU', 'Название компании')->required(),
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