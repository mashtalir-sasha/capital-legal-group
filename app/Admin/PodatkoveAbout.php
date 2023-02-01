<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\PodatkoveAbout;

AdminSection::registerModel(PodatkoveAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('text1')->setLabel('Текст1'),
            AdminColumn::text('text2')->setLabel('Текст2'),
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
                            AdminFormElement::textarea('text1', 'Текст1')->required(),
                            AdminFormElement::textarea('text2', 'Текст2'),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('text1RU', 'Текст1')->required(),
                            AdminFormElement::textarea('text2RU', 'Текст2'),
                        ]),
                    ]),
                ];
            }, 8)->addColumn(function () {
                return [
                    AdminFormElement::text('video', 'Коротке посилання Youtube')->required(),
                ];
            }, 4), 
        ]);

        return $form;
    });
});