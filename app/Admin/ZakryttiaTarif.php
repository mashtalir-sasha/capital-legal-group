<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\ZakryttiaTarif;

AdminSection::registerModel(ZakryttiaTarif::class, function (ModelConfiguration $model) {

    $model->setTitle('Варіанти пропозицій');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Назва'),
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
                            AdminFormElement::textarea('offer', 'Суть пропозиції')->required(), 
                            AdminFormElement::ckeditor('accept', 'Варіант прийнятний якщо')->required(), 
                            AdminFormElement::text('term', 'Строк ліквідації')->required(), 
                            
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::text('titleRU', 'Заголовок')->required(),
                            AdminFormElement::textarea('offerRU', 'Суть предложения')->required(), 
                            AdminFormElement::ckeditor('acceptRU', 'Вариант приемлем если')->required(), 
                            AdminFormElement::text('termRU', 'Срок ликвидации')->required(), 
                            
                        ]),
                    ]),
                    AdminFormElement::text('price', 'Ціна')->required(),
                ];
            }), 
        ]);

        return $form;
    });
});