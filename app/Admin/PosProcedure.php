<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\PosProcedure;

AdminSection::registerModel(PosProcedure::class, function (ModelConfiguration $model) {

    $model->setTitle('Процудура');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('updated_at')->setLabel('Дата зміни')
        ]);
        return $display;
    });

    $model->disableCreating();
    $model->disableDeleting();

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()->addColumn(function () {
                return [
                    AdminDisplay::tabbed([
                        'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('item1', 'Крок 1')->required(),
                            AdminFormElement::textarea('item2', 'Крок 2')->required(),
                            AdminFormElement::textarea('item3', 'Крок 3')->required(),
                            AdminFormElement::textarea('item4', 'Крок 4')->required(),
                            AdminFormElement::textarea('item5', 'Крок 5')->required(),
                            AdminFormElement::textarea('item6', 'Крок 6')->required(),
                            AdminFormElement::textarea('note', 'Нотатка'),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('item1RU', 'Шаг 1')->required(),
                            AdminFormElement::textarea('item2RU', 'Шаг 2')->required(),
                            AdminFormElement::textarea('item3RU', 'Шаг 3')->required(),
                            AdminFormElement::textarea('item4RU', 'Шаг 4')->required(),
                            AdminFormElement::textarea('item5RU', 'Шаг 5')->required(),
                            AdminFormElement::textarea('item6RU', 'Шаг 6')->required(),
                            AdminFormElement::textarea('noteRU', 'Примечание'),
                        ]),
                    ]),
                ];
            }), 
        ]);

        return $form;
    });
});