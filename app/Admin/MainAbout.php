<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\MainAbout;

AdminSection::registerModel(MainAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('text')->setLabel('Текст')->setWidth('500px'),
            AdminColumn::text('video')->setLabel('Youtube відео'),
            AdminColumn::url('video'),
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
                            AdminFormElement::textarea('text', 'Текст')->required(),    
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('textRU', 'Текст')->required(),
                        ]),
                    ]),
                ];
            })->addColumn(function () {
                return [
                    AdminFormElement::text('video', 'Коротке посилання Youtube')->required(),
                ];
            }), 
        ]);

        return $form;
    });
});