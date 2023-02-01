<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\MainClients;

AdminSection::registerModel(MainClients::class, function (ModelConfiguration $model) {

    $model->setTitle('Клієнти і партнери');
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
                    AdminFormElement::images('images', 'Лого клієнтів')->required(),
                ];
            }), 
        ]);

        return $form;
    });
});