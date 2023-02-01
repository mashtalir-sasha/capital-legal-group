<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\Oferta;

AdminSection::registerModel(Oferta::class, function (ModelConfiguration $model) {

    $model->setTitle('Договір оферти');
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
                            AdminFormElement::ckeditor('text', 'Текст')->required(),    
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::ckeditor('textRU', 'Текст')->required(),
                        ]),
                    ]),
                ];
            }), 
        ]);

        return $form;
    });
});