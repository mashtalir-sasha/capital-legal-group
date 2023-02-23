<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\BuhAbout;

AdminSection::registerModel(BuhAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
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
                            AdminFormElement::textarea('text1', 'Текст 1')->required(),
                            AdminFormElement::textarea('text2', 'Текст 2'),
                            
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('text1RU', 'Текст 1')->required(),
                            AdminFormElement::textarea('text2RU', 'Текст 2'),
                        ]),
                    ]),
                ];
            }, 8)->addColumn(function () {
                return [
                    AdminFormElement::image('image', 'Картинка')->required(),
                ];
            }, 4), 
        ]);

        return $form;
    });
});