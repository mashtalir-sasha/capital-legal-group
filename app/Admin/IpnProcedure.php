<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\IpnProcedure;

AdminSection::registerModel(IpnProcedure::class, function (ModelConfiguration $model) {

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
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('item1RU', 'Шаг 1')->required(),
                            AdminFormElement::textarea('item2RU', 'Шаг 2')->required(),
                            AdminFormElement::textarea('item3RU', 'Шаг 3')->required(),
                        ]),
                    ]),
                ];
            }), 
        ]);

        return $form;
    });
});